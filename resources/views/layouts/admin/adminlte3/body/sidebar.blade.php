<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img style="height: 45px" src="{{ asset(setting_get(set_admin('app.foto_light_mode'))) }}" class="logo-icon ml-2"
            alt="logo icon">
        <img style="height: 45px" src="{{ asset(setting_get(set_admin('app.foto_light_landscape_mode'))) }}"
            class="logo-landscape ml-2" alt="logo icon">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel d-flex">
            <div class="image  mt-2 ">
                @php
                    $templateProfileFoto = auth()->user()->foto ? asset('assets/profile/' . auth()->user()->foto) : asset('profile.png');
                @endphp
                <img src="{{ $templateProfileFoto }}" class="img-circle elevation-2"
                    alt="{{ ucfirst(auth()->user()->name) }}">
            </div>

            <div class="info">
                <a href="{{ route('admin.profile') }}" class="d-block text-capitalize mb-0">
                    {{ ucfirst(auth()->user()->name) }}
                </a>
                <small
                    class="form-text text-muted mt-0">{{ ucfirst(
                        implode(
                            ', ',
                            auth()->user()->roles->map(function ($v) {
                                    return $v->name;
                                })->toArray(),
                        ),
                    ) }}</small>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        {!! sidebar_menu_admin_adminlte3($page_attr->navigation) !!}
    </div>
</aside>
