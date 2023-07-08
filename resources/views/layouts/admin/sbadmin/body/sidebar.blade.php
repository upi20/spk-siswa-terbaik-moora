<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <img style="height: 45px" src="{{ asset(setting_get(set_admin('app.foto_light_mode'))) }}" class="logo-icon"
            alt="logo icon">
        <img style="height: 45px" src="{{ asset(setting_get(set_admin('app.foto_light_landscape_mode'))) }}"
            class="logo-landscape" alt="logo icon">
    </a>

    {!! sidebar_menu_admin_sbadmin($page_attr->navigation) !!}
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
