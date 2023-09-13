<?php

namespace App\Http\Controllers;

use App\Models\Resit;
use Illuminate\Http\Request;

class ResitController extends Controller
{
    public function create_resit_page()
    {
        $user = auth()->user();
        $resits = $user->resits;
       
        return view("components.resits.resit-1", compact('resits'));
    }

    public function store_resit_page(Request $request)
    {
        $formFields = $request->validate(
            [
            'firstname' => 'required',
            'lastname' => 'required',
            'programme' => 'required',
            'email' => 'required|email',
            'sid' => 'required',
            'department' => 'required',
            'contact' => 'required',


            'course_code' => 'required',
            'academic_year' => 'required',
            'course_title' => 'required',
            'name_of_lecturer' => 'required',

            'transaction_id' => 'required',

            ]);

           Resit::create($formFields);

           return redirect('/track');
        
    }


    public function adminResit_resit_page()
    {
         $resits= Resit::all();
         
        return view('components.admin.adminResit.resitTable', compact('resits'));
    }
}
