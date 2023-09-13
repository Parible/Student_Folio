<?php

namespace App\Http\Controllers;
use TCPDF;

use PDF;

// use Barryvdh\DomPDF\PDF;
use App\Models\Internships;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function create_intern_1()
    {
    //    $internships = Internships::all(); // Retrieve transcripts in descending order

       $user = auth()->user();
       $internships = $user-> internships;

        return view('components.internships.intern-1', ['internships' => $internships]);
    }

    

    public function store_intern_1(Request $request)
    {
        $formFields = $request->validate([
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            
            'programme' => 'required',

            
            'level' => 'required',
            'contact' => 'required|numeric|min:10',
             'title' => 'required',

            'department' => 'required',

              'type' => 'required',
        ]);

        $request->session()->put('intern-1-data', $request->all);

          $formFields['user_id'] = auth()->id();

        // $pdf = PDF::loadView('components.internships.intern-2', $formFields);
        // return $pdf->download('components.internships.intern-2.pdf');
        
        // Internships::create($formFields);
        return redirect('/intern-2');
    }

    





    // Intern Page 2
    public function create_intern_2()
    {
        $internships = Internships::all(); // Retrieve transcripts in descending order

        return view('components.internships.intern-2', ['internships' => $internships]);
    }

    public function store_intern_2(Request $request)
    {
       $formFields = $request->session()->get('intern-1-data');
    // $pdf = PDF::loadView('pdf.components.internships.intern-2', $formFields);
    // return $pdf->download('components.internships.intern-2.pdf');
 
        // Internships::create($formFields);

    
    }

}





