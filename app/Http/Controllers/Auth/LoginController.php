<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


     protected $redirectTo = RouteServiceProvider::HOME;

     public function redirectTo(){
         switch (Auth::user()->role) {
             case 'panitia':
                 $this->redirectTo = '/admin';
                 return $this->redirectTo;
                 break;
             case 'team':
                 $this->redirectTo ='/team/home';
                 return $this->redirectTo;
                 break;
             default:
                 $this->redirectTo ='/login';
                 return $this->redirectTo;
                 break;
         }
     }

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function username(){
        return 'username';
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username()=>'required|string',
            'password'=>'required|string'
        ]);
    }

    


}
