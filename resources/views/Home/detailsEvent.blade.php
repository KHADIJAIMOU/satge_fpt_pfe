@extends('Home.base')
{{-- @section('title', 'Details event') --}}
@section('content')
    <!-- =============== HEADER-TITLE =============== -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>   اخبار محلية </h2>
                        <div class="bt-option">
                            <a href="/">  الرئيسية</a>
                            <span>لائحة الاخبار</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= HEADER-TITLE END ============= -->

    <section class="class-details-section spad">
        <div class="container">
            <div class="mx-md-n5 mt-4">
                <h3 class="p-3 mb-2 bg-secondary text-white"></h3>
            </div>
            <div class=" row">
                
                <div class="class-details-text">
                    <div class="cd-trainer">
                        <div class="row">

                         <div class="col-md-6" style="text-align: right">
                                <div class="cd-trainer-text">
                                    <div class="trainer-title">
                                        <h4>{{ $event->name }}</h4>
                                        <h5 class="text-danger fw-bold">{{ $event->date }} </h5>
                                        <span>   : الموضوع   </span>
                                        <p>{{ $event->short_description }}</p>
                                    </div>
                                    <h4 class="text-white"> : المحتوى</h4>
                                    <ul class="trainer-info">
                                        <li><h6  style="color: white"> -> {{ $event->content }}</h6></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if (count($list_images))
                                    <div class="container">

                                        <div class="ts_slider owl-carousel">
                                            @foreach ($list_images as $image)

                                            <div class="ts_item">
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="ti_pict">
                                                            <img src="{{ asset($image->path) }}" alt="">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                         @endforeach

                                        </div>

                                    </div>   
                                    @else
                                   
                                    <div class="container">

                                        <div class="ts_slider owl-carousel">

                                            <div class="ts_item">
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="ti_pict">
                                                            <img src="{{ asset('img/blog/no-image.png') }}" alt="">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div> 
                                   
                                    @endif

                                </div>
            
<br>
                           
                            <div class=" " style="text-align: right" >
                                <h3 class="text-white ml-5" style="text-align: right">  : الوصف</h3>
                                <p class="ml-5 mr-5 mb-5" style="text-align: right">{{ $event->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
