<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Adminpdf;
use App\Models\Transcripts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // show Login page
    public function create_login()
    {
        return view('login');
    }
    
    // store Login 

    public function store_login(Request $request)
    {
         
         $formFields = $request->validate([
            
            'email' => ['required', 'email'],
            'password' => 'required'
               ]);
               
            if(auth()->attempt($formFields))
            {
                $user = Auth::id();
                $request->session()->regenerate();

                //  return redirect('/' . $user)->with('message', 'Welcome Back');
                 return redirect('/')->with('message', 'Welcome Back');
    
            }

            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        
        
    }








    // SHOW REGISTER
    public function create_register(User $user)
    {
        $transcript = Transcripts::where('user_id', $user->id)->first();

        return view('register', compact('transcript'));
    }

// STORE REGISTER
    public function store_register(Request $request)
    {
        $formFields = $request->validate([
           
            'name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
           
        ]);

        // hash password

         $formFields['password'] = bcrypt( $formFields['password']);

         // Create User 
            $user = User::create($formFields);

         // Login       
         auth()->login($user);

         return redirect('/')->with('message', 'Welcome');
    }

        // public function create_logout()
        // {
        //     return view('/');
        // }

        public function store_logout(Request $request)
        {

            auth()->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login')->with('message', 'succesfully logged out of system');
        }



    public function create()
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        abort(404);
    }
}
