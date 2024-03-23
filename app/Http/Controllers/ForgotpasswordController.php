<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ForgotpasswordController extends Controller
{
    public function adminforgotpassword(Request $request){
        $request->validate([
            'email'=>'required|email:rfc,dns|max:64|exists:admins,email|unique:password_reset_tokens,email',
        ]);
    
        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        
        Mail::send("email.email",['token'=>$token],function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset password");
        });

        return redirect(route('admin.forgotpass'))->with("success","we sent the password reset mail successfully");
    }

    public function adminresetpassword($token){
        return view('admin.resetpassword',compact('token'));
    }

    public function adminupdatepassword(Request $request){
        $request->validate([
            'email' => 'required|email:rfc,dns|max:64|exists:admins,email',
            'new_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols()],
            'confirm_password' => ['required', Password::min(6)->max(18)->mixedCase()->numbers()->symbols(), 'same:new_password'],
        ]);
        
        $updatepassword = DB::table('password_reset_tokens')->where([['email',$request->email],['token',$request->token]])->first();

        if(!$updatepassword){
            return redirect()->to(route('admin.resetpassword'))->with("error","email not valid....");
        }

        Admin::where('email',$request->email)->update(["password"=>Hash::make($request->new_password)]);

        DB::table('password_reset_tokens')->where([['email',$request->email]])->delete();

        return redirect()->to(route('admin.signin'))->with("success","password updated successfully....");
    }
}
