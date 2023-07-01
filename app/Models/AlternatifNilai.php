<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class AlternatifNilai extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'alternatif_id',
        'kriteria_id',
        'kirteria_nilai_id',
        'nilai',
    ];

    protected $primaryKey = 'id';
    protected $table = 'alternatif_nilai';
    const tableName = 'alternatif_nilai';

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id', 'id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function nilai()
    {
        return $this->belongsTo(AlternatifNilai::class, 'kirteria_nilai_id', 'id');
    }

    public static function datatable(Request $request)
    {
        $tahapans = Kriteria::orderBy('kode')->get();
        $alternatifs = Alternatif::with(['nilais'])->get();

        // sort nilai berdasarkan tahapan
        $results = [];
        foreach ($alternatifs as $alternatif) {
            $new_nilais = [];
            foreach ($tahapans as $tahapan) {
                $get_nilai = null;
                foreach ($alternatif->nilais as $nilai) {
                    if ($nilai->tahapan_id == $tahapan->id) $get_nilai = $nilai;
                }
                $new_nilais[] = $get_nilai;
            }

            unset($alternatif->nilais);
            $alternatif['nilais'] = $new_nilais;
            $results[] = $alternatif;
        }

        return [
            'header' => $tahapans,
            'body' => $results
        ];
    }
}
