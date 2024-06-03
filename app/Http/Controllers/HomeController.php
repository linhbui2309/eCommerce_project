<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Store;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        $stores = Store::all();
     
        $registration = Registration::where('user_id', Auth::id())->first();
        

        return view('frontend.index', compact('blogs', 'stores', 'registration'));
    
       
    }

    public function storeRegister($id){
        $store = Store::find($id);
        return view('frontend.partial.customer-register-form', compact('store'));
    }

 

    public function processRegistration(Request $request, $id)
    {
        // $id contains the store ID from the route parameter

        // Validate the incoming request data if needed

        // Create a new Registration instance
        $registration = new Registration();
        $registration->name = $request->input('name');
        $registration->email = Auth::user()->email;
        $registration->status = 'pending'; 
        $registration->user_id = Auth::user()->id; 
        $registration->store_id = $id;
        $registration->pending_role = $request->input('role');// Assign the store ID from the route

        // Save the registration data
        $registration->save();
        return redirect()->back()->with('status','Registration successfully');

        // Redirect or return a response
    }

    
}

    

