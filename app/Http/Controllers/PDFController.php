<?php

namespace App\Http\Controllers;

use App\Models\Internships;
use Illuminate\Http\Request;
use TCPDF;

class PDFController extends Controller
{
    public function create_generateLetterPDF()
    {
        // $Internships = Internships::all();

        // return view('generate-letter-pdf', compact('internships'));
    }
    public function generateLetterPDF(Request $request)
    {
          $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            
            'programme' => 'required',

            
            'level' => 'required',
            'contact' => 'required',
             'title' => 'required',

            'department' => 'required',

              'type' => 'required',
        ]);


          $formFields['user_id'] = auth()->id();






        $data = $request->only(['firstname', 'lastname', 'programme', 'level', 'contact', 'title', 'department', 'type']);

        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('times', '', 12);
            

        // Define the path to your image
        $imagePath = public_path('images/gctu.png');

         // Insert the image into PDF
        $pdf->Image($imagePath, 10, 10, 40, 0, 'PNG', '', 'T', false, 300, '', false, false, 0);

        

        // Generate the PDF content using the data

        $pdfContent = " <b>GHANA COMMUNICATION TECHNOLOGY UNIVERSITY</b><br><br>
        <img src='{$imagePath}' width='200' height='100'><br><br>
        To Whom It May Concern,<br><br>
        Dear Sir/Madam,<br><br>
        <u><b>REQUEST FOR ATTACHMENT</b></u><br><br>
            We write to introduce <b>{$data['firstname']}</b> <b>{$data['lastname']}</b>, a level <b>{$data['level']}</b> student
           pursuing a
                        <b>{$data['programme']}</b> in the Department of <b>{$data['department']}</b> at Ghana Communication
                        Technology University (GCTU).<br><br>

                    As part of the requirements for the award of the <b>{$data['type']}</b>, students are encouraged to undertake an
                        attachment during vacations with well-established organizations either in or outside the country
                        for a period of two to three months.
                        <br><br>
                        
                        This department attachment program is to enable students to gain professional work experience,
                        develop and refine new skills, and serve as a bridge between academia and industry in developing
                        programs to meet the needs and demands of the industry. <br><br>
                        
                        It would be much appreciated if <b>{$data['title']} {$data['lastname']}</b> is offered the opportunity to do his attachment with
                        your organization. You may contact <b>{$data['lastname']}</b> on <b>{$data['contact']}.</b><br><br>
                        
                        For further
                        information, kindly contact the Department of Information Technology.

                        bboadu@getu.edu.gh<br><br>

                        Sincerely,<br><br><br><br>
                        

                    Dr. William Brown- Acquaye<br>

                        HOD,<br>

                        Department of <b>{$data['department']}</b>.
                    </p>


        ";

    
        $pdf->writeHTML($pdfContent, true, false, true, false, '');

        // Output the PDF
        $pdf->Output('internship_letter.pdf', 'D'); // 'D' to force download

        // Note: You might need to adjust the PDF generation code based on your specific use case.
    }
}
