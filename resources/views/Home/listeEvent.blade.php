@extends('Home.base')
{{-- @section('title', 'listproduct') --}}
@section('content')
    <!-- =============== HEADER-TITLE =============== -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>لائحة الاخبار المحلية </h2>
                        <div class="bt-option">
                            <a href="/">  الرئيسية</a>
                            <span>كل الاخبار</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">

                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($events) == 0)
                    <div class="alert alert-warning w-100 text-center" role="alert">
                        لا نملك اي خبر حاليا 
                    </div>
                @endif
                
<div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                 <form action="{{ route('ListEvent')}}" method="post" style=" width: 500px;height: 100px;position:relative;left: 100%;">
                @csrf                 

                    <input name="namefilter" id="namefilter" type="text">
                        
                    
                    <input type="submit" class="primary-btn" value="فرز "style="height: 30px;padding-top: 0px;padding-bottom: 0px;">
                    </form>
               </div>
               </div>
               </div>
                @foreach ($events as $event)
              
                
	    		
                
                    <div class="col-lg-4 col-sm-6">
                        <div class="ts-item set-bg" data-setbg="{{ asset(count($event->images)?$event->images[0]['path']:'img/blog/no-image.png') }}"
                            style="border-radius: 4%">
                            <div class="ts_text">
                                <h4>{{ $event->name }}</h4>
                                <p class="text-danger fw-bold">{{ $event->date }} </p>
                                <a class="btn btn-primary" href="/detailsEvent/{{ $event->id }}"> شاهد المزيد </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $events->links() }}
        </div>
    </section>
    <!-- Team Section End -->
@endsection
