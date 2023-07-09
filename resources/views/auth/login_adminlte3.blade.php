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
];
$page_attr_title = ($page_attr->title == '' ? '' : $page_attr->title . ' | ') . setting_get(set_admin('app.title'), env('APP_NAME'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page_attr_title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset_admin('plugins/fontawesome-free/css/all.min.css', name: 'adminlte3') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/icheck-bootstrap/icheck-bootstrap.min.css', name: 'adminlte3') }}">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset_admin('dist/css/adminlte.min.css', name: 'adminlte3') }}">

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
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-primary">
            <div class="card-header text-center bg-gray">
                <img src="{{ asset(setting_get(set_admin('app.foto_dark_landscape_mode'))) }}"
                    style="max-height: 65px;" alt="Logo" />
            </div>

            <div class="card-body pt-3">
                <form action="" method="post" autocomplete="off" id="Loginform">
                    <div class="form-group">
                        <input type="text" name="email" autocomplete="off" class="form-control" id="email"
                            placeholder="Email/Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" autocomplete="off" class="form-control" id="password"
                            placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="icheck-primary">
                            <input type="checkbox" id="password-visibility">
                            <label for="password-visibility">
                                Lihat password
                            </label>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <button type="submit" form="Loginform" class="btn btn-block btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </button>
                </div>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="text-center px-3">
            <small class="form-text text-muted">{!! str_parse(settings()->get(set_admin('app.copyright'))) !!}</small>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset_admin('plugins/jquery/jquery.min.js', name: 'adminlte3') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset_admin('plugins/bootstrap/js/bootstrap.bundle.min.js', name: 'adminlte3') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset_admin('dist/js/adminlte.min.js', name: 'adminlte3') }}"></script>
    <!-- loader -->
    <script src="{{ asset_admin('plugins/loader/loadingoverlay.min.js', name: 'adminlte3') }}"></script>
    <!-- AdminLTE Validator -->

    <script src="{{ asset_admin('plugins/jquery-validation/jquery.validate.min.js', name: 'adminlte3') }}"></script>
    <script src="{{ asset_admin('plugins/jquery-validation/additional-methods.min.js', name: 'adminlte3') }}"></script>

    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ resource_loader('pages/admin/auth/login_adminlte3.js', params: ['redirect' => $redirect]) }}"></script>

</body>

</html>
