<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Import\Alternatif as ImportAlternatif;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class AlternatifController extends Controller
{
    private $validate_model = [
        'nama' => ['required', 'string'],
        'kelas' => ['nullable', 'string'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Alternatif::datatable($request);
        }

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.alternatif.alternatif');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Alternatif();
            $model->nama = $request->nama;
            $model->kelas = $request->kelas;
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
            $model = Alternatif::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->nama = $request->nama;
            $model->kelas = $request->kelas;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Alternatif $model): mixed
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

    public function find(Request $request)
    {
        return Alternatif::findOrFail($request->id);
    }

    public function export(Request $request)
    {
        return ImportAlternatif::export($request);
    }

    public function delete_bulk(Request $request): mixed
    {
        try {
            foreach ($request->ids as $id) {
                $return = $this->delete(Alternatif::find($id));
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
}
