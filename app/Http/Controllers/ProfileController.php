<?php

namespace App\Http\Controllers;
use App\Models\Profile;


use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('frontend.profile.main-profile',compact('profiles'));
    }
    
    
    public function create(){

    }
    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'description' => 'required|string',
            'occupation' => 'required|string',
            'avatar' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);
        
        if($request->file('image')){
            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $path = 'public/Image/';
            $file->move($path,$filename);

        }

        Profile::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'description' => $request->description,
            'occupation' => $request->occupation,
            'avatar' => $path.$filename,
        ]);
        return redirect('profile')->with('status','Profile created');

    }
    public function edit(int $id){
       $profile = Profile::find($id);
        
        return view('frontend.profile.edit', compact('profile'));
    }
    public function update(Request $request, int $id){
        $request->validate([
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            'description' => 'required|string',
            'occupation' => 'required|string',
            'avatar' => 'nullable|mimes:png,jpg,jpeg,webp',
            
        ]);

        if($request->file('avatar')){
            $file=$request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $path = 'public/Image/';
            $file->move($path,$filename);

        }

        Profile::find($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'description' => $request->description,
            'occupation' => $request->occupation,
            'avatar' => $path.$filename,
            
        ]);
        return redirect()->back()->with('status','Profile updated');

    }
    public function destroy(){

    }
    

}
