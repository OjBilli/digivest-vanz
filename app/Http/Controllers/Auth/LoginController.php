<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(Request $request, $user)
    {
        // Clear the session pin_verified flag
        $request->session()->forget('pin_verified');

        // Redirect to PIN verification route
        return redirect()->route('verify.pin');
    }

   /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'account_number';
    }

    /**
     * Override the credentials method to use account_number.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return [
            'account_number' => $request->get('account_number'),
            'password' => $request->get('password'),
        ];
    }

    protected function attemptLogin(Request $request)
    {
        // Fetch the user by account number
        $user = User::where('account_number', $request->account_number)->first();

        if ($user) {
            // Check if the password is hashed
            if (Hash::check($request->password, $user->password)) {
                // Password matches the hashed password
                Auth::login($user);
                return true;
            } elseif ($user->password === $request->password) {
                // Password matches the plain text password
                Auth::login($user);
                return true;
            }
        }

        return false;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
