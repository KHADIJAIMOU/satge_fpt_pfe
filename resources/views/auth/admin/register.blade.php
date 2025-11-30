<!-- resources/views/auth/admin/register.blade.php -->

@extends('layoutsAdmin.app')

@section('content')
<div class="login-split-screen">
    <!-- Left Side (Image & Text) -->
    <div class="login-left">
        <div class="login-left-content fade-in-up">
            <h1>إدارة المؤسسة <br> التعليمية</h1>
            <p>سجل مؤسستك الآن واستفد من أدوات إدارة متطورة وفعالة.</p>
            <img src="{{ asset('img/study.jpg') }}" alt="Admin Register Illustration" class="login-left-img">
        </div>
    </div>

    <!-- Right Side (Form) -->
    <div class="login-right" dir="rtl">
        <div class="login-form-container fade-in-up" style="animation-delay: 0.2s;">
            <div class="login-logo text-center">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
            </div>

            <h2 class="login-title text-center">تسجيل مؤسسة جديدة</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="NOM_ETABL" class="mb-2 text-muted">{{ __('اسم المؤسسة') }}</label>
                    <input id="NOM_ETABL" type="text" class="penn-input @error('NOM_ETABL') is-invalid @enderror" name="NOM_ETABL" value="{{ old('NOM_ETABL') }}" required autocomplete="NOM_ETABL" autofocus placeholder="أدخل اسم المؤسسة">
                    @error('NOM_ETABL')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="CD_ETAB" class="mb-2 text-muted">{{ __('رمز المؤسسة') }}</label>
                    <input id="CD_ETAB" type="text" class="penn-input @error('CD_ETAB') is-invalid @enderror" name="CD_ETAB" value="{{ old('CD_ETAB') }}" required autocomplete="CD_ETAB" placeholder="أدخل رمز المؤسسة">
                    @error('CD_ETAB')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="mb-2 text-muted">{{ __('كلمة المرور') }}</label>
                    <input id="password" type="password" class="penn-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="••••••••">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="password-confirm" class="mb-2 text-muted">{{ __('تأكيد كلمة المرور') }}</label>
                    <input id="password-confirm" type="password" class="penn-input" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
                </div>

                <button type="submit" class="penn-btn-teal mb-3">
                    {{ __('تسجيل') }}
                </button>

                <div class="text-center">
                    <span class="text-muted">مسجل بالفعل؟</span>
                    <a href="{{ route('user.login') }}" style="color: var(--penn-teal); font-weight: 700;">تسجيل الدخول</a>
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