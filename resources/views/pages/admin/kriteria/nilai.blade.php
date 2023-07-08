@extends('layouts.admin.rockeradmin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <h6 class="mt-2 text-uppercase">Nilai Kriteria {{ $kriteria->nama }}</h6>
                <div>
                    <a href="{{ route(h_prefix(min: 2)) }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    @if ($can_delete)
                        <button type="button" class="btn btn-rounded btn-danger btn-sm me-1" data-toggle="tooltip"
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
            <table class="table table-striped table-hover w-100" id="tbl_main">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="checkboxAll" onclick="checkBoxSetAll(this)"
                                class="form-check-input position-relative ms-1">
                        </th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                        <th>Dari</th>
                        <th>Sampai</th>
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
                    <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Tutup" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="kriteria_id" name="kriteria_id" value="{{ $kriteria->id }}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required />
                        </div>
                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input type="number" class="form-control" id="nilai" name="nilai" required />
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dari">Dari ({{ $kriteria->satuan }})</label>
                                    <input type="number" class="form-control" id="dari" name="dari" required />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="sampai">Sampai ({{ $kriteria->satuan }})</label>
                                    <input type="number" class="form-control" id="sampai" name="sampai" required />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                        <li class="fas fa-save mr-1"></li> Simpan Perubahan
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css', name: 'rockeradmin_vertical') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js', name: 'rockeradmin_vertical') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js', name: 'rockeradmin_vertical') }}">
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
