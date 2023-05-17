<html>

<head>
    <meta charset="utf-8">
    <title>Rapport </title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            font: bold 100% sans-serif;
            letter-spacing: 0.25em;
            text-align: center;
            text-transform: uppercase;
        }

        h2 {
            font: bold 100% sans-serif;
            text-align: center;
            clip: rect(0 0 0 0);

        }


        table {
            font-size: 75%;
            table-layout: fixed;
            width: 100%;
        }

        table {
            border-collapse: separate;
            border-spacing: 2px;
        }

        th,
        td {
            border-width: 1px;
            padding: 0.5em;
            position: relative;
            text-align: left;
        }

        th,
        td {
            border-radius: 0.25em;
            border-style: solid;
        }

        th {
            background: #EEE;
            border-color: #BBB;
        }

        td {
            border-color: #DDD;
        }


        html {

            margin-bottom: 0;
            margin-top: 0;

        }

        body {
            box-sizing: border-box;
            height: 11in;
            margin: 0 auto;
            overflow: hidden;
            padding: 0.5in;
            width: 90%;
        }


        header {
            margin: 0 0 3em;
        }

        header:after {
            clear: both;
            content: "";
            display: table;
        }

        header h1 {
            background: #ddd;
            border-radius: 0.25em;
            font: bold;
            color: #000;
            margin: 0 0 1em;
            padding: 0.5em 0;
        }

        header address {
            font-size: 75%;
            font-style: normal;
            line-height: 1.25;
            margin: 0 1em 1em 0;
        }

        header .t1 {
            float: left;
        }

        header .t2 {
            float: right;
        }


        article,
        article address,
        table.meta,
        table.inventory {
            margin: 0 0 2em;
        }

        article:after {
            clear: both;
            content: "";
            display: table;
        }

        article h1 {
            clip: rect(0 0 0 0);
            position: absolute;
        }

        article address {
            float: left;
            font-size: 125%;
            font-weight: bold;
        }


        table.meta,
        table.balance {
            float: right;
            width: 36%;
        }

        table.meta:after,
        table.balance:after {
            clear: both;
            content: "";
            display: table;
        }

        table.balance1 {
            float: right;
            width: 26%;
        }

        table.balance1,
        td {
            width: 26%;
        }

        table.balance1:after {
            clear: both;
            content: "";
            display: table;
        }

        table.balance2 {
            float: right;
            width: 26%;
        }

        table.balance2:after {
            clear: both;
            content: "";
            display: table;
        }


        table.inventory {
            clear: both;
            width: 100%;
        }

        table.inventory th {
            font-weight: bold;
            text-align: center;
        }

        table.inventory td:nth-child(1) {
            width: 26%;
        }

        table.inventory td:nth-child(2) {
            width: 38%;
        }

        table.inventory td:nth-child(3) {
            text-align: right;
            width: 12%;
        }

        table.inventory td:nth-child(4) {
            text-align: right;
            width: 12%;
        }
+
        table.inventory td:nth-child(5) {
            text-align: right;
            width: 12%;
        }
    </style>
</head>

<body>
    <div class="row ">
        <img class="mx-auto d-block" style="border-style: outset;width:100%;border-radius: 5px;margin-bottom: 30px;"
            src="data:image/jpeg;base64,{{ $data['image'] }}">
    </div>
    <header>
        <h1>Rapport journalier </h1>
                <address class="t1">
                    <p style="font-weight: bolder">-CD_ETAB- : [{{ $data['rapport1'][0]->CD_ETAB }}]</p>

                    <p style="font-weight: bolder">-Date- : [{{ $data['rapport']->date }}]</p>
                    <p style="font-weight: bolder">-NOM_ETABL- : [{{ $data['rapport1'][0]->NOM_ETABL }}]</p>
                </address>
                <address class="t2">
                    <p style="font-weight: bolder">-ll_com- : [{{ $data['rapport1'][0]->ll_com }}] <br> -NetabFr-:
                        [{{ $data['rapport1'][0]->NetabFr }}] </p>
                </address>
    </header>
    <hr>
    <article>
        <h1>absenteisme des élèves </h1>
        @if ($data['rapport']->typeClass == 'PRIMAIRE')

        <table class="meta">
            <tr>
                <th><span>Total absences</span></th>
                <td><span>{{ $data['rapport']->absenceFirstPrimaire + $data['rapport']->absenceThirdPrimaire + $data['rapport']->absenceFourthPrimaire + $data['rapport']->absenceFifthPrimaire + $data['rapport']->absenceSixthPrimaire + $data['rapport']->absenceSecondPrimaire}}</span>
                </td>
            </tr>
            <tr>
                <th><span>Total Etudiant</span></th>
                <td><span>{{ $data['rapport']->totalFirstPrimaire + $data['rapport']->totalSecondPrimaire + $data['rapport']->absenceThirdPrimaire + $data['rapport']->absenceFourthPrimaire + $data['rapport']->totalFifthPrimaire + $data['rapport']->absenceSixthPrimaire  }}</span>
                </td>
            </tr>

        </table>
        @endif
        @if ($data['rapport']->typeClass == 'BTS + SECONDAIRE QUALIFIANT')

        <table class="meta">
            <tr>
                <th><span>Total absences</span></th>
                <td><span>{{ $data['rapport']->absenceFirstLycee + $data['rapport']->absenceSecondLycee + $data['rapport']->absenceThirdLycee + $data['rapport']->absenceFirstComptabiliteGeneral + $data['rapport']->absenceSecondComptabiliteGeneral + $data['rapport']->absenceFirstManagementCommercial+$data['rapport']->absenceSecondManagementCommercial }}</span>
                </td>
            </tr>
            <tr>
                <th><span>Total Etudiant</span></th>
                <td><span>{{ $data['rapport']->totalFirstLycee + $data['rapport']->totalSecondLycee + $data['rapport']->totalThirdLycee + $data['rapport']->totalFirstManagementCommercial + $data['rapport']->totalSecondManagementCommercial + $data['rapport']->totalFirstComptabiliteGeneral + $data['rapport']->totalSecondComptabiliteGeneral  }}</span>
                </td>
            </tr>

        </table>
        @endif
        @if ($data['rapport']->typeClass == 'BTS')

        <table class="meta">
            <tr>
                <th><span>Total absences</span></th>
                <td><span>{{ $data['rapport']->absenceFirstComptabiliteGeneral + $data['rapport']->absenceSecondComptabiliteGeneral + $data['rapport']->absenceFirstManagementCommercial+$data['rapport']->absenceSecondManagementCommercial }}</span>
                </td>
            </tr>
            <tr>
                <th><span>Total Etudiant</span></th>
                <td><span>{{ $data['rapport']->totalFirstLycee + $data['rapport']->totalSecondLycee + $data['rapport']->totalThirdLycee + $data['rapport']->totalFirstManagementCommercial + $data['rapport']->totalSecondManagementCommercial + $data['rapport']->totalFirstComptabiliteGeneral + $data['rapport']->totalSecondComptabiliteGeneral  }}</span>
                </td>
            </tr>

        </table>
        @endif
        @if ($data['rapport']->typeClass == 'BTS + SECONDAIRE QUALIFIANT')
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <br>

            <h2>SECONDAIRE QUALIFIANT</h2>
            <table class="balance">
                <tr>
                    <th><span>Absence de tronc commun</span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceFirstLycee }}</span></td>
                </tr>
                <tr>
                    <th><span>Total de tronc commun</span></th>
                    <td><span></span><span>{{ $data['rapport']->totalFirstLycee }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence du premier bac</span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceSecondLycee }}</span></td>
                </tr>
                <tr>
                    <th><span> Total du premier bac </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalSecondLycee }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence du deuxième bac</span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceThirdLycee }}</span></td>
                </tr>
                <tr>
                    <th><span> Total du deuxième bac </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalThirdLycee }}</span></td>
                </tr>


            </table>
            <br><br>
            <br><br>
            <br>
            <h2>BTS <h5>Comptabilité et gestion && Management Commercial </h5>
            </h2>
            <table class="balance1">
                <tr>
                    <th><span>absence deuxième année CG</span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceSecondComptabiliteGeneral }}</span></td>
                </tr>
                <tr>
                    <th><span>Total deuxième année CG</span></th>
                    <td><span></span><span>{{ $data['rapport']->totalSecondComptabiliteGeneral }}</span></td>
                </tr>

            </table>

            <table class="balance1">
                <tr>
                    <th><span>Absence première année CG </span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceFirstComptabiliteGeneral }}</span></td>
                </tr>
                <tr>
                    <th><span>Total première année CG </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalFirstComptabiliteGeneral }}</span></td>
                </tr>

            </table>

            <table class="balance1">
                <tr>
                    <th><span>absence deuxième année CM</span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceSecondManagementCommercial }}</span></td>
                </tr>
                <tr>
                    <th><span>Total deuxième année CM</span></th>
                    <td><span></span><span>{{ $data['rapport']->totalSecondManagementCommercial }}</span></td>
                </tr>

            </table>
            <table class="balance1">
                <tr>
                    <th><span>Absence première année CM </span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceFirstManagementCommercial }}</span></td>
                </tr>
                <tr>
                    <th><span>Total première année CM </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalFirstManagementCommercial }}</span></td>
                </tr>

            </table>
        @endif
        @if ($data['rapport']->typeClass == 'BTS ')
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>

        <h2>SECONDAIRE QUALIFIANT</h2>
        <table class="balance">
            <tr>
                <th><span>Absence de tronc commun</span></th>
                <td><span></span><span>{{ $data['rapport']->absenceFirstLycee }}</span></td>
            </tr>
            <tr>
                <th><span>Total de tronc commun</span></th>
                <td><span></span><span>{{ $data['rapport']->totalFirstLycee }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du premier bac</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceSecondLycee }}</span></td>
            </tr>
            <tr>
                <th><span> Total du premier bac </span></th>
                <td><span></span><span>{{ $data['rapport']->totalSecondLycee }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du deuxième bac</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceThirdLycee }}</span></td>
            </tr>
            <tr>
                <th><span> Total du deuxième bac </span></th>
                <td><span></span><span>{{ $data['rapport']->totalThirdLycee }}</span></td>
            </tr>


        </table>
        <br><br>
        <br><br>
        <br>
        <h2>BTS <h5>Comptabilité et gestion && Management Commercial </h5>
        </h2>
        <table class="balance1">
            <tr>
                <th><span>absence deuxième année CG</span></th>
                <td><span></span><span>{{ $data['rapport']->absenceSecondComptabiliteGeneral }}</span></td>
            </tr>
            <tr>
                <th><span>Total deuxième année CG</span></th>
                <td><span></span><span>{{ $data['rapport']->totalSecondComptabiliteGeneral }}</span></td>
            </tr>

        </table>

        <table class="balance1">
            <tr>
                <th><span>Absence première année CG </span></th>
                <td><span></span><span>{{ $data['rapport']->absenceFirstComptabiliteGeneral }}</span></td>
            </tr>
            <tr>
                <th><span>Total première année CG </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFirstComptabiliteGeneral }}</span></td>
            </tr>

        </table>

        <table class="balance1">
            <tr>
                <th><span>absence deuxième année CM</span></th>
                <td><span></span><span>{{ $data['rapport']->absenceSecondManagementCommercial }}</span></td>
            </tr>
            <tr>
                <th><span>Total deuxième année CM</span></th>
                <td><span></span><span>{{ $data['rapport']->totalSecondManagementCommercial }}</span></td>
            </tr>

        </table>
        <table class="balance1">
            <tr>
                <th><span>Absence première année CM </span></th>
                <td><span></span><span>{{ $data['rapport']->absenceFirstManagementCommercial }}</span></td>
            </tr>
            <tr>
                <th><span>Total première année CM </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFirstManagementCommercial }}</span></td>
            </tr>

        </table>
    @endif
    @if ($data['rapport']->typeClass == 'SECONDAIRE QUALIFIANT')
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <br>

            <h2>SECONDAIRE QUALIFIANT</h2>
            <table class="balance">
                <tr>
                    <th><span>Absence de tronc commun</span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceFirstLycee }}</span></td>
                </tr>
                <tr>
                    <th><span>Total de tronc commun</span></th>
                    <td><span></span><span>{{ $data['rapport']->totalFirstLycee }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence du premier bac</span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceSecondLycee }}</span></td>
                </tr>
                <tr>
                    <th><span> Total du premier bac </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalSecondLycee }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence du deuxième bac</span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceThirdLycee }}</span></td>
                </tr>
                <tr>
                    <th><span> Total du deuxième bac </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalThirdLycee }}</span></td>
                </tr>


            </table>
            <br><br>
            <br><br>
            <br>
      
        @endif
        @if ($data['rapport']->typeClass == 'PRIMAIRE')
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>

        <h2>PRIMAIRE</h2>

        <table class="balance">
            <tr>
                <th><span> Absence du premier année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceFirstPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du premier année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFirstPrimaire }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du deuxième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceSecondPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du deuxième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalSecondPrimaire }}</span></td>
            </tr>


        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du troisième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceThirdPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du troisième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalThirdPrimaire }}</span></td>
            </tr>


        </table>
        <br><br>
        <br>
        <br>
        <br>
        <table class="balance">
            <tr>
                <th><span> Absence du quatrième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceFourthPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du quatrième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFourthPrimaire }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du cinquième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceFifthPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du cinquième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFifthPrimaire }}</span></td>
            </tr>


        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du deuxième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceSixthPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du deuxième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalSixthPrimaire }}</span></td>
            </tr>


        </table>
    @endif
@if ($data['rapport']->typeClass == 'SECONDAIRE-COLLEGIAL')
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <br>

            <h2>SECONDAIRE COLLEGIAL</h2>
            <table class="balance">
                <tr>
                    <th><span> Absence de la première année</span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceFirstCollege }}</span></td>
                </tr>
                <tr>
                    <th><span>Total de la première année</span></th>
                    <td><span></span><span>{{ $data['rapport']->totalFirstCollege }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence de la deuxième année </span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceSecondCollege }}</span></td>
                </tr>
                <tr>
                    <th><span> Total de la deuxième année  </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalSecondCollege }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence de la troisième année</span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceThirdCollege }}</span></td>
                </tr>
                <tr>
                    <th><span> Total de la troisième année </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalThirdCollege }}</span></td>
                </tr>


            </table>
            <br><br>
            <br><br>
            <br>
      
        @endif
        @if ($data['rapport']->typeClass == 'SECONDAIRE QUALIFIANT + SECONDAIRE-COLLEGIAL')
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>

        <h2>SECONDAIRE QUALIFIANT</h2>
        <table class="balance">
            <tr>
                <th><span>Absence de tronc commun</span></th>
                <td><span></span><span>{{ $data['rapport']->absenceFirstLycee }}</span></td>
            </tr>
            <tr>
                <th><span>Total de tronc commun</span></th>
                <td><span></span><span>{{ $data['rapport']->totalFirstLycee }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du premier bac</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceSecondLycee }}</span></td>
            </tr>
            <tr>
                <th><span> Total du premier bac </span></th>
                <td><span></span><span>{{ $data['rapport']->totalSecondLycee }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du deuxième bac</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceThirdLycee }}</span></td>
            </tr>
            <tr>
                <th><span> Total du deuxième bac </span></th>
                <td><span></span><span>{{ $data['rapport']->totalThirdLycee }}</span></td>
            </tr>


        </table>
        <br><br>
       
            <br><br>
            <h2>SECONDAIRE COLLEGIAL</h2>
            <table class="balance">
                <tr>
                    <th><span> Absence de la première année</span></th>
                    <td><span></span><span>{{ $data['rapport']->absenceFirstCollege }}</span></td>
                </tr>
                <tr>
                    <th><span>Total de la première année</span></th>
                    <td><span></span><span>{{ $data['rapport']->totalFirstCollege }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence de la deuxième année </span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceSecondCollege }}</span></td>
                </tr>
                <tr>
                    <th><span> Total de la deuxième année  </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalSecondCollege }}</span></td>
                </tr>

            </table>
            <table class="balance">
                <tr>
                    <th><span> Absence de la troisième année</span></th>
                    <td><span> </span><span>{{ $data['rapport']->absenceThirdCollege }}</span></td>
                </tr>
                <tr>
                    <th><span> Total de la troisième année </span></th>
                    <td><span></span><span>{{ $data['rapport']->totalThirdCollege }}</span></td>
                </tr>


            </table>
            <br><br>
            <br><br><br><br><br>
            <br>
      
        @endif

        @if ($data['rapport']->typeClass == 'PRIMAIRE')
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>

        <h2>PRIMAIRE</h2>

        <table class="balance">
            <tr>
                <th><span> Absence du premier année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceFirstPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du premier année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFirstPrimaire }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du deuxième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceSecondPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du deuxième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalSecondPrimaire }}</span></td>
            </tr>


        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du troisième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceThirdPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du troisième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalThirdPrimaire }}</span></td>
            </tr>


        </table>
        <br><br>
        <br>
        <br>
        <br>
        <table class="balance">
            <tr>
                <th><span> Absence du quatrième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceFourthPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du quatrième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFourthPrimaire }}</span></td>
            </tr>

        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du cinquième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceFifthPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du cinquième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalFifthPrimaire }}</span></td>
            </tr>


        </table>
        <table class="balance">
            <tr>
                <th><span> Absence du deuxième année</span></th>
                <td><span> </span><span>{{ $data['rapport']->absenceSixthPrimaire }}</span></td>
            </tr>
            <tr>
                <th><span> Total du deuxième année </span></th>
                <td><span></span><span>{{ $data['rapport']->totalSixthPrimaire }}</span></td>
            </tr>


        </table>
    @endif
    </article>
    <article>
        <h1>absenteisme des professeurs </h1>
        <table class="meta">
            <tr>
                <th><span>Nombre des professeurs <span></th>
                <td><span>{{ $data['rapport']->nbEmployee }}</span></td>
            </tr>
            <tr>
                <th><span>Nombre d'absents </span></th>
                <td><span>{{ $data['rapport']->nbAbsenceEmployee }}</span></td>
            </tr>
            <tr>
                <th><span>Nombre de retardes</span></th>
                <td><span>{{ $data['rapport']->nbRetardEmployee }}</span></td>
            </tr>

        </table>
        <br>
        <br><br><br><br><br><br><br>
        



    </article>
    <article>
       
        <h1>    Soutien scolaire <br> pédagogique et indemnisation </h1>
        <table class="meta">
            <tr>
                <th><span>Séances de Soutien programmées<span></th>
                <td><span>{{ $data['rapport']->nbSeanceProgramme }}</span></td>
            </tr>
            <tr>
                <th><span> Séances de Soutien terminées </span></th>
                <td><span>{{ $data['rapport']->nbSeanceEffecuter }}</span></td>
            </tr>
            <tr>
                <th><span> Séances de rémunération terminées </span></th>
                <td><span>{{ $data['rapport']->nbSeanceComponser }}</span></td>
            </tr>
            <tr>
                <th><span> Participants à la séance de révision</span></th>
                <td><span>{{ $data['rapport']->presentRevision }}</span></td>
            </tr>

        </table>



    </article>
    <article>
        <h1> réunions terminées </h1>
        <br><br><br><br>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th> Conseil d'administration</th>
                    <th> Conseils départementaux</th>
                    <th>Conseils pédagogiques</th>
                    <th>Conseil de l'éducation</th>
                    <th>Conseil de gestion</th>
                    <th>Réunion d'association </th>
                    <th>Autres réunions</th>
                    <th>aucun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>La nature de la réunion</td>
                    <td><input disabled type="checkbox" name="renionEffectuerConseilAdministratif" onclick="checkRien()"
                            value="oui" @if ($data['rapport']->renionEffectuerConseilAdministratif == 'oui') checked @endif></td>
                    <td><input disabled type="checkbox" name="renionEffectuerConseilsDepartementaux"
                            onclick="checkRien()" value="oui" @if ($data['rapport']->renionEffectuerConseilsDepartementaux == 'oui') checked @endif></td>
                    <td><input disabled type="checkbox" name="renionEffectuerConseilsPedagogiqueTa3limi"
                            onclick="checkRien()" value="oui" @if ($data['rapport']->renionEffectuerConseilsPedagogiqueTa3limi == 'oui') checked @endif></td>
                    <td><input disabled type="checkbox" name="renionEffectuerConseilsPedagogiqueTrbaoui"
                            onclick="checkRien()" value="oui" @if ($data['rapport']->renionEffectuerConseilsPedagogiqueTrbaoui == 'oui') checked @endif></td>
                    <td><input disabled type="checkbox" name="renionEffectuerConseilDeGestion" value="oui"
                            onclick="checkRien()" @if ($data['rapport']->renionEffectuerConseilDeGestion == 'oui') checked @endif>
                    </td>
                    <td><input disabled type="checkbox" name="renionEffectuerRenionAssociationSoutienScolaire"
                            value="oui" onclick="checkRien()" @if ($data['rapport']->renionEffectuerRenionAssociationSoutienScolaire == 'oui') checked @endif></td>
                    <td><input disabled type="checkbox" name="renionEffectuerAutreRenion" value="oui"
                            onclick="checkRien()" @if ($data['rapport']->renionEffectuerAutreRenion == 'oui') checked @endif>
                    </td>
                    <td><input disabled type="checkbox" name="renionEffectuerRien" value="oui"
                            onclick="uncheckOthers()" @if ($data['rapport']->renionEffectuerRien == 'oui') checked @endif>
                    </td>
                </tr>
            </tbody>
        </table>

    </article>
    <article>
        <h1> activités effectuées </h1>
        <br><br>
        <div id="lycee-div">
            <br>
            <div class="card" style="width: auto;">

                <input disabled type="checkbox" name="activiteEffectuerIntégrée" value="oui"
                    onclick="checkRienSecond()" @if ($data['rapport']->activiteEffectuerIntégrée == 'oui') checked @endif>
                <label>Activités intégrées
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input disabled type="checkbox" name="activiteEffectuerParallel" value="oui"
                    onclick="checkRienSecond()" @if ($data['rapport']->activiteEffectuerParallel == 'oui') checked @endif>
                <label>Activités parallèles
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input disabled type="checkbox" name="activiteEffectuerRien" value="oui"
                    onclick="uncheckOthersSecond()" @if ($data['rapport']->activiteEffectuerRien == 'oui') checked @endif>
                <label>aucun &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            </div>
        </div>
        <br>
        <center>
            <div class="card-header" style="background-color:#d7d5d1;border-radius: 5px;">
                Rapport simplifié sur les activités réalisées (thème/catégorie...) </div>
        </center>
        <br>

        <div id="lycee-div">
            <br>
            <div class="card" style="width: auto;">
                <textarea disabled required id="rapportActiviteEffectuer" name="rapportActiviteEffectuer" id="rapportActiviteEffectuer"
                    style="width: 100%">{{ $data['rapport']->rapportActiviteEffectuer }}</textarea>
            </div>
        </div>
        <br>
        <center>
            <div class="card-header" style="background-color:#d7d5d1;border-radius: 5px;">
                Rapport simplifié sur les visites </div>
        </center>
        <br>

        <div id="lycese-div">
            <br>
            <div class="card" style="width: auto;">
                <textarea disabled required id="rapportVisit" name="rapportVisit" id="rapportVisit" style="width: 100%">{{ $data['rapport']->rapportVisit }}</textarea>
            </div>
        </div>
        <center>
            <div class="card-header" style="background-color:#d7d5d1;border-radius: 5px;">
                Déclaration simplifiée des accidents scolaires </div>
        </center>
        <br>

        <div id="lycee-div">
            <br>
            <div class="card" style="width: auto;">
                <textarea disabled required id="rapportAccidentScolaire" name="rapportAccidentScolaire" id="rapportAccidentScolaire"
                    style="width: 100%">{{ $data['rapport']->rapportAccidentScolaire }}</textarea>
            </div>
        </div>
        <br>
        <center>
            <div class="card-header" style="background-color:#d7d5d1;border-radius: 5px;">
                Différent </div>
        </center>
        <br>

        <div id="lycee-div">
            <br>
            <div class="card" style="width: auto;">
                <textarea disabled required id="different " oninput="this.className = ''" name="different" name="different"
                    style="width: 100%">{{ $data['rapport']->different }}</textarea>
            </div>
        </div>

    </article>
    <article>
        <h1> Class intérieure </h1>

        <br>
        <br>
        <br>

        <div id="lycee-div">
            <br>
            <center>
                <div class="card" style="width: auto;padding:20px;margin-bottom:10px;padding:10px">

                    <input disabled type="radio" name="classInterieur" value="oui" onclick="showDiv(this)"
                        @if ($data['rapport']->classInterieur == 'oui') checked @endif> <label>oui
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input disabled type="radio" name="classInterieur" value="non" onclick="showDiv(this)"
                        @if ($data['rapport']->classInterieur == 'non') checked @endif><label>non</label>

                </div>
            </center>
        </div>
        <div id="div1"
            @if ($data['rapport']->classInterieur == 'oui') style="display:block" @else
            style="display:none" @endif>
            <center>
                <table class="balance">
                    <tr>
                        <th><span>Inscrit pour le petit déjeuner</span></th>
                        <td><span></span><span>{{ $data['rapport']->inscritPetitDejeuner }}</span></td>
                    </tr>
                    <tr>
                        <th><span>Les participants au petit déjeuner</span></th>
                        <td><span></span><span>{{ $data['rapport']->presentPetitDejeuner }}</span></td>
                    </tr>

                </table>
                <table class="balance">
                    <tr>
                        <th><span> Inscrit pour le déjeuner</span></th>
                        <td><span> </span><span>{{ $data['rapport']->inscritDejeuner }}</span></td>
                    </tr>
                    <tr>
                        <th><span> Les participants au déjeuner </span></th>
                        <td><span></span><span>{{ $data['rapport']->presentDejeuner }}</span></td>
                    </tr>

                </table>
                <table class="balance">
                    <tr>
                        <th><span> Inscrit pour le dinner</span></th>
                        <td><span> </span><span>{{ $data['rapport']->inscritDinner }}</span></td>
                    </tr>
                    <tr>
                        <th><span> Les participants au dinner </span></th>
                        <td><span></span><span>{{ $data['rapport']->totalThirdLycee }}</span></td>
                    </tr>


                </table>
            </center>
            <br>
    </article>
    <article>

        <h1> Programme Nutritional</h1>

        <br>
        <br>
        <br>

        <div id="lycee-div" style="text-align: left">

            <br>
            <h2 class="col-form-label" style="text-align: left;"> Respect Programme Nutritional:
                @if ($data['rapport']->RespectProgrammeNutritional == 1)
                    <span><img style="width:30%;border-radius: 10px;"
                            src="data:image/jpeg;base64,{{ $data['image1'] }}"></span>
                @elseif($data['rapport']->RespectProgrammeNutritional == 2)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image2'] }}">
                @elseif($data['rapport']->RespectProgrammeNutritional == 3)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image3'] }}">
                @elseif($data['rapport']->RespectProgrammeNutritional == 4)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image4'] }}">
                @elseif($data['rapport']->RespectProgrammeNutritional == 5)
                    <span><img class="mx-auto d-block" style="width:30%;"
                            src="data:image/jpeg;base64,{{ $data['image5'] }}"></span>
                @elseif($data['rapport']->RespectProgrammeNutritional == 0)
                    <span><img class="mx-auto d-block" style="width:30%;"
                            src="data:image/jpeg;base64,{{ $data['image0'] }}"></span>
                @endif
            </h2>

            <h2 class=" col-form-label" style="text-align: left;"> quality
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :@if ($data['rapport']->quality == 1)
                    <span><img style="width:30%;border-radius: 10px;"
                            src="data:image/jpeg;base64,{{ $data['image1'] }}"></span>
                @elseif($data['rapport']->quality == 2)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image2'] }}">
                @elseif($data['rapport']->quality == 3)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image3'] }}">
                @elseif($data['rapport']->quality == 4)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image4'] }}">
                @elseif($data['rapport']->quality == 5)
                    <span><img class="mx-auto d-block" style="width:30%;"
                            src="data:image/jpeg;base64,{{ $data['image5'] }}"></span>
                @elseif($data['rapport']->quality == 0)
                    <span><img class="mx-auto d-block" style="width:30%;"
                            src="data:image/jpeg;base64,{{ $data['image0'] }}"></span>
                @endif
                <br>
            </h2>
            <h2 class=" col-form-label" style="text-align: left;"> quantity
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :@if ($data['rapport']->quantity == 1)
                    <span><img style="width:30%;border-radius: 10px;"
                            src="data:image/jpeg;base64,{{ $data['image1'] }}"></span>
                @elseif($data['rapport']->quantity == 2)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image2'] }}">
                @elseif($data['rapport']->quantity == 3)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image3'] }}">
                @elseif($data['rapport']->quantity == 4)
                    <img class="mx-auto d-block" style="width:30%;"
                        src="data:image/jpeg;base64,{{ $data['image4'] }}">
                @elseif($data['rapport']->quantity == 5)
                    <span><img class="mx-auto d-block" style="width:30%;"
                            src="data:image/jpeg;base64,{{ $data['image5'] }}"></span>
                @elseif($data['rapport']->quantity == 0)
                    <span><img class="mx-auto d-block" style="width:30%;"
                            src="data:image/jpeg;base64,{{ $data['image0'] }}"></span>
                @endif
                <br>
            </h2>
            <div class="card" style="width: auto;padding:20px;margin-top:20px;padding:10px">


            </div>
        </div>
        </div>
        <div id="div2"
            @if ($data['rapport']->classInterieur == 'non') style="display:block" @else
            style="display:none" @endif>
        </div>



    </article>
</body>

</html>
