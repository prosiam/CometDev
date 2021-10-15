<?php

namespace App\Http\Controllers\Auth;

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
    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        $login_data=request()->input('user_name');
        $cell=substr($login_data,0,2);
        $cell_length=strlen("$login_data");

        if (filter_var($login_data,FILTER_VALIDATE_EMAIL)) {
            $type='email';
        }elseif ($cell=='01' && $cell_length=='11') {
            $type='phone_number';
        }else {
            $type='user_name';
        }

        request()->merge([$type=>$login_data]);
        return $type;
    }
}
