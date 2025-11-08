<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('auth.register', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pin()
    {
        return view('auth.pin');
    }
    public function verifyPin(Request $request)
    {
        $request->validate([
            'pin' => 'required|numeric',
        ]);
        if ($request->pin == Auth::user()->pin) {
            // Set session flag indicating the PIN has been verified
            $request->session()->put('pin_verified', true);

            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }

        // Check if the provided PIN matches the default PIN
        // if ($request->pin == Auth::user()->pin) {
        //     // Set session flag indicating the PIN has been verified
        //     $request->session()->put('pin_verified', true);

        //     return redirect()->route('user.dashboard');
        // }elseif ($request->pin == Auth::user()->pin && Auth::user()->role == 'admin'){
        //     $request->session()->put('pin_verified', true);
        //     return redirect()->route('admin.dashboard');
        // }

        return redirect()->route('verify.pin')->withErrors(['pin' => 'The provided PIN is incorrect.']);
    }
}
