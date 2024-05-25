<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index(){
        $users = Registration::all();
        return view('frontend.pages.admin-page.registration-approval', compact('users'));
    }



    public function store(Request $request)
    
    {
        
        // Validate the incoming request data
        $request->validate([
            'name' => ['required','string','max:255'],
            
        ]);

       
            
        Registration::create([
            'name' => $request->name,
            'email' => Auth::user()->email,
            'status' => 'pending'
        ]);
        

        // Redirect the user after form submission
        return redirect()->back()->with('status','Form submitted successfully.');

       
        
        }
      

}

