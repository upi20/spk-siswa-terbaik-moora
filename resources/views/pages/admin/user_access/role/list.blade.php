@extends('layouts.admin.adminlte3.master')

@section('content')
    @php
        $can_insert = auth_can('h_prefix().insert');
        $can_update = auth_can('h_prefix().update');
        $can_delete = auth_can('h_prefix().delete');
    @endphp
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="d-flex justify-content-between w-100">
                <div>
                    <h3 class="card-title">Data {{ $page_attr['title'] }}</h6>
                </div>
                @if ($can_insert)
                    <div>
                        <a type="button" class="btn btn-rounded btn-success btn-sm" href="{{ route(h_prefix('create')) }}">
                            <i class="fas fa-plus"></i> Tambah
                        </a>
                    </div>
                @endif
            </div>
            <hr class="mt-1" />
            <table class="table table-striped table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Guard</th>
                        <th>Updated At</th>
                        {!! $can_delete || $can_update ? '<th>Aksi</th>' : '' !!}
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css', name: 'adminlte3') }}" />
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/datatables-responsive/css/responsive.bootstrap4.min.css', name: 'adminlte3') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatables/jquery.dataTables.min.js', name: 'adminlte3') }}"></script>
    <script src="{{ asset_admin('plugins/datatables/jquery.dataTables.min.js', name: 'adminlte3') }}"></script>
    <script src="{{ asset_admin('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js', name: 'adminlte3') }}"></script>
    <script src="{{ asset_admin('plugins/datatables-responsive/js/dataTables.responsive.min.js', name: 'adminlte3') }}">
    </script>
    <script src="{{ asset_admin('plugins/datatables-responsive/js/responsive.bootstrap4.min.js', name: 'adminlte3') }}">
    </script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'can_update' => $can_update ? 'true' : 'false',
                'can_delete' => $can_delete ? 'true' : 'false',
                'page_title' => $page_attr['title'],
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
