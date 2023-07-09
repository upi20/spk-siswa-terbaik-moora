<?php
$page_attr = (object) [
    'title' => isset($page_attr['title']) ? $page_attr['title'] : '',
    'description' => isset($page_attr['description']) ? $page_attr['description'] : setting_get(set_admin('meta.description')),
    'keywords' => isset($page_attr['keywords']) ? $page_attr['keywords'] : setting_get(set_admin('meta.keyword')),
    'author' => isset($page_attr['author']) ? $page_attr['author'] : setting_get(set_admin('meta.author')),
    'image' => isset($page_attr['image']) ? $page_attr['image'] : asset(setting_get(set_admin('meta.image'))),
    'navigation' => isset($page_attr['navigation']) ? $page_attr['navigation'] : false,
    'loader' => isset($page_attr['loader']) ? $page_attr['loader'] : setting_get(set_admin('app.preloader')),
    'breadcrumbs' => isset($page_attr['breadcrumbs']) ? (is_array($page_attr['breadcrumbs']) ? $page_attr['breadcrumbs'] : false) : false,
    'url' => isset($page_attr['url']) ? $page_attr['url'] : url(''),
    'type' => isset($page_attr['type']) ? $page_attr['type'] : 'website',
];
$page_attr_title = ($page_attr->title == '' ? '' : $page_attr->title . ' | ') . setting_get(set_admin('app.title'), env('APP_NAME'));
$notifikasi = beTopNotification();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- SEO -->
    <!-- Primary Meta Tags -->
    <title>{{ $page_attr_title }}</title>
    <meta name="description" content="{{ $page_attr->description }}">
    <meta name="author" content="{{ $page_attr->author }}">
    <meta name="keywords" content="{{ $page_attr->keywords }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page_attr_title }}">
    <meta property="og:description" content="{{ $page_attr->description }}">
    <meta property="og:image" content="{{ $page_attr->image }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('') }}">
    <meta name="twitter:title" content="{{ $page_attr_title }}">
    <meta name="twitter:description" content="{{ $page_attr->description }}">
    <meta name="twitter:image" content="{{ $page_attr->image }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $page_attr_title }}">
    <meta itemprop="description" content="{{ $page_attr->description }}">
    <meta itemprop="image" content="{{ $page_attr->image }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#0191D7">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset_admin('plugins/fontawesome-free/css/all.min.css', name: 'adminlte3') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css', name: 'adminlte3') }}">

    <link rel="stylesheet" href="{{ asset_admin('dist/css/adminlte.min.css', name: 'adminlte3') }}">

    <style>
        .nowrap {
            white-space: nowrap;
        }

        .note-float-center {
            display: block;
            margin: 0 auto;
        }

        .note-icon-float-center:before {
            content: "\2680"
        }

        .daterangepicker .calendar-table th,
        .daterangepicker .calendar-table td {
            color: black;
        }

        .sidebar-collapse .logo-landscape {
            display: none;
        }

        .logo-icon {
            display: none;
        }

        .sidebar-collapse .logo-icon {
            display: block;
        }

        .main-sidebar:hover .logo-icon {
            display: none;
        }

        .main-sidebar:hover .logo-landscape {
            display: block;
        }
    </style>

    <!-- CSS PLUGINS -->
    @yield('stylesheet')

    @foreach (json_decode(setting_get(set_admin('meta_list'), '{}')) as $meta)
        <!-- custom {{ $meta->name }} -->
        {!! $meta->value !!}
    @endforeach
    @vite(['resources/js/app.js'])
</head>


<body class="hold-transition sidebar-mini  layout-fixed">
    <input type="text" id="clipboard" style="position: fixed; top:-50px">
    <div class="wrapper">
        <div id="loader"></div>
        @include('layouts.admin.adminlte3.body.header')


        @include('layouts.admin.adminlte3.body.sidebar', [
            'page_attr' => $page_attr,
            'page_attr_navigation' => $page_attr->navigation,
        ])

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if ($page_attr->breadcrumbs)

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="m-0" style="font-size: 1.5rem;">{{ $page_attr->title }}</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    @foreach ($page_attr->breadcrumbs as $breadcrumb)
                                        @if (isset($breadcrumb['url']))
                                            @php
                                                $url = is_array($breadcrumb['url']) ? route($breadcrumb['url'][0], $breadcrumb['url'][1]) : route($breadcrumb['url']);
                                            @endphp
                                            <li class="breadcrumb-item">
                                                <a href="{{ $url }}"
                                                    title="Page To {{ $breadcrumb['name'] }}">
                                                    {{ $breadcrumb['name'] }}
                                                </a>
                                            </li>
                                        @else
                                            <li class="breadcrumb-item active">{{ $breadcrumb['name'] }}</li>
                                        @endif
                                    @endforeach
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            @endif

            <!-- Main content -->
            <div id="main-content" class="content pt-2">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!--end page wrapper -->
        @include('layouts.admin.adminlte3.body.footer')
    </div>
    <!--end wrapper-->


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset_admin('plugins/jquery/jquery.min.js', name: 'adminlte3') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset_admin('plugins/bootstrap/js/bootstrap.bundle.min.js', name: 'adminlte3') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset_admin('dist/js/adminlte.js', name: 'adminlte3') }}"></script>
    <!-- preloader -->
    <script src="{{ asset_admin('plugins/loader/loadingoverlay.min.js', name: 'adminlte3') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset_admin('plugins/sweetalert2/sweetalert2.min.js', name: 'adminlte3') }}"></script>

    <script>
        $(document).ready(function() {
            $("#loader").LoadingOverlay('progress')
            $(".btn-logout").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin ingin keluar ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    inputAttributes: {
                        id: "txt-note",
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('logout') }}";
                    }
                })
            })

            $("#dark-mode-switch").change(function() {
                setDarkMode(this.checked)
            })

            function setDarkMode(data) {
                data = data == 'null' ? false : ((typeof(data) == 'string') ? (data == 'false' ? false : true) :
                    data);

                if (data) {
                    $("body").addClass("dark-mode")
                    $("#nav-top").removeClass("navbar-white")
                    $("#nav-top").addClass("navbar-dark")
                    $(".preloader").addClass("bg-dark")
                    $("#dark-mode-switch-label").html('<i class="far fa-sun"></i>');
                } else {
                    $("body").removeClass("dark-mode")
                    $("#nav-top").removeClass("navbar-dark")
                    $(".preloader").removeClass("bg-dark")
                    $("#nav-top").addClass("navbar-white")
                    $("#dark-mode-switch-label").html('<i class="far fa-moon"></i>');
                }
                localStorage.setItem('isDarkMode', data);
                document.querySelector("#dark-mode-switch").checked = data;
            }
            setDarkMode(localStorage.getItem('isDarkMode'));
        })

        function setToast(data) {
            $(document).Toasts('create', {
                class: data.class,
                title: data.title,
                body: data.body
            })
            setTimeout(() => $("#toastsContainerTopRight").remove(), 5000);
        }
    </script>

    <script src="{{ resource_loader('pages/admin/admin.js') }}"></script>
    @yield('javascript')
</body>

</html>
