<?php

namespace App\Http\Controllers\Admin\Import;

use App\Http\Controllers\Controller;
use App\Models\Import\Calon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class CalonController extends Controller
{
    private $validate_model = [
        'file' => 'required|mimeTypes:' .
            'application/vnd.ms-office,' .
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,' .
            'application/vnd.ms-excel',
        'nama' => ['required', 'string'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Calon::datatable($request);
        }
        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.import.calon');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            DB::beginTransaction();
            $request->validate($this->validate_model);

            $model = new Calon();
            $model->nama = $request->nama;
            $model->save();

            $import = Calon::import($request, $model);
            if ($import['status']) {
                DB::commit();
                return response()->json();
            } else {
                delete_file($import['excel']);
                return $import['error'];
            }
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
            unset($this->validate_model['file']);
            $model = Calon::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->nama = $request->nama;
            $model->save();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Calon $model): mixed
    {
        try {
            DB::beginTransaction();
            $model->delete();
            $model->items()->delete();
            delete_file(Calon::excelFolder . "/" . $model->file);
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
        return Calon::findOrFail($request->id);
    }

    public function format(Request $request)
    {
        return Calon::format($request);
    }
}
