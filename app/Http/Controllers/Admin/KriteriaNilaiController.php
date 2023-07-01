<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\KriteriaNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class KriteriaNilaiController extends Controller
{
    private $validate_model = [
        'kriteria_id' => ['required', 'integer'],
        'nama' => ['required', 'string'],
        'nilai' => ['nullable', 'integer'],
        'dari' => ['nullable', 'integer'],
        'sampai' => ['nullable', 'integer'],
    ];

    public function index(Request $request, Kriteria $kriteria)
    {
        $page_attr = adminBreadcumb(h_prefix(min: 2), isChild: true, title: 'Nilai Kriteria');
        $page_attr['navigation'] = h_prefix(min: 2);
        $view = path_view('pages.admin.kriteria.nilai');
        $data = compact('page_attr', 'view', 'kriteria');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function datatable(Request $request)
    {
        return KriteriaNilai::datatable($request);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            DB::beginTransaction();
            $model = new KriteriaNilai();
            $model->kriteria_id = $request->kriteria_id;
            $model->nama = $request->nama;
            $model->nilai = $request->nilai;
            $model->dari = $request->dari;
            $model->sampai = $request->sampai;
            $model->save();

            $model->kriteria->refersDariSampai();

            DB::commit();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request): mixed
    {
        try {

            $model = KriteriaNilai::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            DB::beginTransaction();
            $model->kriteria_id = $request->kriteria_id;
            $model->nama = $request->nama;
            $model->nilai = $request->nilai;
            $model->dari = $request->dari;
            $model->sampai = $request->sampai;
            $model->save();

            $model->kriteria->refersDariSampai();
            DB::commit();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(KriteriaNilai $model): mixed
    {
        try {
            DB::beginTransaction();
            $kriteria = $model->kriteria;
            $model->delete();

            $kriteria->refersDariSampai();
            DB::commit();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete_bulk(Request $request): mixed
    {
        try {
            foreach ($request->ids as $id) {
                $return = $this->delete(KriteriaNilai::find($id));
                if ($return->getStatusCode() != 200) {
                    return response()->json($return->original, $return->getStatusCode());
                }
            }
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function find(Request $request)
    {
        return KriteriaNilai::findOrFail($request->id);
    }
}
