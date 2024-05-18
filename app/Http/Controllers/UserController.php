<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
        
        return view('frontend.profile.main-profile');
    }
    

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('frontend.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'avatar' => 'nullable|mimes:png,jpg,jpeg,webp',
            
        ]);
        if($request->file('avatar')){
            $file=$request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $path = 'public/Image/';
            $file->move($path,$filename);

        }

        User::create([
            'image' => $path.$filename,
            
        ]);
        return redirect()->back()->with('status','Avatar updated');
    }



    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, int $id)
    {
        $users = User::find($id);
        $request->validate([
            'avatar' => 'nullable|mimes:png,jpg,jpeg,webp',
            
        ]);
        if($request->file('avatar')){
            $file=$request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $path = 'public/Image/';
            $file->move($path,$filename);

        }

        User::find($id)->update([
            'avatar' => $path.$filename,
            
        ]);
        $users->name = $request->input('name');
        $users->last_name = $request->input('last_name');
        $users->email = $request->input('email');
        $users->description = $request->input('description');
        $users->occupation = $request->input('occupation');
        $users->update();
        return redirect()->back()->with('status','Profile updated');
        // $request->user()->all($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

      


       

        // return Redirect::route('frontend.profile.edit')->with('status', 'user-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
