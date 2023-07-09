@extends('layouts.admin.adminlte3.master')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $total_alternatif }}</h3>

                    <p>Jumlah Alternatif</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('admin.alternatif') }}" class="small-box-footer">
                    Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>-</h3>
                    <p>Ganti Pasword</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('admin.password') }}" class="small-box-footer">Ganti
                    <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            {!! setting_get('dashboard.html') !!}
        </div>
    </div>
@endsection
