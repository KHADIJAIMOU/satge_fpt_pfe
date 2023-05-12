<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>
    <div class="canvas-search search-switch">
        <i class="fa fa-search"></i>
    </div>
   
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="/">
                        <img style="margin-left: -30px ; margin-top: -70px;" src="{{ asset('img/logo.jpg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="">تواصل معنا </a></li>

                        <li class="{{ session()->get('menu') == '' ? 'active' : '' }}"><a
                                href="">الشكايات</a></li>
                        <li class="{{ session()->get('menu') == '' ? 'active' : '' }}"><a
                                href="">الاراء</a></li>
                                <li class="{{ session()->get('menu') == 'ListEvent' ? 'active' : '' }}"><a
                                    href="/listEvent">الاخبار المحلية</a></li>
                        <li class="{{ session()->get('menu') == 'Home' ? 'active' : '' }}"><a href="/">الرئيسية</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">

                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>

                    </div>
                    <div class="to-social">


                        @if (Auth::user())
                            <form method="POST" action="{{ route('user.logout') }}">
                                @csrf
                                <a class="auth-btn" onclick="this.closest('form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>
                            </form>
                        @else
                            <a class="auth-btn" href="{{ route('user.login') }}">
                                {{ __('تسجيل الدخول  ') }}
                            </a>
                           
                    </div>
                    @endif


                </div>

            </div>
        </div>
    </div>
    <div class="canvas-open">
        <i class="fa fa-bars"></i>
    </div>
    </div>
</header>
</div>
<!-- Header End -->
