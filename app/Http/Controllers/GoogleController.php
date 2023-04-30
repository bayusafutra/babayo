<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;


class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('googleid', $user->getId())->first();
            if($finduser){
                Auth::login($finduser);
                if(auth()->user()->roleid ==1){
                    return redirect()->intended('/dashboard');
                }else{
                    return redirect()->intended('/');
                }
            }else{
                $exist = User::where('email', $user->getEmail())->first();
                if ($exist) {
                    $save = $user->getId();
                    Auth::login($exist);
                    $rules = [
                        "googleid" => $save
                    ];
                    User::where('id', auth()->user()->id)->update($rules);
                    if(auth()->user()->roleid ==1){
                        return redirect()->intended('/dashboard');
                    }else{
                        return redirect()->intended('/');
                    }
                }else {
                    $admin = User::all();
                    if ($admin->count() == 0) {
                        $newUser = User::create([
                            'name' => $user->getName(),
                            'username' => $user->getNickname(),
                            'email' => $user->getEmail(),
                            'googleid' => $user->getId(),
                            'email_verified_at' => Carbon::now(),
                            'roleid' => 1
                        ]);
                    } else {
                        $newUser = User::create([
                            'name' => $user->getName(),
                            'username' => $user->getNickname(),
                            'email' => $user->getEmail(),
                            'googleid' => $user->getId(),
                            'email_verified_at' => Carbon::now()
                        ]);
                    }
                    Auth::login($newUser);
                    return redirect('/validasi')->with('success', 'Masukkan username dan password untuk validasi pendaftaran akun');
                }
            }
        } catch (\Throwable $th) {
            return back()->with('loginError', 'Silahkan coba lagi untuk masuk ke sistem');
        }
    }
}
