<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('user.logout') }}">
                @csrf
                <button class='btn btn-danger' onclick="this.closest('form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    {{ __('Se déconnecter') }}
                </button>
            </form>
        </li>
    </ul>
</nav>