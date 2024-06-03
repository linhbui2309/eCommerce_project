<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\User;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index(){
        $users = Registration::all();
        return view('frontend.pages.admin-page.registration-approval', compact('users'));
    }



    
      

}

