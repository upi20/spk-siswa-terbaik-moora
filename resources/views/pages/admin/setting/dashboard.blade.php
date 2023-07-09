@extends('layouts.admin.adminlte3.master')

@section('content')
    <div class="card border-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <div>
                    <h3 class="card-title">Form {{ $page_attr['title'] }}</h6>
                </div>
            </div>
        </div>
        <div class="card-body">

            <form method="post" action="" enctype="multipart/form-data" id="MainForm">
                <div class="form-group">
                    <label><strong>Deskripsi :</strong></label>
                    <textarea class="summernote" name="dashboard">{!! setting_get('dashboard.html') !!}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3" id="btn-save" form="MainForm">
                    <li class="fas fa-save mr-1"></li> Simpan
                </button>
            </form>
        </div>
    </div>
@endsection

@section('stylesheet')
    @vite(['resources/css/_summernote.scss']);
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/summernote/summernote1.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    @php $resource = resource_loader(blade_path: $view); @endphp
    <script src="{{ $resource }}"></script>
@endsection
