<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function usersignup(Request $request){
        $request->validate([
            'name' => 'required|min:2|max:32|regex:/^[a-zA-Z .]+$/',
            'email' => 'required|email:rfc,dns|max:64|unique:users,email',
            'mobile' => 'required|digits:10',
            'new_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirm_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(), 'same:new_password'],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'status' => null,
            'password' => Hash::make($request->new_password),
        ]);
        return back()->withSuccess('Registered successfully...');
    }
    public function adminsignup(Request $request){
        $request->validate([
            'name' => 'required|min:2|max:32|regex:/^[a-zA-Z .]+$/',
            'email' => 'required|email:rfc,dns|max:64|unique:users,email',
            'mobile' => 'required|digits:10',
            'new_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirm_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(), 'same:new_password'],
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'status' => null,
            'password' => Hash::make($request->new_password)
        ]);
        return back()->withSuccess('Registered successfully...'); 
    }
    
    public function adminsignin(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::guard('admin')->attempt($credentials))
        {
            $request->session()->regenerate();
            // dd(Auth::guard('admin')->check());
            return redirect('admin/dashboard')->withSuccess('logged in successfully...');
        }
        return back()->withErrors('Invalid Username or Password...');
    }
    
    public function usersignin(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('user/home')->withSuccess('logged in successfully...');
        }
        return back()->withErrors('Invalid Username or Password...');
    }
    public function usersignout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('usersignin')->withSuccess('You have logged out successfully!');;
    }
    public function adminsignout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('adminsignin')->withSuccess('You have logged out successfully!');;
    }
}