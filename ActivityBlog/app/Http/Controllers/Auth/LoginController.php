<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;            // static interfaces for better working with this class
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function authentificate(Request $request)
    {
        // ziskame si udaje prihlavacie z login formu
        $credentials = $request->only('email', 'password');

        // attempt sa pouziva na handlovanie post z form alebo o pokusy o prihlasenie
        if (Auth::attempt($credentials)) {
            // musime prepisat user session
            $request->session()->regenerate();      // ak je prihlasenie uspesne tak prepiseme session aby sme predisli, pripadnemu utoku na sesssion id

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }



}
