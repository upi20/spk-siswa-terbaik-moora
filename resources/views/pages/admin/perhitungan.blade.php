@extends('layouts.admin.sbadmin.master')

@section('content')
    <div class="card radius-10 border-start border-0 border-4 border-primary mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="my-1 text-primary">
                        Perhitungan dengan metode Multi-Objective Optimization by Ratio Analysis (MOORA)
                    </h6>
                </div>
            </div>
        </div>
    </div>

    @php
        $index = 0;
        $datas = $hitung[$index++];
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">1. Tabel alternatif</h6>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header->dari }}-{{ $header->sampai }} {{ $header->satuan }}"
                                data-toggle="tooltip">
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
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">2. Tabel Nilai alternatif berdasarkan kriteria</h6>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header->dari }}-{{ $header->sampai }} {{ $header->satuan }}"
                                data-toggle="tooltip">
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
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">4. Buat tabel pembagi</h6>
                    <small>Digunakan untuk proses normalisasi.</small>
                </div>
            </div>
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
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">4. Normalisasi nilai alternatif</h6>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header->dari }}-{{ $header->sampai }} {{ $header->satuan }}"
                                data-toggle="tooltip">
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
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">5. Nilai data alternatif dikali bobot</h6>
                </div>
            </div>
            <table class="table table-bordered">
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
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">
                        6. Nilai data alternatif dijumlahan berdasarkan jenis dan dihitung
                        dengan metode moora
                    </h6>
                </div>
            </div>
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
        href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css', name: 'rockeradmin') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js', name: 'rockeradmin') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js', name: 'rockeradmin') }}"></script>
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
