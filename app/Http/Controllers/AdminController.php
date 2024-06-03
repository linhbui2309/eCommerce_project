<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Registration;
use App\Http\Controllers\Rules\Password;

class AdminController extends Controller
{
    public function show(){
        return view('frontend.pages.admin-page.dashboard');
    }
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
            'name' => ['required','string','max:255'],
            'email' => ['required','string','lowercase','email','max:255','unique:'.User::class],
            'password' => ['required','confirmed'],
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
            'name' => $request->name,
            'last_name' => $request->last_name ?? 'default_lastname',
            'email' => $request->email,
            'password' => $request->password,
            'description' => 'default description',
            'phone_numbers' => $request->phone_numbers,
            'occupation' => $request->occupation ?? 'default_occupation',
            'avatar' => $path.$filename,
            
        ]);
        return redirect()->back()->with('status','Avatar updated');
    }



    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, int $id)
{
    // Find the user by ID
    $user = User::find($id);

    // Validate the request
    // $validatedData = $request->validated();

    $request->validate([
        'last_name' => ['nullable', 'string', 'max:255'],
        'occupation' => ['nullable', 'string', 'max:255'],
        'description' => ['nullable', 'string', 'max:255'],
        // Add validation rules for other fields as needed
    ]);

   

    // Handle avatar upload
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = 'public/Image/';
        $file->move($path, $filename);
        $validatedData['avatar'] = $path . $filename;
    }

    // Update the user with validated data
    // $user->update($validatedData);
    $user->update([
        'last_name' => $request->input('last_name', $user->last_name), // Use the new last name if provided, otherwise keep the current one
        'occupation' => $request->input('occupation', $user->occupation), // Use the new occupation if provided, otherwise keep the current one
        'description' => $request->input('description', $user->description), // Use the new occupation if provided, otherwise keep the current one
        // Update other fields similarly
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('status', 'Profile updated successfully');
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

    
    public function approveRegistration(Request $request, $userId)
    {
    $user= Registration::findOrFail($userId);
    
    // Update user status to approved
    $user->status = 'approved';
    $user->save(); 


    // Optionally, you can send an email notification to the user here

    return redirect()->back()->with('success', 'User registration approved successfully.');
    }


    
    public function rejectRegistration($userId)
{
    $registration = Registration::findOrFail($userId);
    $registration->delete();

    return redirect()->back()->with('success', 'Registration rejected and deleted.');
}

}
