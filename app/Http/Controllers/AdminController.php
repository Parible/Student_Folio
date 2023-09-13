<?php

namespace App\Http\Controllers;

use Svg\Tag\Rect;
use App\Models\User;
use App\Models\Admin;
use App\Models\Adminpdf;
use App\Models\Transcripts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function create_admin_table(Request $request)
    { 
      
        // Filters the search
        $filters = $request->only('search');
        $transcripts = Transcripts::filter($filters)->get();

        // Counts the number of users
        $userCount = User::count();

        // Counts the number of requests
        $requestCount = $transcripts->count();

        $adminCount = Admin::count();
         

        return view('components.admin.table', compact('transcripts', 'userCount', 'requestCount', 'adminCount'));
    }

public function store_admin_table(Request $request)
{
    $formFields = $request->validate([
        'pdf' => 'required',
    ]);

    $user = auth()->user();

    $filePath = $request->file('pdf')->store('StudentTranscriptData', 'public');

    $formFields['pdf'] = $filePath;
    $formFields['user_id'] = $user->id; // Associate user with the request

    Adminpdf::create($formFields);

    return redirect('/admin/transcripts');
}


    /// Reviwed
    public function create_adminReviewed_table(Request $request)
    {
        // Filters the search
        $filters = $request->only('search');
        $transcripts = Transcripts::filter($filters)->get();

        // Counts the number of users
        $userCount = User::count();

        // Counts the number of requests
        $requestCount = $transcripts->count();

        $signupCount = User::count();

        return view('components.admin.reviewed', compact('transcripts', 'userCount', 'requestCount'));
    }

    // show Admin Register
    public function create_admin_register()
    {
        return view('components.admin.adminRegister');
    }

    public function store_admin_register(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // hash password

        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $admin = Admin::create($formFields);

        // Login
        auth()->login($admin);

        return redirect('/admin')->with('message', 'Welcome');
    }

    public function create_admin_login()
    {
        return view('components.admin.adminLogin');
    }

    public function store_admin_login(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/admin')->with('message', 'Welcome Back');
        }

        return back()
            ->withErrors(['email' => 'Invalid Credentials'])
            ->onlyInput('email');
    }

    // public function create_logout()
    // {
    //     return view('/admin');
    // }
    public function store_logout(Request $request)
    {
        auth()->logout();

        // $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('message', 'Logged out sucessfully');
    }

    //admin Homepage
    public function create_adminMain_table()
    {
        return view('components.admin.adminResit.adminHomepage');
    }

    

    // DELETE FORM
    public function destroy(Request $request)
    {
          $userId = $request->user_id; // Assuming you have a field named 'user_id' in the request
          Transcripts::where('user_id', $userId)->delete();
          
         
       

        return back()->with('message', 'form deleted sucessfully');
    }
}
