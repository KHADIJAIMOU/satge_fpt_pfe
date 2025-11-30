@extends('layoutsUser.app')

@section('content')
<div class="login-split-screen">
    <!-- Left Side (Image & Text) -->
    <div class="login-left">
        <div class="login-left-content fade-in-up">
            <h1>ابني مستقبلك <br> معنا</h1>
            <p>تعلم مهارات جديدة، اكتشف شغفك، وحقق طموحاتك المهنية</p>
            <img src="{{ asset('img/study.jpg') }}" alt="Login Illustration" class="login-left-img">
        </div>
    </div>

    <!-- Right Side (Form) -->
    <div class="login-right" dir="rtl">
        <div class="login-form-container fade-in-up" style="animation-delay: 0.2s;">
            <center>
                <div class="login-logo">
                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
                </div>

                <h2 class="login-title">تسجيل الدخول</h2>

                <form method="POST" action="{{ route('user.login') }}">
                    @csrf
            </center>
            <div class="form-group mb-4">
                <label for="CD_ETAB" class="mb-2 text-muted">{{ __('كود المستخدم') }}</label>
                <input id="CD_ETAB" type="text" class="penn-input @error('CD_ETAB') is-invalid @enderror" name="CD_ETAB" value="{{ old('CD_ETAB') }}" required autofocus placeholder="أدخل اسم المستخدم">
                @error('CD_ETAB')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password" class="mb-2 text-muted">{{ __('كلمة المرور') }}</label>

                <input id="password" type="password" class="penn-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="d-flex justify-content-between">
                    <a href="#" style="color: var(--penn-teal); font-size: 0.9rem;">نسيت كلمة المرور؟</a>
                </div>

            </div>

            <div class="form-group mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-muted" for="remember">
                        {{ __('تذكرني') }}
                    </label>
                </div>
            </div>

            <button type="submit" class="penn-btn-teal mb-3">
                {{ __('تسجيل الدخول') }}
            </button>

            <div class="text-center">
                <span class="text-muted">ليس لديك حساب؟</span>
                <a href="{{ route('register') }}" style="color: var(--penn-teal); font-weight: 700;">إنشاء حساب جديد</a>
            </div>
            </form>


        </div>
    </div>
</div>

<style>
    /* Hide default navbar/footer for this page only if they exist in layout */
    .navbar,
    footer {
        display: none !important;
    }

    body {
        background: #fff !important;
    }

    #app {
        padding: 0 !important;
    }

    main {
        padding: 0 !important;
    }
</style>
@endsection