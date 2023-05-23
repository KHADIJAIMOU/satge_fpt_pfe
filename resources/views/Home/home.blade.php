@extends("Home.base")
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{asset('img/study.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text" >
                            <h1>كل يوم هناك  <strong>فرصة</strong>جديدة لتحقيق أحلامك</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{asset('img/study2.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <h1>
                                ابدأ    <strong>بالخطوة الأولى </strong>   وستصل إلى القمة</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- ChoseUs Section Begin -->
<section class="choseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>**********</span>
                    <h2>فضاءات</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <a href="https://massarservice.men.gov.ma/waliye/Account"><span class=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                      </svg></span></a>
                    <h4>فضاء الآباء و الأمهات</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <a href="https://massarservice.men.gov.ma/moutamadris/Account">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                          </svg>  </span>
                    </a>
                                        <h4> فضاء التلميذات والتلاميذ </h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                   <a href="https://www.cpge.ac.ma/">
                    <span> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"/>
                        <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"/>
                      </svg></span>
                   </a>
                                          <h4>الأقسام التحضيرية للمدارس العليا </h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="cs-item">
                <a href="https://www.men.gov.ma/Ar/Pages/academies.aspx"><span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                  </svg></span>   </a>
                                     <h4>مواقع الأكاديميات</h4>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Classes Section Begin -->

<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->

</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
<section class="pricing-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>***************</span>
                    <h2>  خدمات      </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-lg-8 col-md-4">
                <div class="ps-item">
                    <div class="pi-price">
                        <h2> وضع الشكاية  </h2>
                        <span>  .لوضع شكايتكم، المرجو الاطلاع وقبول شروط استخدام الخدمة ثم النقر على زر  المرحلة الموالية
                        </span>
                    </div>
                    <ul>
                        <li>يرجى الإطلاع وقبول  <a style="color:coral" data-toggle="modal" data-target="#exampleModal">    شروط استخدام </a>الخدمة، والموافقة على معالجة معطياتكم الشخصية قبل بدء العملية</li>
                        
                    </ul>
                    <a href="" class="primary-btn pricing-btn"> المرحلة الموالية</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="ps-item">
                    <div class="pi-price">
                        <h2>تتبع شكاية  </h2>
                        <span>  . لتتبع شكايتكم المرجو الضغط على الزر أسفله
                        </span>
                    </div>
                    <ul>
                        <li><a href="https://massarservice.men.gov.ma/waliye/Account"><span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" style="color: rgb(255, 140, 0)" class="bi bi-journal-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                              </svg>
                            </span></a></li>
                        
                        
                    </ul>
                    <a href="" class="primary-btn pricing-btn"> تتبع الشكاية  </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <center>          <h5 class="modal-title" id="exampleModalLabel" style="text-align: right">أحكام وشروط الاستخدام</h5>
            </center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" dir="rtl" >
          <ul  style="text-align: right;padding:30px">
            <li>
                هذا الموقع خاص بوضع الشكاية , ويهدف الى تبسيط الإجراءات وتقريب الخدمة إلى  جميع  المواطنين عبر الانترنت.

            </li>
            <li>
                تحال الشكاية المقدمة من طرف المشتكي(ة) مباشرة وإلكترونيا وبشكل منتظم إلى المديرية  الاقليمية   وتتم معالجتها وفق الإجراءات المعمول بها.
            </li>
            <li>
استعمال هذه الخدمة مجاني.

            </li>
            <li>
                يجب على المشتكي(ة) الذي يتقدّم بالشكاية أن يدلي بشكل صحيح ودقيق بالمعلومات المتعلقة بتعريف هويته وجميع بياناتها، رقم الهاتف والبريد الإلكتروني الذي يريد أن يتواصل عبره بخصوص شكايته.
            </li>
            <li>
                كما يجب عليه أن يدلي بشكل صحيح ودقيق بالمعلومات المتعلقة بتعريف الهوية وجميع بيانات المشتكى به.
            </li>
            <li>
                يمكن للمشتكي(ة) أن يرفق شكايته بكل الوثائق الإلكترونية التي يراها مناسبة.
            </li>
            <li>
                يتم حفظ الشكاية في حالة إدخال المشتكي(ة) لمعلومات خاطئة عند تقديم الشكاية.
            </li>
            <li>
                باستخدام واعتماد وظائف هذا الموقع يعتبر إقرار وموافقة على أحكام وشروط الاستفادة من خدمة المعالجة الإلكترونية للشكاية من طرف المشتكي(ة).

            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"> إلغاء </button>
          <button type="button" class="btn btn-primary"> موافق </button>
        </div>
      </div>
    </div>
  </div>
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->
<div class="gallery-section">
    <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gs-item grid-wide set-bg" data-setbg="{{asset('img/s1.jpg')}}">
            <a href="{{asset('img/img/s1.jpg')}}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{asset('img/s1.jpg')}}">
            <a href="{{asset('img/gallery/gallery-2.jpg')}}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{asset('img/s1.jpg')}}">
            <a href="{{asset('img/gallery/gallery-3.jpg')}}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{asset('img/s1.jpg')}}">
            <a href="{{asset('img/gallery/gallery-4.jpg')}}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="{{asset('img/s1.jpg')}}">
            <a href="{{asset('img/s1.jpg')}}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item grid-wide set-bg" data-setbg="{{asset('img/s2.jpg')}}">
            <a href="{{asset('img/s2.jpg')}}" class="thumb-icon image-popup"><i
                    class="fa fa-picture-o"></i></a>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Team Section Begin -->
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>**********                    </span>
                    <h2>مستجدات</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
                @foreach($evenements as $evenement)
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="{{ asset(count($evenement->images)?$evenement->images[0]['path']:'img/no-image.png') }}" style="border-radius:5%">
                        <div class="ts_text">
                            <h4>{{ $evenement->name }}</h4>
                            <span>{{ $evenement->short_description }}</span>
                            <span>{{ $evenement->date }}</span>
                            <a class="btn btn-primary mt-2" href="/detailsEvent/{{ $evenement->id }}">شاهد المزيد
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Get In Touch Section Begin -->


@endsection