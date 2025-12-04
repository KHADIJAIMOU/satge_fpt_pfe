<!-- Modern Navbar -->
<nav class="navbar navbar-expand-lg modern-navbar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand modern-logo" href="/">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#modernNav" aria-controls="modernNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars" style="color: var(--penn-dark);"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="modernNav">
            <ul class="navbar-nav ml-auto align-items-center" style="margin-right: auto; margin-left: 0;">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link modern-nav-link {{ session()->get('menu') == 'Home' ? 'active' : '' }}" href="/">الرئيسية</a>
                </li>

                <!-- News -->
                <li class="nav-item">
                    <a class="nav-link modern-nav-link {{ session()->get('menu') == 'ListEvent' ? 'active' : '' }}" href="/listEvent">الاخبار المحلية</a>
                </li>

                <!-- Visitor Dropdown -->
                @if (Auth::user())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle modern-nav-link {{ session()->get('menu') == 'Vip' ? 'active' : '' }}" href="#" id="visitorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        زائر
                    </a>
                    <div class="dropdown-menu text-right" aria-labelledby="visitorDropdown">
                        <a class="dropdown-item" href="/visiteur/reclamation">الشكايات</a>
                        <a class="dropdown-item" href="/visiteur/avi">الاراء</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/visiteur/informationprofile">حساب شخصي</a>
                        <a class="dropdown-item" href="/visiteur/changepassword">تغيير كلمة المرور</a>
                    </div>
                </li>
                @endif

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link modern-nav-link" href="#gettouch-section">تواصل معنا</a>
                </li>

            </ul>

            <!-- Auth Buttons -->
            <div class="form-inline my-2 my-lg-0 mr-3">
                @if (Auth::user())
                <form method="POST" action="{{ route('user.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-4" style="font-family: 'Tajawal'">
                        تسجيل الخروج
                    </button>
                </form>
                @else
                <a href="{{ route('user.login') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4 ml-2" style="font-family: 'Tajawal'">تسجيل الدخول</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm rounded-pill px-4" style="font-family: 'Tajawal'; background: var(--penn-gradient-primary); border: none;">انشاء حساب</a>
                @endif
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->