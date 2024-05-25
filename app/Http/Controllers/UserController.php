<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Http\Controllers\Rules\Password;

class UserController extends Controller
{
    public function show(){
        
        return view('frontend.pages.user-page.dashboard');
    }

    public function index(){
        
        return view('frontend.profile.main-profile');
    }
    

    /**
     * Display the user's profile form.
     */
    
}
