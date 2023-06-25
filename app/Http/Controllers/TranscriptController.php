<?php

namespace App\Http\Controllers;

use App\Models\Transcripts;
use Illuminate\Http\Request;

class TranscriptController extends Controller
{
    // creates the data
    public function create(){
        return view('components.transcripts.page-1');
    }

    //store the data
    public function store(Request $request){
       $formFields= $request->validate([
        'firstname'=>'required'
       ]);

       Transcripts::create($formFields);
       return redirect('/page-4')->with('message', 'Verify your info!');
    }

}
