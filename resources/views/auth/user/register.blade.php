@extends('layoutsUser.app')

@section('content')
<div class="login-split-screen">
    <!-- Left Side (Image & Text) -->
    <div class="login-left">
        <div class="login-left-content fade-in-up">
            <h1>انضم إلينا <br> اليوم</h1>
            <p>أنشئ حسابك وابدأ رحلتك التعليمية مع أفضل الأساتذة والموارد.</p>
            <img src="{{ asset('img/study2.jpg') }}" alt="Register Illustration" class="login-left-img">
        </div>
    </div>

    <!-- Right Side (Form) -->
    <div class="login-right" dir="rtl">
        <div class="login-form-container fade-in-up" style="animation-delay: 0.2s;">
            <div class="login-logo text-center">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
            </div>

            <h2 class="login-title text-center">إنشاء حساب جديد</h2>

            <form method="POST" action="{{ route('user.register') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="name" class="mb-2 text-muted">{{ __('الاسم الكامل') }}</label>
                    <input id="name" type="text" class="penn-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="الاسم الكامل">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="mb-2 text-muted">{{ __('البريد الإلكتروني') }}</label>
                    <input id="email" type="email" class="penn-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="typeClass" class="mb-2 text-muted">{{ __('نوع القسم') }}</label>
                    <input id="typeClass" type="text" class="penn-input @error('typeClass') is-invalid @enderror" name="typeClass" value="{{ old('typeClass') }}" required autocomplete="typeClass" placeholder="مثال: علمي، أدبي...">
                    @error('typeClass')
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
                    <span class="text-muted">لديك حساب بالفعل؟</span>
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