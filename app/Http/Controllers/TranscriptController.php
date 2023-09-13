<?php

namespace App\Http\Controllers;

use App\Models\Adminpdf;
use App\Models\Transcripts;

use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Auth;

class TranscriptController extends Controller
{
    public function index()
    {
        
        return view('pages.homepage'); 
    }

    
 // PAGE 1
public function create_transcript(Transcripts $transcripts)
{
    
    // $transcripts = Transcripts::find($id); 
    

   $user = auth()->user();
  $transcripts = $user->transcripts; 

    return view('components.transcripts.page-1', ['transcripts' => $transcripts]);

}



public function store_transcript(Request $request)
{
    
    $formFields = $request->validate([
        'firstname' => 'required|string|min:3|max:50',
        'lastname' => 'required|string|min:3|max:50',
             
        'programme' => 'required',
            
        
        'level' => 'required',


        'session' => 'required',

        'sid' => 'required|numeric|min:10|digits_between:10,10',
        'dob' => 'required|date',   
        'campus' => 'required',
        'contact' => 'required|numeric|min:10',
        'image' => 'required|image', 


        'request_type' => 'required|min:1',
        'request_type.*' => 'in:loa,tr,trac,te,teac,vl,auth_of_cert,loi,loi_so,epl',


        'transaction_id'=> 'required|numeric|min:16',
    ]);

    
       
    $formFields['request_type'] = implode(',', $formFields['request_type']);

          $formFields['user_id'] = auth()->id();
       





          
    // Upload the image to the 'uploads' directory
    $imagePath = $request->file('image')->store('uploads', 'public');

    
    // Store the image path and form fields in the session
    $request->session()->put('page_data', array_merge($formFields, ['image' => $imagePath]));

        $pageData = $request->session()->get('page_data');


        
// Merge the data from all pages
    $formFields = array_merge($pageData);



   

$request->session()->put('page_data', $formFields);

   Transcripts::create($formFields);

     $formFields = $request->session()->forget('page_data');



    return redirect('/track')->with('message','form submitted sucessfully');
}











     // show track page
     public function create_track()
     {   
        // dd(request());
          $user = auth()->user();
        
   $adminpdfs = Adminpdf::where('user_id', $user->id)->get();
    

   
     $transcripts = Transcripts::where('user_id', $user->id)->get();
    

    
        return view('pages.track',compact('adminpdfs' , 'transcripts'));
     }

       public function store_track()
       {
        return redirect('/admin/transcripts');
       }  




             

















// PAGE 4
public function create_page_4()
{
    $user = auth()->user();
    $transcripts = $user->transcripts;
     
    return view('components.transcripts.page-4', ['transcripts' => $transcripts]);
}

public function store_page_4(Request $request)
{ 
   


//  Transcripts::create($transcript);
    return redirect('/track')->with('message', 'Form submitted successfully for review');
}


// USER PAGES END


  











































// EDIT FORM BEGINS

public function create_edit_page_1(Transcripts $transcripts)
{
    // dd($transcript);
      
    $user = auth()->user();
    $transcripts = $user->transcripts;
    
     return view('components.transcripts.edit.edit_page_1', ['transcripts' => $transcripts]);


}
public function store_edit_page_1(Request $request, Transcripts $transcripts)
{
     $formFields = $request->validate([
        'firstname' => 'required|string|min:3|max:50',
        'lastname' => 'required|string|min:3|max:50',    
        'programme' => 'required',
        'level' => 'required',
        'session' => 'required',
        'sid' => 'required|numeric|min:10|digits_between:10,10',
        'dob' => 'required|date',   
        'campus' => 'required',
        'contact' => 'required|numeric|min:10',
        'image' => 'required|image', 
        'request_type' => 'required|min:1',
        'request_type.*' => 'in:loa,tr,trac,te,teac,vl,auth_of_cert,loi,loi_so,epl',
        'transaction_id'=> 'required|numeric|min:16',
    ]);

    
        
    $formFields['request_type'] = implode(',', $formFields['request_type']);

          $formFields['user_id'] = auth()->id();
       
       
    // Upload the image to the 'uploads' directory
    $imagePath = $request->file('image')->store('uploads', 'public');

    
    // Store the image path and form fields in the session
    $request->session()->put('page_data', array_merge($formFields, ['image' => $imagePath]));

        $pageData = $request->session()->get('page_data');


        
// Merge the data from all pages
    $formFields = array_merge($pageData);




$request->session()->put('page_data', $formFields);

   $transcripts->update($formFields);

     $formFields = $request->session()->forget('page_data');



    return redirect('/track')->with('message','form updated sucessfully');
}








// DELETE FORM
public function destroy(Transcripts $transcripts)
{
    // $user = auth()->user();
    // $transcripts = $user->transcripts;

    $transcripts->delete();
    return redirect('/track')->with('message','form deleted sucessfully');
    
}












// EDIT USER PAGE 2
public function create_edit_page_2()
{
       $transcripts = Transcripts::all();
    
    return view('components.transcripts.edit.edit_page_2', ['transcripts' => $transcripts]);
}

public function store_edit_page_2(Request $request)
{
    $formFields = $request->validate([
        'id_type' => 'required',
        'id_number' => 'required',
        'pdf' => 'required',
        // Add other validation rules
    ]);
 // Upload the image to the 'uploads' directory
    $filePath = $request->file('pdf')->store('BioData', 'public');

    // Store the image path and form fields in the session
    $request->session()->put('edit_page_2_data', array_merge($formFields, ['pdf' => $filePath]));

    // Store the form fields in the session
    // $request->session()->put('page-2-data', $formFields);

    return redirect('/user/edit_page_3/{user}');
}









// EDIT PAGE 3
public function create_edit_page_3()
{
    // Retrieve the latest transcript from the database
    $transcript = Transcripts::latest()->first();

    return view('components.transcripts.edit.edit_page_3', compact( 'transcript'));

}

public function store_edit_page_3(Request $request)
{
    $formFields = $request->validate([
        'request_type' => 'required|min:1',
        'request_type.*' => 'in:loa,tr,trac,te,teac,vl,auth_of_cert,loi,loi_so,epl,ro_id',
    ]);
     $request->session()->put('edit_page_3_data', $formFields);


    return redirect('user/edit_payment');
    //  return redirect('page-4')->with('formFields', $formFields);
}






// Edit & Update Payment Page
public function create_edit_payment(){

      $transcripts = Transcripts::all();

    return view('components.transcripts.edit.edit_payment', compact('transcripts'));  
}

 public function store_edit_payment(Request $request, Transcripts $transcripts){

    $formFields = $request->validate([
        'transaction_id'=> 'required',
        

    ]);
    $request->session()->put('payment_data', $formFields );


    $page1Data = $request->session()->get('edit_page_1_data');
    $page2Data = $request->session()->get('edit_page_2_data');
    $page3Data = $request->session()->get('edit_page_3_data');
    $page4Data = $request->session()->get('payment_data');
    
    $formFields = array_merge($page1Data, $page2Data,$page3Data,$page4Data );
    
    $formFields['request_type'] = implode(',', $formFields['request_type']);

    // Transcripts::create($formFields);
    
   $transcripts->update($formFields);

        return redirect('/track');
    }


    
}

