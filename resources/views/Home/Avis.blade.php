@extends('Home.base')
{{-- @section('title', 'progress details') --}}
@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2> Liste de reclamation</h2>
                        <div class="bt-option">
                            <a href="/">Accueil</a>
                            <a href="#">Listes</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Details Section Begin -->


    <!-- Class Timetable Section Begin -->
    <section class="class-timetable-section class-details-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-details-timetable_title">
                        <button type="button" class="primary-btn  btn-normal mt-3" data-toggle="modal"
                            data-target="#exampleModal"> Nouvelle réclamation</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-100">
                    <div class="class-timetable details-timetable">
                        <table>
                            <thead>
                                <tr>

                                    <th width="500px">objet</th>
                                    <th>type</th>
                                    <th>detail</th>

                                    <th>Date</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reclamation as $item)
                                    <tr id="reclamation_id_{{ $item->users_id }}">
                                        <td class="class-time">{{ $item->created_at }}</td>
                                        <td class="dark-bg hover-dp ts-meta">
                                            <h5>{{ $item->created_at }} </h5>

                                        <td class="hover-dp ts-meta">
                                            <h5>{{ $item->created_at }} </h5>

                                        </td>


                                        <td class="hover-dp ts-meta">
                                            <h5>{{ $item->created_at->format('d-m-Y') }}</h5>

                                        </td>
                                        <td class="hover-dp ts-meta">
                                            <form action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button target="_blank" type="submit"
                                                    class="btn btn-outline-danger waves-effect"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="mt-3">
                            {!! $reclamation->links() !!}
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> خدمة الشكاية الالكترونية </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br><br><br>

                    <div class="modal-body">
                        


                          
                        <form method="post" id="regForm" action="{{ route('storereclamation',$idd) }}" enctype="multipart/form-data">
                            <input type="hidden" name="users_id" value="{{$idd}}">

                        <h1>Register: </h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab" style="text-align: right">الاسم الكامل
        <p><input style="text-align: right" placeholder="الاسم الشخصي" oninput="this.className = ''"
                name="first_name"></p>
        <p><input style="text-align: right" placeholder="الاسم العائلي"
                oninput="this.className = ''" name="last_name"></p>
    </div>
    <div class="tab" style="text-align: right"> معلومات للتواصل
        <p><input style="text-align: right" placeholder=" بريد الكتروني"
                oninput="this.className = ''" name="CNI"></p>
        <p><input style="text-align: right" placeholder="رقم الهاتف " oninput="this.className = ''"
                name="phone"></p>
    </div>
    <div class="tab" style="text-align: center">المشتكي عليه
        <div class="form-group" style="text-align: right">
            <label style="text-align: right" for="ll_com">اختر الجماعة</label>
            <select name="la_com" class="form-control">
                <option style="text-align: right" value="تزنيت (البلدية)">تزنيت (البلدية)</option>
                {{-- <option value="Simple">Simple</option> --}}
                <option style="text-align: right" value="تافراوت (البلدية)">تافراوت (البلدية)
                </option>
                <option style="text-align: right" value="الركادة">الركادة</option>
                <option style="text-align: right" value="تارسوات">تارسوات</option>
                <option style="text-align: right" value="تاسريرت">تاسريرت</option>
                <option style="text-align: right" value="أفلا  اغير">أفلا اغير</option>
                <option style="text-align: right" value="ايريغ  نتاهلة">ايريغ نتاهلة</option>
                <option style="text-align: right" value="أيت وافقا"> أيت وافقا</option>
                <option style="text-align: right" value="اثنين أداي">اثنين أداي</option>
                <option style="text-align: right" value="انزي">انزي</option>
                <option style="text-align: right" value="تيغمي">تيغمي</option>
                <option style="text-align: right" value="اربعاء أيت أحمد">اربعاء أيت أحمد</option>
                <option style="text-align: right" value="تيزغران">تيزغران</option>
                <option style="text-align: right" value="أيت ايسافن">أيت ايسافن</option>
                <option style="text-align: right" value="إد او كوكمار">إد او كوكمار</option>
                <option style="text-align: right" value="سيدي أحمد أو موسى">سيدي أحمد أو موسى
                </option>
                <option style="text-align: right" value="أربعاء رسموكة">أربعاء رسموكة</option>
                <option style="text-align: right" value="المعدر الكبير">المعدر الكبير</option>
                <option style="text-align: right" value="سيدي بوعبد اللي">سيدي بوعبد اللي</option>
                <option style="text-align: right" value="بونعمان">بونعمان</option>
                <option style="text-align: right" value="ويجان">ويجان</option>
                <option style="text-align: right" value="اثنين اكلو">اثنين اكلو</option>
                <option style="text-align: right" value="أربعاء الساحل">أربعاء الساحل</option>
                <option style="text-align: right" value="املن">املن</option>
                <option style="text-align: right" value="تفراوت المولود">تفراوت المولود</option>
            </select>
        </div>
        <p><input style="text-align: right" placeholder="اسم المؤسسة"
                oninput="this.className = ''" name="NOM_ETABL"></p>

    </div>
    <div class="tab" style="text-align: right">تضمين ملخص الشكاية و تحميل المرفقات :
        <label style="text-align: right" for="content"> ملخص الشكاية</label>
        <center>
            <p>
                <textarea style="text-align: right" name="content" id="content" cols="30" rows="10"></textarea>
            </p>
        </center>
        <label style="text-align: right" for=""> مرفقات</label>

        <p><input style="text-align: right" type="file" placeholder="اسم المؤسسة" multiple oninput="this.className = ''" name="uname"></p>
    </div>
  
    <!-- Circles which indicates the steps of the form: -->
    

                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-secondary " data-dismiss="modal">Fermé</button>
        <button type="submit" class="primary-btn  btn-normal rounded-pill ">enregistrer les modifications</button>
                    </div>
                </form>

                </div>

            </div>
        </div>
    </section>
@endsection