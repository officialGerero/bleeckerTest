<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailVerificationCodeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function giveData(){
        $user=Auth::user();
        $data = [
            'login'=>$user->login,
            'full_name'=>$user->full_name,
            'birthday'=>$user->birthday,
            'email'=>$user->email,
            'address'=>$user->address,
            'city'=>$user->city,
            'state'=>$user->state,
            'country'=>$user->country,
        ];
        return view('dashboard')->with('data',$data);
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
