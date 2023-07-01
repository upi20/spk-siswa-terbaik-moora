<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlternatifNilai;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        $hitung = $this->hitung($request);
        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.perhitungan');
        $data = compact('page_attr', 'view', 'hitung');
        $data['compact'] = $data;

        return view($view, $data);
    }

    public function hitung($request)
    {
        $index = 0;

        // 1 tabel alternatif //===================================================================
        $datatable = AlternatifNilai::datatable($request);
        $hitung[$index++] = $datatable;

        // 2 Tabel Nilai alternatif berdasarkan kriteria //========================================
        // naik kan kriteria nilai karena ini yang akan di pakai nilai_kriteria yang akan digunakan
        $body = [];
        foreach ($datatable['body'] as $b) {
            $nilais = [];
            foreach ($b['nilais'] as $n) {
                if (is_null($n)) {
                    $nilais[] = null;
                } else {
                    $nilai = 0;
                    if ($n->kirteria_nilai) $nilai = $n->kirteria_nilai->nilai;
                    $n->nilai_kriteria = $nilai;
                    $nilais[] = $n;
                }
            }
            $b->nilais = $nilais;
            $body[] = $b;
        }
        $datatable['body'] = $body;
        $hitung[$index++] = $datatable;

        // 3 buat dan hitung pembagi// ============================================================
        $pembagi = [];
        foreach ($datatable['header'] as $header) {
            $header->nilai = 0;
            $header->nilai_str = '';
            $pembagi[] = $header;
        }
        // hitung pembagi
        foreach ($datatable['body'] as $body) {
            foreach ($body['nilais'] as $i => $n) {
                if ($n != null) {
                    $pembagi[$i]->nilai += ($n->nilai_kriteria ** 2);
                    $pembagi[$i]->nilai_str .= (($pembagi[$i]->nilai_str == '' ? '' : ' + ') . "({$n->nilai_kriteria}^2)");
                }
            }
        }

        // di akarin
        $results = [];
        foreach ($pembagi as $p) {
            $p->nilai = sqrt($p->nilai);
            $p->nilai_str = "SQRT({$p->nilai_str})";

            $results[] = $p;
        }
        $pembagi = $results;
        $datatable['header'] = $pembagi;
        $hitung[$index++] = $datatable;

        // 4. Normalisasi nilai alternatif // =====================================================
        $normalisasi = [];
        foreach ($datatable['body'] as $body) {
            $nilais = [];
            foreach ($body['nilais'] as $i => $n) {
                if ($n != null) {
                    $pembagi = $datatable['header'][$i]->nilai;
                    $n->nilai_normalisasi = $n->nilai_kriteria / $pembagi;
                    $n->nilai_normalisasi_str = "{$n->nilai_kriteria} / {$pembagi}";
                    $nilais[] = $n;
                } else {
                    $nilais[] = null;
                }
            }

            $body->nilais = $nilais;
            $normalisasi[] = $body;
        }
        $datatable['body'] = $normalisasi;
        $hitung[$index++] = $datatable;

        // 5. Nilai data alternatif dikali bobot // ===============================================
        $bobots = [];
        foreach ($datatable['body'] as $body) {
            $nilais = [];
            foreach ($body['nilais'] as $i => $n) {
                if ($n != null) {
                    $bobot = $datatable['header'][$i]->bobot / 100;
                    $n->nilai_bobot = $n->nilai_normalisasi * $bobot;
                    $n->nilai_bobot_str = "{$n->nilai_normalisasi} * {$bobot}";
                    $nilais[] = $n;
                } else {
                    $nilais[] = null;
                }
            }

            $body->nilais = $nilais;
            $bobots[] = $body;
        }
        $datatable['body'] = $bobots;
        $hitung[$index++] = $datatable;

        // 6. Nilai data alternatif dikali bobot // ===============================================
        // a kelopokan nilai berdasarkan jenis min=cost
        $kelompoks = [];
        foreach ($datatable['body'] as $body) {
            $body->benefit = 0;
            $body->benefit_str = "";
            $body->cost = 0;
            $body->cost_str = "";

            foreach ($body['nilais'] as $i => $n) {
                if ($n != null) {
                    if ($datatable['header'][$i]->jenis == 'Benefit') {
                        $body->benefit += $n->nilai_bobot;
                        $body->benefit_str .= (($body->benefit_str == '' ? '' : ' + ') . $n->nilai_bobot);
                    } else {
                        $body->cost += $n->nilai_bobot;
                        $body->cost_str .= (($body->cost_str == '' ? '' : ' + ') . $n->nilai_bobot);
                    }
                }
            }

            $kelompoks[] = $body;
        }
        $datatable['body'] = $kelompoks;

        // b hitung menggunakan metode mora
        $moora = [];
        foreach ($datatable['body'] as $body) {
            $body->moora = $body->benefit - $body->cost;
            $body->moora_str = "{$body->benefit} - {$body->cost}";
            $moora[] = $body;
        }
        $datatable['body'] = $moora;

        // c order by moora
        $collects = collect($datatable['body'])->sortByDesc('moora')->values()->all();
        $sorts = [];
        foreach ($collects as $k => $v) {
            $v['rank'] = $k + 1;
            $sorts[] = $v;
        }
        $datatable['body'] = $sorts;

        // d label min/max
        $min = '';
        $max = '';
        foreach ($datatable['header'] as $header) {
            if ($header->jenis == 'Benefit') {
                $max .= (($max == '' ? '' : ' + ') . $header->kode);
            } else {
                $min .= (($min == '' ? '' : ' + ') . $header->kode);
            }
        }

        $datatable['max'] = "($max)";
        $datatable['min'] = "($min)";

        $hitung[$index++] = $datatable;
        return $hitung;
    }
}
