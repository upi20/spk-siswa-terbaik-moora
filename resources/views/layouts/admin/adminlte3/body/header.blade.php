<nav class="main-header navbar navbar-expand navbar-white navbar-light" id="nav-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}" role="button">Dashboard</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <input type="checkbox" name="dark-mode-switch" id="dark-mode-switch" style="display: none;">
            <label class="nav-link" for="dark-mode-switch" id="dark-mode-switch-label" style="cursor: pointer;">
                <i class="far fa-moon"></i>
            </label>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <button type="button" class="btn nav-link btn-logout">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </li>
    </ul>
</nav>
