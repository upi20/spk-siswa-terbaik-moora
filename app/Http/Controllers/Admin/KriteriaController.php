<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class KriteriaController extends Controller
{
    private $validate_model = [
        'bobot' => ['required', 'integer'],
        'jenis' => ['required', 'string'],
        'nama' => ['required', 'string'],
        'kode' => ['required', 'string'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Kriteria::datatable($request);
        }
        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.kriteria.kriteria');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Kriteria();
            $model->bobot = $request->bobot;
            $model->jenis = $request->jenis;
            $model->nama = $request->nama;
            $model->kode = $request->kode;
            $model->save();
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
            $model = Kriteria::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));
            $model->bobot = $request->bobot;
            $model->jenis = $request->jenis;
            $model->nama = $request->nama;
            $model->kode = $request->kode;
            $model->save();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Kriteria $model): mixed
    {
        try {
            $model->delete();
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
            DB::beginTransaction();
            foreach ($request->ids as $id) {
                $return = $this->delete(Kriteria::find($id));
                if ($return->getStatusCode() != 200) {
                    return response()->json($return->original, $return->getStatusCode());
                }
            }
            DB::commit();
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
        return Kriteria::findOrFail($request->id);
    }
}
