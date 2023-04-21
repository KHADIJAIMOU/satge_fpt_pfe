<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    @import url(https://fonts.googleapis.com/earlyaccess/amiri.css);
    @import url(https://fonts.googleapis.com/earlyaccess/scheherazade.css);

    html {
        background-color: #ffffff;

    }

    #regForm {
        background-color: #ffffff;
        margin: 20px auto;
        font-family: Arial, Helvetica, sans-serif;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
    </style>

</head>

<body>


@php
$user = Auth::user();
$NOM_ETABL = $user->NOM_ETABL;
    $text = "";
    $count = count($users);
    foreach($users as $key => $user) {
        $text .= $user->LL_CYCLE;
        if($key !== $count - 1) {
            $text .= " + ";
        }
    }
   

@endphp
<center>
    <br>
    
<div>Etablissement: {{$NOM_ETABL}} </div>
<br>

<div>Type: {{$text}} </div>
<br>

</center>
<center>
    <form   onsubmit="return validateForms()" method="POST" action="{{ route('user.logout') }}">
        @csrf
        <button class='btn btn-danger' onclick="this.closest('form').submit();">
            <i class="fa-solid fa-right-from-bracket"></i>
            {{ __('Se déconnecter') }}
        </button>
    </form>
</center>
    <form id="regForm" action="{{ route('rapport.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
        <center>
            <div class="row mb-4">
                <img class="mx-auto d-block"
                    style="border-style: outset;border-radius: 10px;margin-bottom: 30px;margin-top: 30px;"
                    src="{{asset('/img/logo.jpg')}}">
            </div>
            <h1
                style="font-family:'Scheherazade', serif;color: #333;text-align: center;text-transform: uppercase;margin-bottom: 20px;font-size: 56px; ">
                التقرير اليومي</h1>
            <center style="border-bottom: 2px solid black;margin-bottom:10px">
                <h6
                    style="font-family:'Amiri', serif;color: #333;text-align: center;text-transform: uppercase;margin-bottom: 20px;font-size: 26px;">
                    مسك المعطيات التربوية الخاصة بسير المؤسسة تربويا وإداريا </h6>
            </center>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <div class="card" style="width: auto;padding:20px;margin-top:50px;margin-bottom:50px;">

                    <p style="text-align: right;">
                        <label class="col-form-label" style="text-align: right;">اليوم</label>
                    </p>

                    <p><input required type="date" placeholder=""  name="date"></p>
                    <p><input  required type="hidden" placeholder=""   name="typeClass" value="{{$text}}"></p>
                </div>
            </div>

            @foreach ($users->unique('LL_CYCLE') as $user)
                <div class="tab">
                    <center>
                        <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                            مواظبة التلاميذ
                        </div>
                    </center>
                    <br>
                    @if ($user->LL_CYCLE == 'SECONDAIRE QUALIFIANT')
                        <div id="errorMessage" style="display: none; color: red;">Value must be between 0 and 400</div>

                        <div id="lycee-div">
                            <center style="background-color: #F2BEB9;border-radius: 10px;"> المستوى الثانوي </center>
                            <br><br>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">غياب الجذع مشترك
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        name="absenceFirstLycee"></p>

                                <label class=" col-form-label" style="text-align: right;">مجموع تلاميذ الجذع مشترك
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        name="totalFirstLycee"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label id="myInput" class=" col-form-label" style="text-align: right;">
                                    غياب الأولى بكالوريا
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSecondLycee"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ الأولى بكالوريا

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSecondLycee"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">


                                <label class=" col-form-label" style="text-align: right;">
                                    غياب الثانية بكالوريا
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceThirdLycee"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ الثانية بكالوريا
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalThirdLycee"></p>
                            </div>
                        </div>
                    @endif

                    @if ($user->LL_CYCLE == 'SECONDAIRE-COLLEGIAL')
                        <div id="college-div">
                            <center style="background-color: #F2BEB9;border-radius: 10px;">
                                المستوى الإعدادي

                            </center>
                            <br><br>
                            <div class=" card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الأولى إعدادي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFirstCollege"></p>

                                <label class=" col-form-label" style="text-align: right;">مجموع تلاميذ السنة الأولى
                                    إعدادي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFirstCollege"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الثانية إعدادي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSecondCollege"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثانية إعدادي

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSecondCollege"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">


                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الثالثة إعدادي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceThirdCollege"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثالثة إعدادي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalThirdCollege"></p>
                            </div>
                        </div>
                    @endif
                    @if ($user->LL_CYCLE == 'PRIMAIRE')
                        <div id="college-div">
                            <center style="background-color: #F2BEB9;border-radius: 10px;">
                                المستوى الإبتدائي

                            </center>
                            <br><br>
                            <div class=" card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الأولى إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFirstPrimaire"></p>

                                <label class=" col-form-label" style="text-align: right;">مجموع تلاميذ السنة الأولى
                                    إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFirstPrimaire"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الثانية إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSecondPrimaire"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثانية إبتدائي

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSecondPrimaire"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">


                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الثالثة إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceThirdPrimaire"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثالثة إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalThirdPrimaire"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الرابعة إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFourthPrimaire"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الرابعة إبتدائي

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFourthPrimaire"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الخامسة إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFifthPrimaire"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الخامسة إبتدائي

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFifthPrimaire"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة السادسة إبتدائي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSixthPrimaire"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة السادسة إبتدائي

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSixthPrimaire"></p>
                            </div>
                        </div>
                    @endif
                    @if ($user->LL_CYCLE == 'BTS')
                        <div id="college-div">
                            <center style="background-color: #F2BEB9;border-radius: 10px;">
                                المحاسبة و التسيير
                            </center>
                            <br><br>
                            <div class=" card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الأولى
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFirstComptabiliteGeneral"></p>

                                <label class=" col-form-label" style="text-align: right;">مجموع تلاميذ السنة الأولى
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFirstComptabiliteGeneral"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الثانية
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSecondComptabiliteGeneral"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثانية

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSecondComptabiliteGeneral"></p>
                            </div>

                        </div>
                        <div id="college-div">
                            <center style="background-color: #F2BEB9;border-radius: 10px;">
                                التدبير التجاري
                            </center>
                            <br><br>
                            <div class=" card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الأولى
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFirstManagementCommercial"></p>

                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الأولى
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFirstManagementCommercial"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                                <label class=" col-form-label" style="text-align: right;">
                                    غياب السنة الثانية
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSecondManagementCommercial"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثانية

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSecondManagementCommercial"></p>
                            </div>

                        </div>
                    @endif
                    @if ($user->LL_CYCLE == 'SECONDAIRE-COLLEGIAL')
                        <div id="lycee-college-div">
                            <center style="background-color: #F2BEB9;border-radius: 10px;"> المستوى الثانوي و الإعدادي
                            </center>
                            <br><br>
                            <div class=" card" style="width: auto;padding:20px;margin-top:50px;">
                                <label class=" col-form-label" style="text-align: right;">غياب السنة الأولى
                                    إعدادي</label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFirstCollege"></p>

                                <label class=" col-form-label" style="text-align: right;">مجموع تلاميذ السنة الأولى
                                    إعدادي</label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFirstCollege"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">
                                <label class=" col-form-label" style="text-align: right;">غياب السنة الثانية
                                    إعدادي</label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSecondCollege"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثانية إعدادي

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSecondCollege"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">
                                <label class=" col-form-label" style="text-align: right;">غياب السنة الثالثة
                                    إعدادي</label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceThirdCollege"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ السنة الثالثة إعدادي
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalThirdCollege"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">
                                <label class=" col-form-label" style="text-align: right;">غياب الجذع مشترك
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceFirstLycee"></p>

                                <label class=" col-form-label" style="text-align: right;">مجموع تلاميذ الجذع مشترك
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalFirstLycee"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;">
                                <label class=" col-form-label" style="text-align: right;">
                                    غياب الأولى بكالوريا
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceSecondLycee"></p>
                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ الأولى بكالوريا

                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalSecondLycee"></p>
                            </div>
                            <div class="card" style="width: auto;padding:20px;margin-top:50px;;margin-bottom:50px;">
                                <label class=" col-form-label" style="text-align: right;">
                                    غياب الثانية بكالوريا
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="absenceThirdLycee"></p>


                                <label class=" col-form-label" style="text-align: right;">
                                    مجموع تلاميذ الثانية بكالوريا
                                </label>
                                <p><input required placeholder="" type="number" min="0" max="400"
                                        oninput="this.className = ''" name="totalThirdLycee"></p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            @endforeach

            <div class="tab">
                <center>
                    <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                        مواظبة الأطر
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br><br>
                    <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                        <label class=" col-form-label" style="text-align: right;">
                            عدد العاملين من الأطر
                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''"
                                name="nbEmployee"></p>

                        <label class=" col-form-label" style="text-align: right;">
                            عدد المتغيبين من الأطر

                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''"
                                name="nbAbsenceEmployee"></p>


                        <label class=" col-form-label" style="text-align: right;">
                            عدد المتأخرين من الأطر
                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''"
                                name="nbRetardEmployee"></p>

                    </div>

                </div>
            </div>


            <div class="tab">
                <center>
                    <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                        الدعم التربوي والتعويض
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br><br>
                    <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                        <label class=" col-form-label" style="text-align: right;">
                            حصص الدعم المبرمجة
                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''"
                                name="nbSeanceProgramme"></p>

                        <label class=" col-form-label" style="text-align: right;">
                            حصص الدعم المنجزة

                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''"
                                name="nbSeanceEffecuter"></p>


                        <label class=" col-form-label" style="text-align: right;">
                            حصص التعويض المنجزة
                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''"
                                name="nbSeanceComponser"></p>

                    </div>
                    <div id="lycee-div">
                        <br><br>
                        <div class="card" style="width: auto;padding:20px;margin-top:50px;">
    
                            <label class=" col-form-label" style="text-align: right;">الحاضرون في حصة المراجعة
    
                            </label>
                            <p><input required placeholder="" type="number" oninput="this.className = ''"  min="0" max="400" name="presentRevision"></p>
    
    
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <div class="tab">
                <center>
                    <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                        الاجتماعات المنجزة
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-top:20px;margin-bottom:10px;padding:10px">

                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>المجلس الإداري</th>
                                    <th>مجالس الأقسام</th>
                                    <th>المجالس التعليمية</th>
                                    <th>المجلس التربوي</th>
                                    <th>مجلس التدبير</th>
                                    <th>اجتماع جمعية دعم مدرسة النجاح</th>
                                    <th>اجتماعات أخرى</th>
                                    <th>لاشيء</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>طبيعة الاجتماع</td>
                                    <td><input type="checkbox" name="renionEffectuerConseilAdministratif" onclick="checkRien()" value="oui"  ></td>
                                    <td><input type="checkbox" name="renionEffectuerConseilsDepartementaux" onclick="checkRien()" value="oui"  ></td>
                                    <td><input type="checkbox" name="renionEffectuerConseilsPedagogiqueTa3limi" onclick="checkRien()" value="oui"  ></td>
                                    <td><input type="checkbox" name="renionEffectuerConseilsPedagogiqueTrbaoui" onclick="checkRien()" value="oui"  ></td>
                                    <td><input type="checkbox" name="renionEffectuerConseilDeGestion" value="oui" onclick="checkRien()" ></td>
                                    <td><input type="checkbox" name="renionEffectuerRenionAssociationSoutienScolaire" value="oui" onclick="checkRien()"  ></td>
                                    <td><input type="checkbox" name="renionEffectuerAutreRenion" value="oui" onclick="checkRien()"  ></td>
                                    <td><input type="checkbox" name="renionEffectuerRien" value="oui"  onclick="uncheckOthers()" ></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
                
                <center>
                    <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                        الأنشطة المنجزة
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">

                        <input type="checkbox" name="activiteEffectuerIntégrée" value="oui" onclick="checkRienSecond()" > <label>أنشطة مندمجة</label>
                        <input type="checkbox" name="activiteEffectuerParallel" value="oui" onclick="checkRienSecond()" ><label>أنشطة موازية</label>
                        <input type="checkbox" name="activiteEffectuerRien" value="oui"  onclick="uncheckOthersSecond()"><label>لا شيء</label>
                    </div>
                </div>
                <center>
                    <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                        تقرير مبسط حول الأنشطة المنجزة (الموضوع/الفئة...)
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                        <textarea required id="rapportActiviteEffectuer" name="rapportActiviteEffectuer" style="width: 100%"></textarea>
                    </div>
                </div>
                <center>
                    <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                        تقرير مبسط حول الزيارات
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                        <textarea required id="rapportVisit" name="rapportVisit" style="width: 100%"></textarea>
                    </div>
                </div>
                <center>
                    <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                        تقرير مبسط حول الحوادث المدرسية
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                        <textarea required id="rapportAccidentScolaire" name="rapportAccidentScolaire" style="width: 100%"></textarea>
                    </div>
                </div>
                <center>
                    <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                        مختلفات
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                        <textarea required id="different " oninput="this.className = ''" name="different" style="width: 100%"></textarea>
                    </div>
                </div>
                <center>
                    <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                        القسم الداخلي
                    </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">

                        <input type="radio" name="classInterieur" value="oui" onclick="showDiv(this)" > <label>نعم</label>
                        <input type="radio" name="classInterieur" value="non" onclick="showDiv(this)"><label>لا</label>

                    </div>
                </div>
            </div>
            <div  id="div1" style="display:none;">
                <center>
                    <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                        القسم الداخلي </div>
                </center>
                <br>

                <div id="lycee-div">
                    <br><br>
                    <div class="card" style="width: auto;padding:20px;margin-top:50px;">

                        <label class=" col-form-label" style="text-align: right;">
                            المسجلون في وجبة الفطور </label>
                        <p><input required placeholder="" type="number" oninput="this.className = ''" min="0" max="400" name="inscritPetitDejeuner"></p>

                        <label class=" col-form-label" style="text-align: right;">
                            الحاضرون في وجبة الفطور
                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''" name="presentPetitDejeuner"></p>


                        <label class=" col-form-label" style="text-align: right;">
                            المسجلون في وجبة الغداء </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''" name="inscritDejeuner"></p>
                        <label class=" col-form-label" style="text-align: right;">
                            الحاضرون في وجبة الغداء
                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''" name="presentDejeuner"></p>

                        <label class=" col-form-label" style="text-align: right;">
                            المسجلون في وجبة العشاء </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''" name="inscritDinner"></p>
                        <label class=" col-form-label" style="text-align: right;">
                            الحاضرون في وجبة العشاء
                        </label>
                        <p><input required placeholder="" type="number" min="0" max="400" oninput="this.className = ''" name="presentDinner"></p>

                    </div>
                </div>
                

                <div id="lycee-div">

                    <br>
                    <label class=" col-form-label" style="text-align: right;"> البرنامج الغذائي </label>
                    <div class="card" style="width: auto;padding:20px;margin-top:20px;padding:10px">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;">5</th>
                                    <th scope="col" style="text-align: center;"> 4</th>
                                    <th scope="col" style="text-align: center;"> 3</th>
                                    <th scope="col" style="text-align: center;"> 2</th>
                                    <th scope="col" style="text-align: center;"> 1</th>
                                    <th scope="col"
                                        style="min-width: 48px;width: 200px;border-bottom-left-radius: 4px;border-top-left-radius: 4px;text-align: center;"
                                        </th>



                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="RespectProgrammeNutritional" value="5"></td>
                                    <td><input type="radio" name="RespectProgrammeNutritional" value="4"></td>
                                    <td><input type="radio" name="RespectProgrammeNutritional" value="3"></td>
                                    <td><input type="radio" name="RespectProgrammeNutritional" value="2"></td>
                                    <td><input type="radio" name="RespectProgrammeNutritional" value="1"></td>
                                    <td style="text-align: center;"> مدى احترام البرنامج الغذائي </td>

                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="quality" value="5"></td>
                                    <td><input type="radio" name="quality" value="4"></td>
                                    <td><input type="radio" name="quality" value="3"></td>
                                    <td><input type="radio" name="quality" value="2"></td>
                                    <td><input type="radio" name="quality"value="1"></td>
                                    <td style="text-align: center;"> من حيث الجودة </td>

                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="quantity" value="5"></td>
                                    <td><input type="radio" name="quantity" value="4"></td>
                                    <td><input type="radio" name="quantity" value="3"></td>
                                    <td><input type="radio" name="quantity" value="2"></td>
                                    <td><input type="radio" name="quantity" value="1"></td>
                                    <td style="text-align: center;"> من حيث الكمية </td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                              </div>
              <div  id="div2" style="display:none;">
              </div>

            
        </div>
    </div>
            </div>



            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">السابق</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">التالي</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>


            </div>
    </form>
</body>
<script>
  /*  var renionEffectuerRienCheckbox = document.querySelector('input[name="renionEffectuerRien"]');
renionEffectuerRienCheckbox.addEventListener('change', function() {
    if (this.checked) {
        // If the "renionEffectuerRien" checkbox is checked, loop through all the other checkboxes and uncheck them
        var checkboxes = document.querySelectorAll('input[type="checkbox"]:not([name="renionEffectuerRien"])');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = false;
        }
    }
});*/
function checkRien() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var rienCheckbox = document.querySelector('input[name="renionEffectuerRien"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].name !== 'renionEffectuerRien' && checkboxes[i].checked) {
            rienCheckbox.checked = false;
            return;
        }
    }
}

function uncheckOthers() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var rienCheckbox = document.querySelector('input[name="renionEffectuerRien"]');
    if (rienCheckbox.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name !== 'renionEffectuerRien') {
                checkboxes[i].checked = false;
            }
        }
    }
}
function checkRienSecond() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var rienCheckbox = document.querySelector('input[name="activiteEffectuerRien"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].name !== 'activiteEffectuerRien' && checkboxes[i].checked) {
            rienCheckbox.checked = false;
            return;
        }
    }
}

function uncheckOthersSecond() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var rienCheckbox = document.querySelector('input[name="activiteEffectuerRien"]');
    if (rienCheckbox.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].name !== 'activiteEffectuerRien') {
                checkboxes[i].checked = false;
            }
        }
    }
}



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
        document.getElementById("nextBtn").innerHTML = "حفظ";
    } else {
        document.getElementById("nextBtn").innerHTML = "التالي";
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
var colegeButtona = document.getElementById("colegeButton");
var collegediv = document.getElementById("college-div");
if (colegeButtona && collegediv) {
    colegeButtona.addEventListener("click", function() {
        if (collegediv.style.display === "none") {
            collegediv.style.display = "block";
        } else {
            collegediv.style.display = "none";
        }
    });
}
var lyceeButton = document.getElementById("lyceeButton");
var lyceeDiv = document.getElementById("lycee-div");
if (lyceeButton && lyceeDiv) {
    lyceeButton.addEventListener("click", function() {
        if (lyceeDiv.style.display === "none") {
            lyceeDiv.style.display = "block";
        } else {
            lyceeDiv.style.display = "none";
        }
    });
}

var binomeA = document.getElementById("binome");
var lyceecollegediv = document.getElementById("lycee-college-div");
if (binomeA && lyceecollegediv) {
    binomeA.addEventListener("click", function() {
        if (lyceecollegediv.style.display === "none") {
            lyceecollegediv.style.display = "block";
        } else {
            lyceecollegediv.style.display = "none";
        }
    });
}

const input = document.getElementById('myInput');
    const errorMessage = document.getElementById('errorMessage');
    input.addEventListener('input', function() {
        if (input.value > 400) {
            input.value = 400;
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
        }
    });
    function showDiv(radio) {
  if (radio.value === "oui") {
    document.getElementById("div1").style.display = "block";
    document.getElementById("div2").style.display = "none";
  } else if (radio.value === "non") {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "block";
  }
}
function getIPAddress() {
    fetch('https://api.ipify.org/?format=json')
        .then(response => response.json())
        .then(data => alert(data.ip))
        .catch(error => console.error(error))
}

</script>
</body>

</html>