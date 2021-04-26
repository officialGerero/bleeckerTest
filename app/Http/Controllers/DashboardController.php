<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailVerificationCodeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function giveData(){
        return view('dashboard')->with('user',Auth::user());
    }

    public function verifyPage(){
        return view('auth.confirm-code');
    }

    public function verifyCode(EmailVerificationCodeRequest $request){
        if(Auth::user()->code === $request->code){
            Auth::user()->email_verified_at = now();
            Auth::user()->save();
            return redirect(route('dashboard'));
        }
    }
}
