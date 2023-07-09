@extends('layouts.admin.adminlte3.master')

@section('content')
    <div class="card card-info card-outline">
        <div class="card-body">
            <h3 class="my-1">
                Perhitungan dengan metode Multi-Objective Optimization by Ratio Analysis (MOORA)
            </h3>
        </div>
    </div>

    @php
        $index = 0;
        $datas = $hitung[$index++];
    @endphp
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3 class="card-title">1. Tabel alternatif</h3>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header->dari }}-{{ $header->sampai }}" data-toggle="tooltip">
                                {{ $header->nama }} ({{ $header->kode }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body->nama }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    @php
                                        $title = 'Nilai Tidak Valid';
                                        if ($nilai->kirteria_nilai) {
                                            $title = "{$nilai->kirteria_nilai->nilai} | {$nilai->kirteria_nilai->nama} ({$nilai->kirteria_nilai->dari} - {$nilai->kirteria_nilai->sampai})";
                                        }
                                    @endphp
                                    <td title="{{ $title }}" data-toggle="tooltip">
                                        {{ $nilai->nilai }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3 class="card-title">2. Tabel Nilai alternatif berdasarkan kriteria</h3>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header->dari }}-{{ $header->sampai }}" data-toggle="tooltip">
                                {{ $header->nama }} ({{ $header->kode }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body->nama }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    @php
                                        $title = 'Nilai Tidak Valid';
                                        if ($nilai->kirteria_nilai) {
                                            $title = "{$nilai->nilai} | {$nilai->kirteria_nilai->nama} ({$nilai->kirteria_nilai->dari} - {$nilai->kirteria_nilai->sampai})";
                                        }
                                    @endphp
                                    <td title="{{ $title }}" data-toggle="tooltip">
                                        {{ $nilai->nilai_kriteria }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3 class="card-title">3. Buat tabel pembagi</h3>
                <small>Digunakan untuk proses normalisasi.</small>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td class="fw-bold">Pembagi</td>
                    @foreach ($datas['header'] as $header)
                        <td title="{{ $header->nilai_str }}" data-toggle="tooltip">
                            {{ $header->nilai }}
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3 class="card-title">4. Normalisasi nilai alternatif</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between w-100">
                <div>
                    <h3 class="card-title">
                        </h6>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header->dari }}-{{ $header->sampai }}" data-toggle="tooltip">
                                {{ $header->nama }} ({{ $header->kode }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body->nama }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai->nilai_normalisasi_str }}" data-toggle="tooltip">
                                        {{ $nilai->nilai_normalisasi }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3 class="card-title">5. Nilai data alternatif dikali bobot</h3>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-3`">
                <tr>
                    <td class="fw-bold">Kriteria</td>
                    @foreach ($datas['header'] as $header)
                        <td>
                            {{ $header->nama }} ({{ $header->kode }})
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="fw-bold">Bobot</td>
                    @foreach ($datas['header'] as $header)
                        <td title="{{ $header->bobot }} / 100%" data-toggle="tooltip">
                            {{ $header->bobot / 100 }}
                        </td>
                    @endforeach
                </tr>
            </table>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="Bobot: {{ $header->bobot / 100 }}" data-toggle="tooltip">
                                {{ $header->nama }} ({{ $header->kode }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body->nama }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai->nilai_bobot_str }}" data-toggle="tooltip">
                                        {{ $nilai->nilai_bobot }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3 class="card-title">
                    6. Nilai data alternatif dijumlahan berdasarkan jenis dan dihitung dengan metode moora
                </h3>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>MIN {{ $datas['min'] }}</th>
                        <th>MIN {{ $datas['max'] }}</th>
                        <th>Y I (MAX -MIN)</th>
                        <th>Peringkat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body->nama }}</td>
                            <td title="{{ $body->cost_str }}" data-toggle="tooltip">
                                {{ $body->cost }}
                            </td>
                            <td title="{{ $body->benefit_str }}" data-toggle="tooltip">
                                {{ $body->benefit }}
                            </td>
                            <td title="{{ $body->moora_str }}" data-toggle="tooltip">
                                {{ $body->moora }}
                            </td>
                            <td>{{ $body->rank }}</td>
                        </tr>
                    @endforeach
                </tbody>
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
    @php
        $resource = resource_loader(blade_path: $view);
    @endphp
    <script>
        $(document).ready(() => {
            $('.datatable').each((i, e) => {
                const table_html = $(e);
                const new_table = $(e).DataTable({
                    scrollX: true,
                    language: {
                        url: datatable_indonesia_language_url
                    },
                    columnDefs: [{
                        orderable: false,
                        targets: [0]
                    }],
                });

                new_table.on('draw.dt', function() {
                    tooltip_refresh();
                    var PageInfo = table_html.DataTable().page.info();
                    new_table.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });
            });
        })
    </script>
@endsection
