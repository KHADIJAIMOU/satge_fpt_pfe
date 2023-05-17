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

                                    <th >Nom Complete</th>
                                    <th>NOM_ETABL</th>
                                    <th width="500px">content</th>
                                    <th  >Statut</th>

                                    <th>Date</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reclamation as $item)
                                    <tr id="reclamation_id_{{ $item->users_id }}">
                                        <td class="class-time">{{ $item->first_name  }}  {{ $item->last_name }}</td>
                                        <td class="dark-bg hover-dp ts-meta">
                                            <h5>{{ $item->NOM_ETABL }} </h5>

                                        <td class="hover-dp ts-meta">
                                            <h5>{{ $item->content }} </h5>

                                        </td>
                                        <td class="dark-bg hover-dp ts-meta" >
                                            <h5> 
                                                <span class="badge rounded-pill mx-4 bg-{{ ($item->status == 2) ? 'danger' : (($item->status == 0) ? 'warning' : 'success') }} text-dark text-center">
                                                    {{$item->getStatus($item->status)}}    
                                            </span></h5>
    
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



                          
                        <form method="post" id="regForm" action="{{ route('storereclamation', $idd) }}" enctype="multipart/form-data">
                            @csrf

                    <input type="text" name="users_id" value="{{$idd}}">

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
        <label style="text-align: right" for="content"> مرفقات</label>

        <p><input style="text-align: right" type="file" name="images[]" multiple class="form-control" accept="image/*" multiple
                oninput="this.className = ''"></p>
    </div>
    <div style="overflow:auto;">
      <div style="float:right;">
        <button  class="button" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button class="button" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>

                    </div>
                    <div class="modal-footer">
                        {{-- <button  type="button" class="btn btn-secondary " data-dismiss="modal">Fermé</button>
        <button type="submit" class="primary-btn  btn-normal rounded-pill ">enregistrer les modifications</button> --}}
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
@section('scripts')
   
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
    </script>
@endsection
