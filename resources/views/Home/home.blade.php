@extends("Home.base")
@section('content')

<!-- Hero Section -->
<section class="penn-hero">
    <!-- Background Elements -->
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>
    <div class="hero-circle"></div>
    <div class="hero-dot"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <!-- Text Content (Right Side for RTL) -->
            <div class="col-lg-6 order-lg-2 text-right" dir="rtl">
                <div class="penn-hero-content fade-in-up">
                    <h1 class="penn-hero-title">
                        كل يوم هناك <br>
                        <span>فرصة جديدة</span> <br>
                        لتحقيق أحلامك
                    </h1>
                    <p class="penn-hero-description">
                        ابدأ رحلتك التعليمية اليوم مع أفضل المنصات الرقمية. مستقبل أفضل يبدأ من هنا.
                    </p>
                    <div class="d-flex gap-3 justify-content-start" style="gap: 15px;">
                        <a href="#gettouch-section" class="penn-btn">اكتشف المزيد <i class="fa fa-arrow-left mr-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Image Content (Left Side for RTL) -->
            <div class="col-lg-6 order-lg-1">
                <div class="hero-image-wrapper fade-in-up" style="animation-delay: 0.2s;">
                    <img src="{{asset('img/study.jpg')}}" alt="Student" class="hero-main-img">

                    <!-- Floating Badge 1 -->
                    <div class="hero-badge badge-1">
                        <div class="hero-badge-icon icon-success">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="hero-badge-content text-right">
                            <h5>+4500</h5>
                            <span>دورة تعليمية</span>
                        </div>
                    </div>

                    <!-- Floating Badge 2 -->
                    <div class="hero-badge badge-2">
                        <div class="hero-badge-icon icon-primary">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="hero-badge-content text-right">
                            <h5>+7500</h5>
                            <span>تلميذ نشيط</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Features Section (ChoseUs) -->
<section class="penn-features">
    <div class="container">
        <div class="penn-section-header">
            <span class="penn-section-subtitle">فضاءات</span>
            <h2 class="penn-section-title">خدماتنا الرقمية</h2>
        </div>
        <div class="row">
            <!-- Parents Space -->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="https://massarservice.men.gov.ma/waliye/Account" class="text-decoration-none">
                    <div class="penn-feature-card">
                        <div class="penn-feature-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h4 class="penn-feature-title">فضاء الآباء و الأمهات</h4>
                        <p class="penn-feature-description">تتبع المسار الدراسي للأبناء</p>
                    </div>
                </a>
            </div>
            <!-- Students Space -->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="https://massarservice.men.gov.ma/moutamadris/Account" class="text-decoration-none">
                    <div class="penn-feature-card">
                        <div class="penn-feature-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h4 class="penn-feature-title">فضاء التلميذات والتلاميذ</h4>
                        <p class="penn-feature-description">الاطلاع على النقط والنتائج</p>
                    </div>
                </a>
            </div>
            <!-- CPGE -->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="https://www.cpge.ac.ma/" class="text-decoration-none">
                    <div class="penn-feature-card">
                        <div class="penn-feature-icon">
                            <i class="fa fa-university"></i>
                        </div>
                        <h4 class="penn-feature-title">الأقسام التحضيرية</h4>
                        <p class="penn-feature-description">للمدارس العليا</p>
                    </div>
                </a>
            </div>
            <!-- Academies -->
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="https://www.men.gov.ma/Ar/Pages/academies.aspx" class="text-decoration-none">
                    <div class="penn-feature-card">
                        <div class="penn-feature-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h4 class="penn-feature-title">مواقع الأكاديميات</h4>
                        <p class="penn-feature-description">البوابة الرسمية</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Services Section (Pricing) -->
<section class="penn-services">
    <div class="container">
        <div class="penn-section-header">
            <span class="penn-section-subtitle">خدمات</span>
            <h2 class="penn-section-title">الشكايات والتتبع</h2>
        </div>
        <div class="row justify-content-center">
            <!-- Complaint -->
            <div class="col-lg-5 col-md-6 mb-4">
                <div class="penn-service-card">
                    <div class="penn-service-header">
                        <h2>وضع الشكاية</h2>
                        <p>خدمة إلكترونية للمواطنين</p>
                    </div>
                    <div class="penn-service-body text-center">
                        <ul class="penn-service-list text-right" dir="rtl">
                            <li>يرجى الإطلاع وقبول <a href="#" data-toggle="modal" data-target="#exampleModal" style="color: var(--penn-secondary); font-weight: bold;">شروط استخدام</a> الخدمة</li>
                            <li>الموافقة على معالجة معطياتكم الشخصية</li>
                        </ul>
                        <a href="" class="penn-btn mt-3">المرحلة الموالية</a>
                    </div>
                </div>
            </div>
            <!-- Tracking -->
            <div class="col-lg-5 col-md-6 mb-4">
                <div class="penn-service-card">
                    <div class="penn-service-header" style="background: var(--penn-gradient-secondary);">
                        <h2>تتبع شكاية</h2>
                        <p>تتبع مآل شكايتكم</p>
                    </div>
                    <div class="penn-service-body text-center">
                        <div class="mb-4">
                            <a href="https://massarservice.men.gov.ma/waliye/Account">
                                <i class="fa fa-check-circle" style="font-size: 4rem; color: var(--penn-success);"></i>
                            </a>
                        </div>
                        <a href="" class="penn-btn mt-3" style="background: var(--penn-gradient-secondary);">تتبع الشكاية</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Gallery Section -->
<div class="penn-gallery">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="penn-gallery-item set-bg" data-setbg="{{asset('img/s1.jpg')}}" style="height: 300px; background-size: cover;">
                    <div class="penn-gallery-overlay">
                        <a href="{{asset('img/s1.jpg')}}" class="penn-gallery-icon image-popup"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="penn-gallery-item set-bg" data-setbg="{{asset('img/study.jpg')}}" style="height: 300px; background-size: cover;">
                    <div class="penn-gallery-overlay">
                        <a href="{{asset('img/study.jpg')}}" class="penn-gallery-icon image-popup"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="penn-gallery-item set-bg" data-setbg="{{asset('img/study2.jpg')}}" style="height: 300px; background-size: cover;">
                    <div class="penn-gallery-overlay">
                        <a href="{{asset('img/study2.jpg')}}" class="penn-gallery-icon image-popup"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="penn-gallery-item set-bg" data-setbg="{{asset('img/province.jpg')}}" style="height: 300px; background-size: cover;">
                    <div class="penn-gallery-overlay">
                        <a href="{{asset('img/province.jpg')}}" class="penn-gallery-icon image-popup"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Events Section (Team) -->
<section class="penn-events">
    <div class="container">
        <div class="penn-section-header">
            <span class="penn-section-subtitle">مستجدات</span>
            <h2 class="penn-section-title">آخر الأخبار والأنشطة</h2>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
                @foreach($evenements as $evenement)
                @php
                $imagePath = count($evenement->images) ? $evenement->images[0]['path'] : 'img/no-image.png';
                @endphp
                <div class="col-lg-4">
                    <div class="penn-event-card">
                        <div class="penn-event-img" style="background-image: url('{{ asset($imagePath) }}');">
                            <div class="penn-event-date">{{ $evenement->date }}</div>
                        </div>
                        <div class="penn-event-content text-right" dir="rtl">
                            <h4 class="penn-event-title">{{ $evenement->name }}</h4>
                            <p class="penn-event-description">{{ Str::limit($evenement->short_description, 100) }}</p>
                            <a href="/detailsEvent/{{ $evenement->id }}" class="penn-btn btn-sm">شاهد المزيد</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Events Section End -->

<!-- Modal -->
<div class="modal fade penn-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-auto" id="exampleModalLabel">أحكام وشروط الاستخدام</h5>
                <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" dir="rtl">
                <ul class="text-right" style="list-style: disc; padding-right: 20px;">
                    <li>هذا الموقع خاص بوضع الشكاية , ويهدف الى تبسيط الإجراءات وتقريب الخدمة إلى جميع المواطنين عبر الانترنت.</li>
                    <li>تحال الشكاية المقدمة من طرف المشتكي(ة) مباشرة وإلكترونيا وبشكل منتظم إلى المديرية الاقليمية وتتم معالجتها وفق الإجراءات المعمول بها.</li>
                    <li>استعمال هذه الخدمة مجاني.</li>
                    <li>يجب على المشتكي(ة) الذي يتقدّم بالشكاية أن يدلي بشكل صحيح ودقيق بالمعلومات المتعلقة بتعريف هويته وجميع بياناتها، رقم الهاتف والبريد الإلكتروني الذي يريد أن يتواصل عبره بخصوص شكايته.</li>
                    <li>كما يجب عليه أن يدلي بشكل صحيح ودقيق بالمعلومات المتعلقة بتعريف الهوية وجميع بيانات المشتكى به.</li>
                    <li>يمكن للمشتكي(ة) أن يرفق شكايته بكل الوثائق الإلكترونية التي يراها مناسبة.</li>
                    <li>يتم حفظ الشكاية في حالة إدخال المشتكي(ة) لمعلومات خاطئة عند تقديم الشكاية.</li>
                    <li>باستخدام واعتماد وظائف هذا الموقع يعتبر إقرار وموافقة على أحكام وشروط الاستفادة من خدمة المعالجة الإلكترونية للشكاية من طرف المشتكي(ة).</li>
                </ul>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" style="background: var(--penn-gradient-primary); border: none;">موافق</button>
            </div>
        </div>
    </div>
</div>

@endsection