<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
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


    <center>
        <br>

        <br>
        {{ $data['rapport']->id }}
        <br>
    </center>


    <center>
        <div class="row mb-4">
            <img class="mx-auto d-block"
                style="border-style: outset;border-radius: 10px;margin-bottom: 30px;margin-top: 30px;"
                src="C:\Users\hp\Desktop\FormEtablissement\satge_fpt_pfe\public\img\logo.jpg">
        </div>
        <h1
            style="font-family:'Scheherazade', serif;color: #333;text-align: center;text-transform: uppercase;margin-bottom: 20px;font-size: 56px; ">
            Rapport journalier</h1>
        <center style="border-bottom: 2px solid black;margin-bottom:10px">
            <h6
                style="font-family:'Amiri', serif;color: #333;text-align: center;text-transform: uppercase;margin-bottom: 20px;font-size: 26px;">
                Tenir à jour les données pédagogiques liées au fonctionnement de l'établissement sur le plan pédagogique
                et administratif</h6>
        </center>
        <!-- One "tab1" for each step in the form: -->
        <div class="tab1">
            <div class="card" style="width: auto;padding:20px;margin-top20px;margin-bottom:50px;">

                <p style="text-align: left;">
                    <label class="col-form-label" style="text-align: left;">Date</label>
                </p>

                <p><input disabled disabled type="text" placeholder="" id="date" name="date"
                        value="{{ $data['rapport']->date }}"></p>
            </div>
        </div>

        <div class="tab1">
            <center>
                <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                    L'écoute des élèves </div>
            </center>
            <br>

            @if ($data['rapport']->typeClass == 'SECONDAIRE QUALIFIANT')
                <div id="errorMessage" style="display: none; color: red;">Value must be between 0 and 400</div>

                <div id="lycee-div">
                    <center style="background-color: #F2BEB9;border-radius: 10px;"> niveau secondaire</center>
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">
                        <label class=" col-form-label" style="text-align: left;">Absence de tronc commun </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                name="absenceFirstLycee" id="absenceFirstLycee"
                                value="{{ $data['rapport']->absenceFirstLycee }}"></p>

                        <label class=" col-form-label" style="text-align: left;">
                            Total élèves tronc commun
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                name="totalFirstLycee" id="totalFirstLycee"
                                value="{{ $data['rapport']->totalFirstLycee }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label id="myInput" class=" col-form-label" style="text-align: left;">
                            Absence du premier bac </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceSecondLycee" id="absenceSecondLycee"
                                value="{{ $data['rapport']->absenceSecondLycee }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'élèves du premier baccalauréat
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalSecondLycee" id="totalSecondLycee"
                                value="{{ $data['rapport']->totalSecondLycee }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">


                        <label class=" col-form-label" style="text-align: left;">
                            Absence du deuxième baccalauréat </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceThirdLycee" id="absenceThirdLycee"
                                value="{{ $data['rapport']->absenceThirdLycee }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Total élèves du second baccalauréat
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalThirdLycee" id="totalThirdLycee"
                                value="{{ $data['rapport']->totalThirdLycee }}"></p>
                    </div>
                </div>
            @endif

            @if ($data['rapport']->typeClass == 'SECONDAIRE-COLLEGIAL')
                <div id="college-div">
                    <center style="background-color: #F2BEB9;border-radius: 10px;">
                        NIVEAU SECONDAIRE-COLLEGIAL
                    </center>
                    <br>
                    <div class=" card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la première année collegial </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceFirstCollege" id="absenceFirstCollege"
                                value="{{ $data['rapport']->absenceFirstCollege }}"></p>

                        <label class=" col-form-label" style="text-align: left;"> Total des étudiants de première
                            année collegial
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalFirstCollege" id="totalFirstCollege"
                                value="{{ $data['rapport']->totalFirstCollege }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la deuxième année collegial </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceSecondCollege" id="absenceSecondCollege"
                                value="{{ $data['rapport']->absenceSecondCollege }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'étudiants de deuxième année collegial
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalSecondCollege" id="totalSecondCollege"
                                value="{{ $data['rapport']->totalSecondCollege }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">


                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la troisième année de collegial </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceThirdCollege" id="absenceThirdCollege"
                                value="{{ $data['rapport']->absenceThirdCollege }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'élèves de troisième année collegial </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalThirdCollege" id="totalThirdCollege"
                                value="{{ $data['rapport']->totalThirdCollege }}"></p>
                    </div>
                </div>
            @endif
            @if ($data['rapport']->typeClass == 'PRIMAIRE')
                <div id="college-div">
                    <center style="background-color: #F2BEB9;border-radius: 10px;">
                        niveau primaire
                    </center>
                    <br>
                    <div class=" card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la première année du primaire
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceFirstPrimaire" id="absenceFirstPrimaire"
                                value="{{ $data['rapport']->absenceFirstPrimaire }}"></p>

                        <label class=" col-form-label" style="text-align: left;"> Total des étudiants de première
                            année du primaire </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" id="totalFirstPrimaire" name="totalFirstPrimaire"
                                id="totalFirstPrimaire" value="{{ $data['rapport']->totalFirstPrimaire }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la deuxième année du primaire </lab el>
                            <p><input disabled required placeholder="" type="text" min="0" max="400"
                                    oninput="this.className = ''" name="absenceSecondPrimaire"
                                    id="absenceSecondPrimaire" value="{{ $data['rapport']->absenceSecondPrimaire }}">
                            </p>


                            <label class=" col-form-label" style="text-align: left;">
                                Le nombre total d'élèves en deuxième année du primaire
                            </label>
                            <p><input disabled required placeholder="" type="text" min="0" max="400"
                                    oninput="this.className = ''" name="totalSecondPrimaire" id="totalSecondPrimaire"
                                    value="{{ $data['rapport']->totalSecondPrimaire }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">


                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la troisième année du primaire </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceThirdPrimaire" id="absenceThirdPrimaire"
                                value="{{ $data['rapport']->absenceThirdPrimaire }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'élèves en troisième année du primaire </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalThirdPrimaire" id="totalThirdPrimaire"
                                value="{{ $data['rapport']->totalThirdPrimaire }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la quatrième année du primaire </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceFourthPrimaire" id="absenceFourthPrimaire"
                                value="{{ $data['rapport']->absenceFourthPrimaire }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'élèves en quatrième année du primaire
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalFourthPrimaire" id="totalFourthPrimaire"
                                value="{{ $data['rapport']->totalFourthPrimaire }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la cinquième année du primaire </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceFifthPrimaire" id="absenceFifthPrimaire"
                                value="{{ $data['rapport']->absenceFifthPrimaire }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'élèves en cinquième année primaire
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalFifthPrimaire" id="totalFifthPrimaire"
                                value="{{ $data['rapport']->totalFifthPrimaire }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence de la sixième année du primaire </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceSixthPrimaire" id="absenceSixthPrimaire"
                                value="{{ $data['rapport']->absenceSixthPrimaire }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'élèves en sixième année du primaire
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalSixthPrimaire" id="totalSixthPrimaire"
                                value="{{ $data['rapport']->totalSixthPrimaire }}"></p>
                    </div>
                </div>
            @endif
            @if ($data['rapport']->typeClass == 'BTS')
                <div id="college-div">
                    <center style="background-color: #F2BEB9;border-radius: 10px;">
                        Comptabilité et gestion </center>
                    <br>
                    <div class=" card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence première année </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceFirstComptabiliteGeneral"
                                id="absenceFirstComptabiliteGeneral"
                                value="{{ $data['rapport']->absenceFirstComptabiliteGeneral }}"></p>

                        <label class=" col-form-label" style="text-align: left;"> Total des étudiants de première
                            année
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalFirstComptabiliteGeneral"
                                id="totalFirstComptabiliteGeneral"
                                value="{{ $data['rapport']->totalFirstComptabiliteGeneral }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            absence de la deuxième année </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceSecondComptabiliteGeneral"
                                id="absenceSecondComptabiliteGeneral"
                                value="{{ $data['rapport']->absenceSecondComptabiliteGeneral }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Total des étudiants de deuxième année
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalSecondComptabiliteGeneral"
                                id="totalSecondComptabiliteGeneral"
                                value="{{ $data['rapport']->totalSecondComptabiliteGeneral }}"></p>
                    </div>

                </div>
                <div id="college-div">
                    <center style="background-color: #F2BEB9;border-radius: 10px;">
                        Management Commercial </center>
                    <br>
                    <div class=" card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Absence première année </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceFirstManagementCommercial"
                                id="absenceFirstManagementCommercial"
                                value="{{ $data['rapport']->absenceFirstManagementCommercial }}"></p>

                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'étudiants de première année </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalFirstManagementCommercial"
                                id="totalFirstManagementCommercial"
                                value="{{ $data['rapport']->totalFirstManagementCommercial }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            absence de la deuxième année </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceSecondManagementCommercial"
                                id="absenceSecondManagementCommercial"
                                value="{{ $data['rapport']->absenceSecondManagementCommercial }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Total des étudiants de deuxième année
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalSecondManagementCommercial"
                                id="totalSecondManagementCommercial"
                                value="{{ $data['rapport']->totalSecondManagementCommercial }}"></p>
                    </div>

                </div>
            @endif
            @if ($data['rapport']->typeClass == 'BTS + SECONDAIRE QUALIFIANT')
                <div id="errorMessage" style="display: none; color: red;">Value must be between 0 and 400</div>

                <div id="lycee-div">
                    <center style="background-color: #F2BEB9;border-radius: 10px;"> niveau secondaire</center>
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">
                        <label class=" col-form-label" style="text-align: left;">
                            Absence de tronc commun

                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                name="absenceFirstLycee" id="absenceFirstLycee"
                                value="{{ $data['rapport']->absenceFirstLycee }}"></p>

                        <label class=" col-form-label" style="text-align: left;">
                            Total élèves tronc commun
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                name="totalFirstLycee" id="totalFirstLycee"
                                value="{{ $data['rapport']->totalFirstLycee }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label id="myInput" class=" col-form-label" style="text-align: left;">
                            Absence du premier bac </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceSecondLycee" id="absenceSecondLycee"
                                value="{{ $data['rapport']->absenceSecondLycee }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Le nombre total d'élèves du premier baccalauréat
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalSecondLycee" id="totalSecondLycee"
                                value="{{ $data['rapport']->totalSecondLycee }}"></p>
                    </div>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">


                        <label class=" col-form-label" style="text-align: left;">
                            Absence du deuxième baccalauréat </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="absenceThirdLycee" id="absenceThirdLycee"
                                value="{{ $data['rapport']->absenceThirdLycee }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Total élèves du second baccalauréat
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="totalThirdLycee" id="totalThirdLycee"
                                value="{{ $data['rapport']->totalThirdLycee }}"></p>
                    </div>
                </div>

        </div>
        <div id="college-div">
            <center style="background-color: #F2BEB9;border-radius: 10px;">
                Comptabilité et gestion </center>
            <br>
            <div class=" card" style="width: auto;padding:20px;margin-top20px;">

                <label class=" col-form-label" style="text-align: left;">
                    Absence première année </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="absenceFirstComptabiliteGeneral"
                        id="absenceFirstComptabiliteGeneral"
                        value="{{ $data['rapport']->absenceFirstComptabiliteGeneral }}"></p>

                <label class=" col-form-label" style="text-align: left;"> Total des étudiants de première année
                </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="totalFirstComptabiliteGeneral"
                        id="totalFirstComptabiliteGeneral"
                        value="{{ $data['rapport']->totalFirstComptabiliteGeneral }}"></p>
            </div>
            <div class="card" style="width: auto;padding:20px;margin-top20px;">

                <label class=" col-form-label" style="text-align: left;">
                    absence de la deuxième année </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="absenceSecondComptabiliteGeneral"
                        id="absenceSecondComptabiliteGeneral"
                        value="{{ $data['rapport']->absenceSecondComptabiliteGeneral }}"></p>


                <label class=" col-form-label" style="text-align: left;">
                    Total des étudiants de deuxième année
                </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="totalSecondComptabiliteGeneral"
                        id="totalSecondComptabiliteGeneral"
                        value="{{ $data['rapport']->totalSecondComptabiliteGeneral }}"></p>
            </div>

        </div>
        <div id="college-div">
            <center style="background-color: #F2BEB9;border-radius: 10px;">
                Management Commercial </center>
            <br>
            <div class=" card" style="width: auto;padding:20px;margin-top20px;">

                <label class=" col-form-label" style="text-align: left;">
                    Absence première année </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="absenceFirstManagementCommercial"
                        id="absenceFirstManagementCommercial"
                        value="{{ $data['rapport']->absenceFirstManagementCommercial }}"></p>

                <label class=" col-form-label" style="text-align: left;">
                    Le nombre total d'étudiants de première année </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="totalFirstManagementCommercial"
                        id="totalFirstManagementCommercial"
                        value="{{ $data['rapport']->totalFirstManagementCommercial }}"></p>
            </div>
            <div class="card" style="width: auto;padding:20px;margin-top20px;">

                <label class=" col-form-label" style="text-align: left;">
                    absence de la deuxième année </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="absenceSecondManagementCommercial"
                        id="absenceSecondManagementCommercial"
                        value="{{ $data['rapport']->absenceSecondManagementCommercial }}"></p>


                <label class=" col-form-label" style="text-align: left;">
                    Total des étudiants de deuxième année
                </label>
                <p><input disabled required placeholder="" type="text" min="0" max="400"
                        oninput="this.className = ''" name="totalSecondManagementCommercial"
                        id="totalSecondManagementCommercial"
                        value="{{ $data['rapport']->totalSecondManagementCommercial }}"></p>
            </div>

        </div>
        @endif
        @if ($data['rapport']->typeClass == 'SECONDAIRE QUALIFIANT + SECONDAIRE-COLLEGIAL')
            <div id="college-div">
                <center style="background-color: #F2BEB9;border-radius: 10px;">
                    NIVEAU SECONDAIRE-COLLEGIAL
                </center>
                <br>
                <div class=" card" style="width: auto;padding:20px;margin-top20px;">

                    <label class=" col-form-label" style="text-align: left;">
                        Absence de la première année collegial </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="absenceFirstCollege" id="absenceFirstCollege"
                            value="{{ $data['rapport']->absenceFirstCollege }}"></p>

                    <label class=" col-form-label" style="text-align: left;"> Total des étudiants de première année
                        collegial
                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="totalFirstCollege" id="totalFirstCollege"
                            value="{{ $data['rapport']->totalFirstCollege }}"></p>
                </div>
                <div class="card" style="width: auto;padding:20px;margin-top20px;">

                    <label class=" col-form-label" style="text-align: left;">
                        Absence de la deuxième année collegial </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="absenceSecondCollege" id="absenceSecondCollege"
                            value="{{ $data['rapport']->absenceSecondCollege }}"></p>


                    <label class=" col-form-label" style="text-align: left;">
                        Le nombre total d'étudiants de deuxième année collegial
                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="totalSecondCollege" id="totalSecondCollege"
                            value="{{ $data['rapport']->totalSecondCollege }}"></p>
                </div>
                <div class="card" style="width: auto;padding:20px;margin-top20px;">


                    <label class=" col-form-label" style="text-align: left;">
                        Absence de la troisième année de collegial </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="absenceThirdCollege" id="absenceThirdCollege"
                            value="{{ $data['rapport']->absenceThirdCollege }}"></p>


                    <label class=" col-form-label" style="text-align: left;">
                        Le nombre total d'élèves de troisième année collegial </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="totalThirdCollege" id="totalThirdCollege"
                            value="{{ $data['rapport']->totalThirdCollege }}"></p>
                </div>
            </div>
            <div id="errorMessage" style="display: none; color: red;">Value must be between 0 and 400</div>

            <div id="lycee-div">
                <center style="background-color: #F2BEB9;border-radius: 10px;"> niveau secondaire</center>
                <br>
                <div class="card" style="width: auto;padding:20px;margin-top20px;">
                    <label class=" col-form-label" style="text-align: left;">
                        Absence de tronc commun

                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            name="absenceFirstLycee" id="absenceFirstLycee"
                            value="{{ $data['rapport']->absenceFirstLycee }}"></p>

                    <label class=" col-form-label" style="text-align: left;">
                        Total élèves tronc commun
                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            name="totalFirstLycee" id="totalFirstLycee"
                            value="{{ $data['rapport']->totalFirstLycee }}"></p>
                </div>
                <div class="card" style="width: auto;padding:20px;margin-top20px;">

                    <label id="myInput" class=" col-form-label" style="text-align: left;">
                        Absence du premier bac </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="absenceSecondLycee" id="absenceSecondLycee"
                            value="{{ $data['rapport']->absenceSecondLycee }}"></p>


                    <label class=" col-form-label" style="text-align: left;">
                        Le nombre total d'élèves du premier baccalauréat
                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="totalSecondLycee" id="totalSecondLycee"
                            value="{{ $data['rapport']->totalSecondLycee }}"></p>
                </div>
                <div class="card" style="width: auto;padding:20px;margin-top20px;">


                    <label class=" col-form-label" style="text-align: left;">
                        Absence du deuxième baccalauréat </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="absenceThirdLycee" id="absenceThirdLycee"
                            value="{{ $data['rapport']->absenceThirdLycee }}"></p>


                    <label class=" col-form-label" style="text-align: left;">
                        Total élèves du second baccalauréat
                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="totalThirdLycee" id="totalThirdLycee"
                            value="{{ $data['rapport']->totalThirdLycee }}"></p>
                </div>
            </div>
        @endif
        </div>
        </div>
        <div class="tab1">
            <center>
                <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                    cadres de diligence </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-top20px;">

                    <label class=" col-form-label" style="text-align: left;">
                        Nombre de cadres de travail </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="nbEmployee" id="nbEmployee"
                            value="{{ $data['rapport']->nbEmployee }}">
                    </p>

                    <label class=" col-form-label" style="text-align: left;">
                        Le nombre d'absents des cadres
                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="nbAbsenceEmployee" id="nbAbsenceEmployee"
                            value="{{ $data['rapport']->nbAbsenceEmployee }}"></p>


                    <label class=" col-form-label" style="text-align: left;">
                        Le nombre de retardes en retard
                    </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="nbRetardEmployee" id="nbRetardEmployee"
                            value="{{ $data['rapport']->nbRetardEmployee }}"></p>

                </div>

            </div>
        </div>


        <div class="tab1">
            <center>
                <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                    Soutien scolaire pédagogique et indemnisation </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-top20px;">

                    <label class=" col-form-label" style="text-align: left;">
                        Séances de Soutien programmées </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="nbSeanceProgramme" id="nbSeanceProgramme"
                            value="{{ $data['rapport']->nbSeanceProgramme }}"></p>

                    <label class=" col-form-label" style="text-align: left;">
                        Séances de Soutien terminées </label>

                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="nbSeanceEffecuter" id="nbSeanceEffecuter"
                            value="{{ $data['rapport']->nbSeanceEffecuter }}"></p>


                    <label class=" col-form-label" style="text-align: left;">
                        Séances de rémunération terminées </label>
                    <p><input disabled required placeholder="" type="text" min="0" max="400"
                            oninput="this.className = ''" name="nbSeanceComponser" id="nbSeanceComponser"
                            value="{{ $data['rapport']->nbSeanceComponser }}"></p>

                </div>
                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;"> Participants à la séance de révision

                        </label>
                        <p><input disabled required placeholder="" type="text" oninput="this.className = ''"
                                min="0" max="400" name="presentRevision" id="presentRevision"
                                value="{{ $data['rapport']->presentRevision }}"></p>


                    </div>
                </div>
                <br>
            </div>
        </div>

        <div class="tab1">
            <center>
                <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                    réunions terminées </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-top:20px;margin-bottom:10px;padding:10px">

                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th> Conseil d'administration</th>
                                <th> Conseils départementaux</th>
                                <th>Conseils pédagogiques</th>
                                <th>Conseil de l'éducation</th>
                                <th>Conseil de gestion</th>
                                <th>Réunion de l'association <br> de soutien scolaire d'An-Najah</th>
                                <th>Autres réunions</th>
                                <th>aucun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>La nature de la réunion</td>
                                <td><input disabled type="checkbox" name="renionEffectuerConseilAdministratif"
                                        onclick="checkRien()" value="oui"
                                        @if ($data['rapport']->renionEffectuerConseilAdministratif == 'oui') checked @endif></td>
                                <td><input disabled type="checkbox" name="renionEffectuerConseilsDepartementaux"
                                        onclick="checkRien()" value="oui"
                                        @if ($data['rapport']->renionEffectuerConseilsDepartementaux == 'oui') checked @endif></td>
                                <td><input disabled type="checkbox" name="renionEffectuerConseilsPedagogiqueTa3limi"
                                        onclick="checkRien()" value="oui"
                                        @if ($data['rapport']->renionEffectuerConseilsPedagogiqueTa3limi == 'oui') checked @endif></td>
                                <td><input disabled type="checkbox" name="renionEffectuerConseilsPedagogiqueTrbaoui"
                                        onclick="checkRien()" value="oui"
                                        @if ($data['rapport']->renionEffectuerConseilsPedagogiqueTrbaoui == 'oui') checked @endif></td>
                                <td><input disabled type="checkbox" name="renionEffectuerConseilDeGestion"
                                        value="oui" onclick="checkRien()"
                                        @if ($data['rapport']->renionEffectuerConseilDeGestion == 'oui') checked @endif>
                                </td>
                                <td><input disabled type="checkbox"
                                        name="renionEffectuerRenionAssociationSoutienScolaire" value="oui"
                                        onclick="checkRien()" @if ($data['rapport']->renionEffectuerRenionAssociationSoutienScolaire == 'oui') checked @endif></td>
                                <td><input disabled type="checkbox" name="renionEffectuerAutreRenion" value="oui"
                                        onclick="checkRien()" @if ($data['rapport']->renionEffectuerAutreRenion == 'oui') checked @endif>
                                </td>
                                <td><input disabled type="checkbox" name="renionEffectuerRien" value="oui"
                                        onclick="uncheckOthers()" @if ($data['rapport']->renionEffectuerRien == 'oui') checked @endif>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>

            <center>
                <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                    activités effectuées </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">

                    <input disabled type="checkbox" name="activiteEffectuerIntégrée" value="oui"
                        onclick="checkRienSecond()" @if ($data['rapport']->activiteEffectuerIntégrée == 'oui') checked @endif>
                    <label>Activités intégrées</label>
                    <input disabled type="checkbox" name="activiteEffectuerParallel" value="oui"
                        onclick="checkRienSecond()" @if ($data['rapport']->activiteEffectuerParallel == 'oui') checked @endif>
                    <label>Activités parallèles</label>
                    <input disabled type="checkbox" name="activiteEffectuerRien" value="oui"
                        onclick="uncheckOthersSecond()"@if ($data['rapport']->activiteEffectuerRien == 'oui') checked @endif>
                    <label>aucun</label>
                </div>
            </div>
            <center>
                <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                    Rapport simplifié sur les activités réalisées (thème/catégorie...) </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                    <textarea disabled required id="rapportActiviteEffectuer" name="rapportActiviteEffectuer"
                        id="rapportActiviteEffectuer" style="width: 100%">{{ $data['rapport']->rapportActiviteEffectuer }}</textarea>
                </div>
            </div>
            <center>
                <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                    Rapport simplifié sur les visites </div>
            </center>
            <br>

            <div id="lycese-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                    <textarea disabled required id="rapportVisit" name="rapportVisit" id="rapportVisit" style="width: 100%">{{ $data['rapport']->rapportVisit }}</textarea>
                </div>
            </div>
            <center>
                <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                    Déclaration simplifiée des accidents scolaires </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                    <textarea disabled required id="rapportAccidentScolaire" name="rapportAccidentScolaire" id="rapportAccidentScolaire"
                        style="width: 100%">{{ $data['rapport']->rapportAccidentScolaire }}</textarea>
                </div>
            </div>
            <center>
                <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                    Différent </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">
                    <textarea disabled required id="different " oninput="this.className = ''" name="different" name="different"
                        style="width: 100%">{{ $data['rapport']->different }}</textarea>
                </div>
            </div>
            <center>
                <div class="card-header" style="background-color:#F6DEC0;border-radius: 10px;">
                    Class intérieures </div>
            </center>
            <br>

            <div id="lycee-div">
                <br>
                <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">

                    <input disabled type="radio" name="classInterieur" value="oui" onclick="showDiv(this)"
                        @if ($data['rapport']->classInterieur == 'oui') checked @endif> <label>oui</label>
                    <input disabled type="radio" name="classInterieur" value="non" onclick="showDiv(this)"
                        @if ($data['rapport']->classInterieur == 'non') checked @endif><label>non</label>

                </div>
            </div>
            <div id="div1"
                @if ($data['rapport']->classInterieur == 'oui') style="display:block" @else style="display:none" @endif>
                <center>
                    <div class="card-header" style="background-color:#B9F2CD;border-radius: 10px;">
                        Class intérieure</div>
                </center>
                <br>

                <div id="lycee-div">
                    <br>
                    <div class="card" style="width: auto;padding:20px;margin-top20px;">

                        <label class=" col-form-label" style="text-align: left;">
                            Inscrit pour le petit déjeuner</label>
                        <p><input disabled required placeholder="" type="text" oninput="this.className = ''"
                                min="0" max="400" name="inscritPetitDejeuner" id="inscritPetitDejeuner"
                                value="{{ $data['rapport']->inscritPetitDejeuner }}"></p>

                        <label class=" col-form-label" style="text-align: left;">
                            Les participants au petit déjeuner </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="presentPetitDejeuner" id="presentPetitDejeuner"
                                value="{{ $data['rapport']->presentPetitDejeuner }}"></p>


                        <label class=" col-form-label" style="text-align: left;">
                            Inscrit pour le déjeuner</label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="inscritDejeuner" id="inscritDejeuner"
                                value="{{ $data['rapport']->inscritDejeuner }}"></p>
                        <label class=" col-form-label" style="text-align: left;">
                            Les participants au déjeuner </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="presentDejeuner" id="presentDejeuner"
                                value="{{ $data['rapport']->presentDejeuner }}"></p>

                        <label class=" col-form-label" style="text-align: left;">
                            Inscrit pour le dinner</label>
                        <p><input disabled placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="inscritDinner" id="inscritDinner"
                                value="{{ $data['rapport']->inscritDinner }}"></p>
                        <label class=" col-form-label" style="text-align: left;">
                            Les participants au dinner </label>
                        </label>
                        <p><input disabled required placeholder="" type="text" min="0" max="400"
                                oninput="this.className = ''" name="presentDinner" id="presentDinner"
                                value="{{ $data['rapport']->presentDinner }}"></p>

                    </div>
                </div>


                <div id="lycee-div">

                    <br>
                    <label class=" col-form-label" style="text-align: left;"> Programme Nutritional</label>
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
                                    <td><input disabled type="radio" name="RespectProgrammeNutritional"
                                            @if ($data['rapport']->RespectProgrammeNutritional == '5') checked @endif value="5"></td>
                                    <td><input disabled type="radio" name="RespectProgrammeNutritional"
                                            @if ($data['rapport']->RespectProgrammeNutritional == '4') checked @endif value="4"></td>
                                    <td><input disabled type="radio" name="RespectProgrammeNutritional"
                                            @if ($data['rapport']->RespectProgrammeNutritional == '3') checked @endif value="3"></td>
                                    <td><input disabled type="radio" name="RespectProgrammeNutritional"
                                            @if ($data['rapport']->RespectProgrammeNutritional == '2') checked @endif value="2"></td>
                                    <td><input disabled type="radio" name="RespectProgrammeNutritional"
                                            @if ($data['rapport']->RespectProgrammeNutritional == '1') checked @endif value="1"></td>
                                    <td style="text-align: center;"> Respect de Programme Nutritional</td>

                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><input disabled type="radio" name="quality"
                                            @if ($data['rapport']->quality == '5') checked @endif value="5"></td>
                                    <td><input disabled type="radio" name="quality"
                                            @if ($data['rapport']->quality == '4') checked @endif value="4"></td>
                                    <td><input disabled type="radio" name="quality"
                                            @if ($data['rapport']->quality == '3') checked @endif value="3"></td>
                                    <td><input disabled type="radio" name="quality"
                                            @if ($data['rapport']->quality == '2') checked @endif value="2"></td>
                                    <td><input disabled type="radio" name="quality"
                                            @if ($data['rapport']->quality == '1') checked @endif value="1"></td>
                                    <td style="text-align: center;"> quality</td>

                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><input disabled type="radio" name="quantity"
                                            @if ($data['rapport']->quantity == '5') checked @endif value="5"></td>
                                    <td><input disabled type="radio" name="quantity"
                                            @if ($data['rapport']->quantity == '4') checked @endif value="4"></td>
                                    <td><input disabled type="radio" name="quantity"
                                            @if ($data['rapport']->quantity == '3') checked @endif value="3"></td>
                                    <td><input disabled type="radio" name="quantity"
                                            @if ($data['rapport']->quantity == '2') checked @endif value="2"></td>
                                    <td><input disabled type="radio" name="quantity"
                                            @if ($data['rapport']->quantity == '1') checked @endif value="1"></td>
                                    <td style="text-align: center;"> quantity</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div id="div2"
                @if ($data['rapport']->classInterieur == 'non') style="display:block" @else style="display:none" @endif>
            </div>

        </div>
</body>

</html>
