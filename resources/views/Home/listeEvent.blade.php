@extends('Home.base')
@section('content')

<!-- Hero Section (Mini) -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h1 class="penn-hero-title" style="font-size: 3rem;">لائحة الاخبار المحلية</h1>
                    <div class="penn-hero-subtitle mt-3">
                        <a href="/" class="text-white">الرئيسية</a>
                        <span class="mx-2">/</span>
                        <span>كل الاخبار</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Events List Section -->
<section class="penn-events" style="background: #f8f9fa;">
    <div class="container">

        <!-- Search Filter -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <div class="penn-service-card p-4">
                    <form action="{{ route('ListEvent')}}" method="post" class="d-flex flex-column flex-md-row gap-3 align-items-center justify-content-center" dir="rtl">
                        @csrf
                        <input name="namefilter" id="namefilter" type="text" class="form-control p-3" placeholder="بحث عن خبر..." style="border-radius: 50px; border: 1px solid #ddd;">
                        <button type="submit" class="penn-btn mt-3 mt-md-0 px-5">فرز</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Events Grid -->
        <div class="row" dir="rtl">
            @if (count($events) == 0)
            <div class="col-12">
                <div class="alert alert-warning w-100 text-center p-4" role="alert" style="border-radius: 15px; font-weight: bold;">
                    لا نملك اي خبر حاليا
                </div>
            </div>
            @endif

            @foreach ($events as $event)
            @php
            $imagePath = count($event->images) ? $event->images[0]['path'] : 'img/no-image.png';
            @endphp
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="penn-event-card h-100">
                    <div class="penn-event-img" style="background-image: url('{{ asset($imagePath) }}'); height: 250px;">
                        <div class="penn-event-date">{{ $event->date }}</div>
                    </div>
                    <div class="penn-event-content text-right">
                        <h4 class="penn-event-title">{{ $event->name }}</h4>
                        <a href="/detailsEvent/{{ $event->id }}" class="penn-btn btn-sm mt-3">شاهد المزيد</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</section>
<!-- Events List Section End -->

@endsection