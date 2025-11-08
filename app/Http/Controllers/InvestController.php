<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Plan;
use App\Models\User;
use App\Models\Wire;
use App\Models\Invest;
use App\Models\Currency;
use App\Models\Domestic;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Identity;
use Illuminate\Support\Facades\Auth;

class InvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        $wallets = Auth::user()->wallets;
        $currencies = Currency::all();



        return view('user.invest', compact('plans', 'wallets', 'currencies'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'amount' => 'required|numeric|min:1',
            'currency' => 'required'
            ]);
        $plan = Plan::find($request->plan_id);

        if ($request->amount > $plan->maximum || $request->amount < $plan->minimum) {
            return back()->with(['error' => 'Incorrect amount']);
        }

        $user_wallet = Auth::user()->wallets()->where('currency_id', $request->currency)->first();

            if (!$user_wallet) {
                return back()->with(['error' => 'Wallet not found for selected currency.']);
            }

        if ($request->amount > $user_wallet->balance) {
            return back()->with(['error' => 'Insufficient balance']);
        }

        $end = now()->addDays($plan->duration);

        $invest = new Invest();
        $invest->user_id = Auth::user()->id;
        $invest->plan_id = $request->plan_id;
        $invest->amount = $request->amount;
        $invest->currency = $user_wallet->currency_id;
        $invest->status = 'running';
        $invest->end = $end;
        $invest->save();
        $user_wallet->balance -= $request->amount;
        $user_wallet->save();


        return back()->with(['success' => 'Investment made successfully']);
    }

    public function check()
    {
        // $user = User::findOrFail($id);
        $plans = Plan::all();
        $wallets = Auth::user()->wallets;

        $investments = Invest::latest()->take(1)->where('user_id', Auth::user()->id)->get();

        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();

        $deposits = Transaction::where('user_id', Auth::user()->id)->latest()->take(3)->get();
        $withdraws = Transaction::where('user_id', Auth::id())->where('type', 'withdraw')
            ->latest()
            ->take(5)
            ->get();

        $loans = Loan::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        $wires = Wire::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        $domestics = Domestic::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

             $invests = Invest::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        return view('user.dashboard', compact('plans', 'wallets', 'investments', 'deposits', 'withdraws', 'loans', 'wires', 'domestics', 'documents', 'invests'));
    }

    public function portfolio()
    {
        $plans = Plan::take(10)->get();


        $wallets = Auth::user()->wallets;

        $investments = Invest::latest()->take(1)->where('user_id', Auth::user()->id)->get();



        return view('user.portfolio', compact('plans', 'wallets', 'investments'));
    }
    public function link()
    {

        return view('user.link');
    }
}
