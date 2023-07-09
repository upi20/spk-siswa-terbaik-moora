@extends('layouts.admin.adminlte3.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
    @endphp
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3 class="card-title">Data {{ $page_attr['title'] }}</h3>
                <div>
                    <a href="{{ route(h_prefix('export')) }}" class="btn btn-success btn-primary btn-sm" data-toggle="tooltip"
                        title="Export Semua Data">
                        <i class="fas fa-upload"></i> Export
                    </a>
                    @if ($can_delete)
                        <button type="button" class="btn btn-rounded btn-danger btn-sm mr-1" data-toggle="tooltip"
                            title="Hapus Data Yang Dipilih" id="btnCheckboxDelete" style="display: none"
                            onclick="checkBoxActionDelete()">
                            <i class="fas fa-trash"></i> Hapus Data</button>
                    @endif
                    @if ($can_insert)
                        <button type="button" class="btn btn-rounded btn-primary btn-sm" data-bs-effect="effect-scale"
                            data-bs-toggle="modal" href="#modal-default" onclick="addFunc()" data-target="#modal-default">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    @endif
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover w-100" id="tbl_main">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="checkboxAll" onclick="checkBoxSetAll(this)"
                                class="form-check-input position-relative ml-1">
                        </th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        {!! $can_delete || $can_update ? '<th>Aksi</th>' : '' !!}
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-default-title"></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required />
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                        <li class="fas fa-save mr-1"></li> Simpan Perubahan
                    </button>
                    <button class="btn btn-light" data-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
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
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'can_update' => $can_update ? 'true' : 'false',
                'can_delete' => $can_delete ? 'true' : 'false',
            ],
        );
    @endphp

    <script src="{{ $resource }}"></script>
@endsection
