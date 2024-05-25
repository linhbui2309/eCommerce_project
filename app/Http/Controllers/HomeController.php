<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Store;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        $stores = Store::all();
        return view('frontend.index', compact('blogs','stores'));
    }

    public function storeRegister($id){
        $store = Store::find($id);
        return view('frontend.partial.customer-register-form', compact('store'));
    }
    
}
