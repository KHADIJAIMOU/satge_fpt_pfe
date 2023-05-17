<?php

    namespace App\Http\Controllers;
    require_once base_path('/vendor/autoload.php');

    use App\Models\Rapport;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\DB;

    use Dompdf\Dompdf;
use Dompdf\Options;
use App;
use PDF;
use TCPDF;
use View;
use Illuminate\Support\Facades\Storage;


    class RapportAdminController extends Controller
    {
        public function index(){
        $repports = Rapport::select('*', DB::raw('(absenceFirstPrimaire + absenceThirdPrimaire + absenceFourthPrimaire + absenceFifthPrimaire + absenceSixthPrimaire + absenceSecondPrimaire + absenceFirstCollege + absenceSecondCollege + absenceThirdCollege + absenceFirstComptabiliteGeneral + absenceSecondComptabiliteGeneral + absenceFirstManagementCommercial + absenceSecondManagementCommercial) as total_absences'))
            ->orderBy('total_absences', 'desc')
            ->paginate(5);
        session()->put("menu", "repports");

        return view('auth.admin.showRapports', compact('repports'));


      }

        // public function print($id, Rapport $Rapport)
        // {
        //     App::setLocale('ar');
        
        //     $rapport = Rapport::find($id);
        //     $users = User::where('CD_ETAB', $rapport->CD_ETAB)->get();
        //     $imagePath = public_path('img/logo.jpg');
        //     $image = base64_encode(file_get_contents($imagePath));
        //     $image = base64_encode(file_get_contents(public_path('img/logo.jpg')));
        //     $image0 = base64_encode(file_get_contents(public_path('img/image0.jpg')));
        //     $image1 = base64_encode(file_get_contents(public_path('img/image1.jpg')));
        //     $image2= base64_encode(file_get_contents(public_path('img/image2.jpg')));
        //     $image3= base64_encode(file_get_contents(public_path('img/image3.jpg')));
        //     $image4= base64_encode(file_get_contents(public_path('img/image4.jpg')));
        //     $image5= base64_encode(file_get_contents(public_path('img/image5.jpg')));
        
        //     // Pass data to the view as an array
        //     $data = [
        //         'rapport' => $rapport,
        //         'users' => $users,
        //         'image' => $image,
        //         'image0' => $image0,
        //         'image1' => $image1,
        //         'image2' => $image2,
        //         'image3' => $image3,
        //         'image4' => $image4,
        //         'image5' => $image5,

        //     ];
        
        //     // generate the PDF file from a Blade template
        //     $html = view('auth.admin.rapport.print', compact('data'))->render();
        
        //     // instantiate Dompdf class
        //     $dompdf = new Dompdf();
        
        //     // load HTML content into Dompdf
        //     $dompdf->loadHtml($html, 'UTF-8');
        
        //     // (Optional) Set paper size and orientation
        //     $dompdf->setPaper('A4', 'portrait');
        
        //     // Render the HTML as PDF
        //     $dompdf->render();
        
        //     // Output the generated PDF (forced download)
        //     return $dompdf->stream('report.pdf', ['Attachment' => false]);
        // }
        public function print($id, Rapport $Rapport)
        {
            App::setLocale('ar');
        
            $rapport = Rapport::find($id);
            $users = User::where('CD_ETAB', $rapport->CD_ETAB)->get();
            $rapport1 = User::select('NOM_ETABL','CD_ETAB','ll_com','NetabFr')
            ->where('id', $rapport->users_id)
            ->get();
            $imagePath = public_path('img/logo.jpg');
            $image = base64_encode(file_get_contents($imagePath));
            $image = base64_encode(file_get_contents(public_path('img/logo.jpg')));
            $image0 = base64_encode(file_get_contents(public_path('img/image0.jpg')));
            $image1 = base64_encode(file_get_contents(public_path('img/image1.jpg')));
            $image2= base64_encode(file_get_contents(public_path('img/image2.jpg')));
            $image3= base64_encode(file_get_contents(public_path('img/image3.jpg')));
            $image4= base64_encode(file_get_contents(public_path('img/image4.jpg')));
            $image5= base64_encode(file_get_contents(public_path('img/image5.jpg')));
        
            // Pass data to the view as an array
            $data = [
                'rapport' => $rapport,
                'rapport1' => $rapport1,
                'users' => $users,
                'image' => $image,
                'image0' => $image0,
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3,
                'image4' => $image4,
                'image5' => $image5,
                

            ];
        
            // generate the PDF file from a Blade template
            $html = view('auth.user.rapport.print', compact('data'))->render();
        
            // instantiate Dompdf class
            $dompdf = new Dompdf();
        
            // load HTML content into Dompdf
            $dompdf->loadHtml($html, 'UTF-8');
        
            // (Optional) Set paper size and orientation
            $dompdf->setPaper('A4', 'portrait');
        
            // Render the HTML as PDF
            $dompdf->render();
        
            // Output the generated PDF (forced download)
            return $dompdf->stream('report.pdf', ['Attachment' => false]);
        }
        public function telecharger($id, Rapport $Rapport)
        {
            App::setLocale('ar');
        
            $rapport = Rapport::find($id);
            $users = User::where('CD_ETAB', $rapport->CD_ETAB)->get();
            $rapport1 = User::select('NOM_ETABL','CD_ETAB','ll_com','NetabFr')
            ->where('id', $rapport->users_id)
            ->get();
            $imagePath = public_path('img/logo.jpg');
            $image = base64_encode(file_get_contents($imagePath));
            $image = base64_encode(file_get_contents(public_path('img/logo.jpg')));
            $image0 = base64_encode(file_get_contents(public_path('img/image0.jpg')));
            $image1 = base64_encode(file_get_contents(public_path('img/image1.jpg')));
            $image2= base64_encode(file_get_contents(public_path('img/image2.jpg')));
            $image3= base64_encode(file_get_contents(public_path('img/image3.jpg')));
            $image4= base64_encode(file_get_contents(public_path('img/image4.jpg')));
            $image5= base64_encode(file_get_contents(public_path('img/image5.jpg')));
        
            // Pass data to the view as an array
            $data = [
                'rapport' => $rapport,
                'rapport1' => $rapport1,
                'users' => $users,
                'image' => $image,
                'image0' => $image0,
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3,
                'image4' => $image4,
                'image5' => $image5,

            ];
        
            // generate the PDF file from a Blade template
            $html = view('auth.user.rapport.print', compact('data'))->render();
        
            // instantiate Dompdf class
            $dompdf = new Dompdf();
        
            // load HTML content into Dompdf
            $dompdf->loadHtml($html, 'UTF-8');
        
            // (Optional) Set paper size and orientation
            $dompdf->setPaper('A4', 'portrait');
        
            // Render the HTML as PDF
            $dompdf->render();
        
            // Output the generated PDF (forced download)
            $filename = 'report.pdf';
            $dompdf->stream($filename);
            return response($dompdf->output(), 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');        }
 
        // public function telecharger($id, Rapport $Rapport)
        // {
        //     App::setLocale('ar');
        
        //     $rapport = Rapport::find($id);
        //     $users = User::where('CD_ETAB', $rapport->CD_ETAB)->get();
        //     $imagePath = public_path('img/logo.jpg');
        //     $image = base64_encode(file_get_contents($imagePath));
        //     $image = base64_encode(file_get_contents(public_path('img/logo.jpg')));
        //     $image0 = base64_encode(file_get_contents(public_path('img/image0.jpg')));
        //     $image1 = base64_encode(file_get_contents(public_path('img/image1.jpg')));
        //     $image2= base64_encode(file_get_contents(public_path('img/image2.jpg')));
        //     $image3= base64_encode(file_get_contents(public_path('img/image3.jpg')));
        //     $image4= base64_encode(file_get_contents(public_path('img/image4.jpg')));
        //     $image5= base64_encode(file_get_contents(public_path('img/image5.jpg')));
        
        //     // Pass data to the view as an array
        //     $data = [
        //         'rapport' => $rapport,
        //         'users' => $users,
        //         'image' => $image,
        //         'image0' => $image0,
        //         'image1' => $image1,
        //         'image2' => $image2,
        //         'image3' => $image3,
        //         'image4' => $image4,
        //         'image5' => $image5,

        //     ];
        
        //     // generate the PDF file from a Blade template
        //     $html = view('auth.admin.rapport.print', compact('data'))->render();
        
        //     // instantiate Dompdf class
        //     $dompdf = new Dompdf();
        
        //     // load HTML content into Dompdf
        //     $dompdf->loadHtml($html, 'UTF-8');
        
        //     // (Optional) Set paper size and orientation
        //     $dompdf->setPaper('A4', 'portrait');
        
        //     // Render the HTML as PDF
        //     $dompdf->render();
        
        //     // Output the generated PDF (forced download)
        //     $filename = 'report.pdf';
        //     $dompdf->stream($filename);
        //     return response($dompdf->output(), 200)
        //         ->header('Content-Type', 'application/pdf')
        //         ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');        }
  /* public function print($id,Rapport $rapport)
{
    
    $pdf = new TCPDF();
$pdf->AddPage();

// Define the table structure
$header = array('Column 1', 'Column 2', 'Column 3');
$data = array(
    array('Row 1, Cell 1', 'Row 1, Cell 2', 'Row 1, Cell 3'),
    array('Row 2, Cell 1', 'Row 2, Cell 2', 'Row 2, Cell 3'),
    array('Row 3, Cell 1', 'Row 3, Cell 2', 'Row 3, Cell 3'),
);

// Set table header font
$pdf->SetFont('helvetica', 'B', 12);

// Output table header
$pdf->Cell(50, 10, $header[0], 1);
$pdf->Cell(50, 10, $header[1], 1);
$pdf->Cell(50, 10, $header[2], 1);

// Set table data font
$pdf->SetFont('helvetica', '', 10);

// Output table data
foreach ($data as $row) {
    $pdf->Ln();
    $pdf->Cell(50, 10, $row[0], 1);
    $pdf->Cell(50, 10, $row[1], 1);
    $pdf->Cell(50, 10, $row[2], 1);
}

// Output the PDF
$pdf->Output('example.pdf', 'I');
}
*/

        public function create()
        {
            //REDIRECT TO CREATE PAGE OF 
            return view('auth.admin.rapport');
        }
        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'typeClass' => 'required',
            'absenceFirstPrimaire' => 'nullable|integer',
            'totalFirstPrimaire' => 'nullable|integer',
            'absenceSecondPrimaire' => 'nullable|integer',
            'totalSecondPrimaire' => 'nullable|integer',
            'absenceThirdPrimaire' => 'nullable|integer',
            'totalThirdPrimaire' => 'nullable|integer',
            'absenceFourthPrimaire' => 'nullable|integer',
            'totalFourthPrimaire' => 'nullable|integer',
            'absenceFifthPrimaire' => 'nullable|integer',
            'totalFifthPrimaire' => 'nullable|integer',
            'absenceSixthPrimaire' => 'nullable|integer',
            'totalSixthPrimaire' => 'nullable|integer',
            'absenceFirstCollege' => 'nullable|integer',
            'totalFirstCollege' => 'nullable|integer',
            'absenceSecondCollege' => 'nullable|integer',
            'totalSecondCollege' => 'nullable|integer',
            'absenceThirdCollege' => 'nullable|integer',
            'totalThirdCollege' => 'nullable|integer',
            'absenceFirstLycee' => 'nullable|integer',
            'totalFirstLycee' => 'nullable|integer',
            'absenceSecondLycee' => 'nullable|integer',
            'totalSecondLycee' => 'nullable|integer',
            'absenceThirdLycee' => 'nullable|integer',
            'totalThirdLycee' => 'nullable|integer',
            'absenceFirstComptabiliteGeneral' => 'nullable|integer',
            'totalFirstComptabiliteGeneral' => 'nullable|integer',
            'absenceSecondComptabiliteGeneral' => 'nullable|integer',
            'totalSecondComptabiliteGeneral' => 'nullable|integer',
            'absenceFirstManagementCommercial' => 'nullable|integer',
            'totalFirstManagementCommercial' => 'nullable|integer',
            'absenceSecondManagementCommercial' => 'nullable|integer',
            'totalSecondManagementCommercial' => 'nullable|integer',
            'nbEmployee' => 'required',
            'nbAbsenceEmployee' => 'required',
            'nbRetardEmployee' => 'required',
            'nbSeanceProgramme' => 'required',
            'nbSeanceEffecuter' => 'required',
            'nbSeanceComponser' => 'required',
           'renionEffectuerConseilAdministratif' => 'nullable',
            'renionEffectuerConseilsDepartementaux' => 'nullable',
            'renionEffectuerConseilsPedagogiqueTa3limi' => 'nullable',
            'renionEffectuerConseilsPedagogiqueTrbaoui' => 'nullable',
            'renionEffectuerConseilDeGestion' => 'nullable',
            'renionEffectuerAutreRenion' => 'nullable',
            'renionEffectuerRien' => 'nullable',
            'activiteEffectuerIntégrée' => 'nullable',
            'activiteEffectuerParallel' => 'nullable',
            'activiteEffectuerRien' => 'nullable',
            'rapportActiviteEffectuer' => 'nullable',
            'rapportVisit' => 'nullable',
            'rapportAccidentScolaire' => 'nullable',
            'different' => 'nullable',
            'classInterieur' => 'nullable',
           'inscritPetitDejeuner' => 'nullable|integer',
            'presentPetitDejeuner' => 'nullable|integer',
            'inscritDejeuner' => 'nullable|integer',
            'presentDejeuner' => 'nullable|integer',
             'inscritDinner' => 'nullable|integer',
            'presentDinner' => 'nullable|integer',
            'RespectProgrammeNutritional' => 'nullable|integer',
            'quality' => 'nullable|integer',
            'quantity' => 'nullable|integer',
            'presentRevision'=> 'nullable|integer',
            ]);
            $user = Auth::user();
            $text = "";
            $CD_ETAB = $user->CD_ETAB;
            $users = User::where('CD_ETAB', $CD_ETAB)->get();
    
            $count = count($users);
            foreach($users as $key => $user) {
                $text .= $user->LL_CYCLE;
                if($key !== $count - 1) {
                    $text .= " + ";
                }
            }
            $user = Auth::user();
            $ipAddress = $_SERVER['REMOTE_ADDR'];
            $mac_address = exec('getmac');
            $ip = Http::get('https://api.ipify.org')->body();
            $macAddress = exec('getmac');
            $macAddress = strtok($macAddress, ' ');
            $admin = new Rapport([
                'users_id' => $user->id,
                'date' => $validatedData['date'],
                'typeClass' =>$validatedData['typeClass'],
                'absenceFirstPrimaire' => $validatedData['absenceFirstPrimaire']?? null,
                'totalFirstPrimaire' => $validatedData['totalFirstPrimaire']?? null,
                'absenceSecondPrimaire' => $validatedData['absenceSecondPrimaire']?? null,
                'totalSecondPrimaire' => $validatedData['totalSecondPrimaire']?? null,
                'absenceThirdPrimaire' => $validatedData['absenceThirdPrimaire']?? null,
                'totalThirdPrimaire' => $validatedData['totalThirdPrimaire']?? null,
                'absenceFourthPrimaire' => $validatedData['absenceFourthPrimaire']?? null,
                'totalFourthPrimaire' => $validatedData['totalFourthPrimaire']?? null,
                'absenceFifthPrimaire' => $validatedData['absenceFifthPrimaire']?? null,
                'totalFifthPrimaire' => $validatedData['totalFifthPrimaire']?? null,
                'absenceSixthPrimaire' => $validatedData['absenceSixthPrimaire']?? null,
                'totalSixthPrimaire' => $validatedData['totalSixthPrimaire']?? null,
                'absenceFirstCollege' => $validatedData['absenceFirstCollege']?? null,
                'totalFirstCollege' => $validatedData['totalFirstCollege']?? null,
                'absenceSecondCollege' => $validatedData['absenceSecondCollege']?? null,
                'totalSecondCollege' => $validatedData['totalSecondCollege']?? null,
                'absenceThirdCollege' => $validatedData['absenceThirdCollege']?? null,
                'totalThirdCollege' => $validatedData['totalThirdCollege']??null,
                'absenceFirstLycee' => $validatedData['absenceFirstLycee']??null,
                'totalFirstLycee' => $validatedData['totalFirstLycee']??null,
                'absenceSecondLycee' => $validatedData['absenceSecondLycee']??null,
                'totalSecondLycee' => $validatedData['totalSecondLycee']??null,
                'absenceThirdLycee' => $validatedData['absenceThirdLycee']??null,
                'totalThirdLycee' => $validatedData['totalThirdLycee']??null,
                'absenceFirstComptabiliteGeneral' => $validatedData['absenceFirstComptabiliteGeneral']??null,
                'totalFirstComptabiliteGeneral' => $validatedData['totalFirstComptabiliteGeneral']??null,
                'absenceSecondComptabiliteGeneral' => $validatedData['absenceSecondComptabiliteGeneral']??null,
                'totalSecondComptabiliteGeneral' => $validatedData['totalSecondComptabiliteGeneral']??null,
                'absenceFirstManagementCommercial' => $validatedData['absenceFirstManagementCommercial']??null,
                'totalFirstManagementCommercial' => $validatedData['totalFirstManagementCommercial']??null,
                'absenceSecondManagementCommercial' => $validatedData['absenceSecondManagementCommercial']??null,
                'totalSecondManagementCommercial' => $validatedData['totalSecondManagementCommercial']??null, 
                'nbEmployee' => $validatedData['nbEmployee'],
                'nbAbsenceEmployee' => $validatedData['nbAbsenceEmployee'],
                'nbRetardEmployee' => $validatedData['nbRetardEmployee'],
                'nbSeanceProgramme' => $validatedData['nbSeanceProgramme'],
                'nbSeanceEffecuter' => $validatedData['nbSeanceEffecuter'],
                'nbSeanceComponser' => $validatedData['nbSeanceComponser'],
                'renionEffectuerConseilAdministratif' => $validatedData['renionEffectuerConseilAdministratif']??'non',
                'renionEffectuerConseilsDepartementaux' =>$validatedData['renionEffectuerConseilsDepartementaux']??'non',
                'renionEffectuerConseilsPedagogiqueTa3limi' =>$validatedData['renionEffectuerConseilsPedagogiqueTa3limi']??'non',
                'renionEffectuerConseilsPedagogiqueTrbaoui' =>$validatedData['renionEffectuerConseilsPedagogiqueTrbaoui']??'non',
                'renionEffectuerConseilDeGestion' =>$validatedData['renionEffectuerConseilDeGestion']??'non',
                'renionEffectuerAutreRenion' =>$validatedData['renionEffectuerAutreRenion']??'non',
                'renionEffectuerRien' =>$validatedData['renionEffectuerRien']??'non',
                'activiteEffectuerIntégrée' =>$validatedData['activiteEffectuerIntégrée']??'non',
                'activiteEffectuerParallel' =>$validatedData['activiteEffectuerParallel']??'non',
                'activiteEffectuerRien' =>$validatedData['activiteEffectuerRien']??'non',
                'rapportActiviteEffectuer' =>isset($validatedData['rapportActiviteEffectuer']) ? $validatedData['rapportActiviteEffectuer'] : 'rien',
                'rapportVisit' =>isset($validatedData['rapportVisit']) ? $validatedData['rapportVisit'] : 'rien',
                'rapportAccidentScolaire' =>isset($validatedData['rapportAccidentScolaire']) ? $validatedData['rapportAccidentScolaire'] : 'rien',
                'different' =>isset($validatedData['different']) ? $validatedData['different'] : 'rien',
                'classInterieur' =>isset($validatedData['classInterieur']) ? $validatedData['classInterieur'] : 'non',
                 'inscritPetitDejeuner' => $validatedData['inscritPetitDejeuner'],
                'presentPetitDejeuner'=> $validatedData['presentPetitDejeuner'],
                'inscritDejeuner' => $validatedData['inscritDejeuner'],
                'presentDejeuner' => $validatedData['presentDejeuner'],
                'inscritDinner' => $validatedData['inscritDinner'],
                'presentDinner' => $validatedData['presentDinner'],
                'RespectProgrammeNutritional' => $validatedData['RespectProgrammeNutritional'] ?? 0,
                'quality' => $validatedData['quality']?? 0,
                'quantity' => $validatedData['quantity'] ?? 0,
                'presentRevision'=> $validatedData['presentRevision'],
                'adressIp'=>$ip,
                'mac_address'=>$macAddress,
                 ]);
            $admin->save();
        return redirect()->route('rapport.index')->with('success', 'Rapport added successfully.')->withErrors($validatedData)
            ->withInput();
    }
    
        
    
    public function show($id,Rapport $rapport)
    {
        $rapport = Rapport::find($id);
        $users = User::where('CD_ETAB', $rapport->CD_ETAB)->get();

        return view('auth.admin.rapport.show', ['rapport' => $rapport, 'users' => $users]);
       }
        
public function edit($id,Rapport $rapport)
        {      
            $rapport= Rapport::find($id);
            $users = User::where('CD_ETAB', $rapport->CD_ETAB)->get();

            return view('auth.admin.rapport.edit', ['rapport' => $rapport, 'users' => $users]);
        }
    
        public function update(Request $request, Rapport $repport)
        {
            //VALIDATION
        $validatedData = Validator::make(request()->all(), [
            'date' => 'required|date',
            'absenceFirstPrimaire' => 'nullable|integer',
            'totalFirstPrimaire' => 'nullable|integer',
            'absenceSecondPrimaire' => 'nullable|integer',
            'totalSecondPrimaire' => 'nullable|integer',
            'absenceThirdPrimaire' => 'nullable|integer',
            'totalThirdPrimaire' => 'nullable|integer',
            'absenceFourthPrimaire' => 'nullable|integer',
            'totalFourthPrimaire' => 'nullable|integer',
            'absenceFifthPrimaire' => 'nullable|integer',
            'totalFifthPrimaire' => 'nullable|integer',
            'absenceSixthPrimaire' => 'nullable|integer',
            'totalSixthPrimaire' => 'nullable|integer',
            'absenceFirstCollege' => 'nullable|integer',
            'totalFirstCollege' => 'nullable|integer',
            'absenceSecondCollege' => 'nullable|integer',
            'totalSecondCollege' => 'nullable|integer',
            'absenceThirdCollege' => 'nullable|integer',
            'totalThirdCollege' => 'nullable|integer',
            'absenceFirstLycee' => 'nullable|integer',
            'totalFirstLycee' => 'nullable|integer',
            'absenceSecondLycee' => 'nullable|integer',
            'totalSecondLycee' => 'nullable|integer',
            'absenceThirdLycee' => 'nullable|integer',
            'totalThirdLycee' => 'nullable|integer',
            'absenceFirstComptabiliteGeneral' => 'nullable|integer',
            'totalFirstComptabiliteGeneral' => 'nullable|integer',
            'absenceSecondComptabiliteGeneral' => 'nullable|integer',
            'totalSecondComptabiliteGeneral' => 'nullable|integer',
            'absenceFirstManagementCommercial' => 'nullable|integer',
            'totalFirstManagementCommercial' => 'nullable|integer',
            'absenceSecondManagementCommercial' => 'nullable|integer',
            'totalSecondManagementCommercial' => 'nullable|integer',
            'nbEmployee' => 'required',
            'nbAbsenceEmployee' => 'required',
            'nbRetardEmployee' => 'required',
            'nbSeanceProgramme' => 'required',
            'nbSeanceEffecuter' => 'required',
            'nbSeanceComponser' => 'required',
           'renionEffectuerConseilAdministratif' => 'nullable',
            'renionEffectuerConseilsDepartementaux' => 'nullable',
            'renionEffectuerConseilsPedagogiqueTa3limi' => 'nullable',
            'renionEffectuerConseilsPedagogiqueTrbaoui' => 'nullable',
            'renionEffectuerConseilDeGestion' => 'nullable',
            'renionEffectuerAutreRenion' => 'nullable',
            'renionEffectuerRien' => 'nullable',
            'activiteEffectuerIntégrée' => 'nullable',
            'activiteEffectuerParallel' => 'nullable',
            'activiteEffectuerRien' => 'nullable',
            'rapportActiviteEffectuer' => 'nullable',
            'rapportVisit' => 'nullable',
            'rapportAccidentScolaire' => 'nullable',
            'different' => 'nullable',
            'classInterieur' => 'nullable',
           'inscritPetitDejeuner' => 'nullable|integer',
            'presentPetitDejeuner' => 'nullable|integer',
            'inscritDejeuner' => 'nullable|integer',
            'presentDejeuner' => 'nullable|integer',
             'inscritDinner' => 'nullable|integer',
            'presentDinner' => 'nullable|integer',
            'RespectProgrammeNutritional' => 'nullable|integer',
            'quality' => 'nullable|integer',
            'quantity' => 'nullable|integer',
            'presentRevision'=> 'nullable|integer',       
        ]);

        if ($validatedData->fails()) {
            return back()
                ->withErrors($validatedData)
                ->withInput();
        }
        $user = Auth::user();
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $mac_address = exec('getmac');
        $ip = Http::get('https://api.ipify.org')->body();
        $macAddress = exec('getmac');
        $macAddress = strtok($macAddress, ' ');
        $repport->update([
            'date' => $request->date,
            'absenceFirstPrimaire' => $request->absenceFirstPrimaire,
            'nbSeanceProgramme' => $request->nbSeanceProgramme,
            'totalFirstPrimaire' => $request->totalFirstPrimaire,
            'nbRetardEmployee' => $request->nbRetardEmployee,
            'absenceSecondPrimaire' => $request->absenceSecondPrimaire,
            'totalSecondPrimaire' => $request->totalSecondPrimaire,
            'absenceThirdPrimaire' => $request->absenceThirdPrimaire,
            'totalThirdPrimaire' => $request->totalThirdPrimaire,
            'absenceFourthPrimaire' => $request->absenceFourthPrimaire,
            'totalFourthPrimaire' => $request->totalFourthPrimaire,
            'absenceFifthPrimaire' => $request->absenceFifthPrimaire,
            'totalFifthPrimaire' => $request->totalFifthPrimaire,
            'absenceSixthPrimaire' => $request->absenceSixthPrimaire,
            'totalSixthPrimaire' => $request->totalSixthPrimaire,
            'absenceFirstCollege' => $request->absenceFirstCollege,
            'totalFirstCollege' => $request->totalFirstCollege,
            'absenceSecondCollege' => $request->absenceSecondCollege,
            'totalSecondCollege' => $request->totalSecondCollege,
            'absenceThirdCollege' => $request->absenceThirdCollege,
            'totalThirdCollege' => $request->totalThirdCollege,
            'absenceFirstLycee' => $request->absenceFirstLycee,
            'totalFirstLycee' => $request->totalFirstLycee,
            'absenceSecondLycee' => $request->absenceSecondLycee,
            'totalSecondLycee' => $request->totalSecondLycee,
            'absenceThirdLycee' => $request->absenceThirdLycee,
            'totalThirdLycee' => $request->totalThirdLycee,
            'absenceFirstComptabiliteGeneral' => $request->absenceFirstComptabiliteGeneral,
            'totalFirstComptabiliteGeneral' => $request->totalFirstComptabiliteGeneral,
            'absenceSecondComptabiliteGeneral' => $request->absenceSecondComptabiliteGeneral,
            'totalSecondComptabiliteGeneral' => $request->totalSecondComptabiliteGeneral,
            'absenceFirstManagementCommercial' => $request->absenceFirstManagementCommercial,
            'totalFirstManagementCommercial' => $request->totalFirstManagementCommercial,
            'absenceSecondManagementCommercial' => $request->absenceSecondManagementCommercial,
            'totalSecondManagementCommercial' => $request->totalSecondManagementCommercial,
            'nbEmployee' => $request->nbEmployee,
            'nbAbsenceEmployee' => $request->nbAbsenceEmployee,
            'nbSeanceEffecuter' => $request->nbSeanceEffecuter,
            'nbSeanceComponser' => $request->nbSeanceComponser,
            'renionEffectuerConseilAdministratif' => $request->renionEffectuerConseilAdministratif,
            'renionEffectuerConseilsDepartementaux' => $request->renionEffectuerConseilsDepartementaux,
            'renionEffectuerConseilsPedagogiqueTa3limi' => $request->renionEffectuerConseilsPedagogiqueTa3limi,
            'renionEffectuerConseilsPedagogiqueTrbaoui' => $request->renionEffectuerConseilsPedagogiqueTrbaoui,
            'renionEffectuerConseilDeGestion' => $request->renionEffectuerConseilDeGestion,
            'renionEffectuerAutreRenion' => $request->renionEffectuerAutreRenion,
            'renionEffectuerRien' => $request->renionEffectuerRien,
            'activiteEffectuerIntégrée' => $request->activiteEffectuerIntégrée,
            'activiteEffectuerParallel' => $request->activiteEffectuerParallel,
            'activiteEffectuerRien' => $request->activiteEffectuerRien,
            'rapportActiviteEffectuer' => $request->rapportActiviteEffectuer,
            'rapportVisit' => $request->rapportVisit,
            'rapportAccidentScolaire' => $request->rapportAccidentScolaire,
            'different' => $request->different,
            'classInterieur' => $request->classInterieur,
            'inscritPetitDejeuner' => $request->inscritPetitDejeuner,
            'presentPetitDejeuner' => $request->presentPetitDejeuner,
            'inscritDejeuner' => $request->inscritDejeuner,
            'presentDejeuner' => $request->presentDejeuner,
            'inscritDinner' => $request->inscritDinner,
            'presentDinner' => $request->presentDinner,
            'RespectProgrammeNutritional' => $request->RespectProgrammeNutritional,
            'quality' => $request->quality,
            'quantity' => $request->quantity,
            'presentRevision' => $request->presentRevision,
            'adressIp' => $ip,
            'mac_address' => $macAddress,

                    ]);
        return redirect('/admin/repports')->with([
            'type' => 'success',
            'message' => 'Rapport N'.$repport->id.'  modifié avec succès',
        ]);
    }
    
        public function destroy(Rapport $repport)
        {
            $repport->delete();
    
            return redirect('/admin/repports')->with([
                'type' => 'success',
                'message' => 'repport supprimé avec succès',
            ]);
        }
    }