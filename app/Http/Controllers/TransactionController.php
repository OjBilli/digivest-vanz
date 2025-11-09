<?php

namespace App\Http\Controllers;

use App\Mail\Custom;
use App\Models\Loan;
use App\Models\Plan;
use App\Models\Wire;
use App\Mail\OtpMail;
use App\Models\Invest;
use App\Models\Wallet;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Domestic;
use App\Models\Identity;
use App\Models\AdminWallet;
use App\Models\Transaction;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{

    public function depositView()
    {
        $plans = Plan::all();
        $currencies = Currency::all();
        $investments = Invest::latest()->take(1)->where('user_id', Auth::user()->id)->get();

        return view('user.deposit', compact('plans', 'currencies', 'investments'));
    }

    public function depositpView()
    {
        $deposits = Transaction::latest()->where('user_id', Auth::user()->id)->get();
        return view('user.depositp', compact('deposits'));
    }

    // public function dashboard()
    //     {
    //         $plans = Plan::all();
    //         $currencies = Currency::all();

    //         return view('user.dashboard', compact('plans', 'currencies'));
    // }
    public function transactonsView()
    {
        $deposits = Transaction::latest()->where('user_id', Auth::user()->id)->get();
        $withdraws = Transaction::latest()->where('user_id', Auth::user()->id)->get();
        $loans = Loan::latest()->where('user_id', Auth::user()->id)->get();
        $wires = Wire::latest()->where('user_id', Auth::user()->id)->get();
        $domestics = Domestic::latest()->where('user_id', Auth::user()->id)->get();
        $invests = Invest::latest()->where('user_id', Auth::user()->id)->get();
        return view('user.transactions', compact('deposits', 'withdraws','loans','wires','domestics','invests'));
    }

    public function wireView()
    {

        $wires = Wire::latest()->where('user_id', Auth::user()->id)->get();

        return view('user.wireTran', compact('wires'));
    }

    public function domesticView()
    {

        $domestics = Domestic::latest()->where('user_id', Auth::user()->id)->get();

        return view('user.domesticTran', compact('domestics'));
    }

    public function loanView()
    {

        $loans = Loan::latest()->where('user_id', Auth::user()->id)->get();

        return view('user.loanTran', compact('loans'));
    }

    public function investment()
    {
        // $deposits = Transaction::latest()->where('user_id', Auth::user()->id)->get();
        $investments = Invest::latest()->where('user_id', Auth::user()->id)->get();
        return view('user.investment', compact('investments'));
    }



    public function deposit(Request $request)
    {
        //check the amount
        // $plan = $request->account_type;
        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();
        if ($documents->isEmpty() || $documents->first()->status !== 'confirmed') {
            return back()->with('error', 'Please verify your account');
        }

        $request->validate([
            'amount' => 'required|numeric|min:0.01|max:1000000000000',
        ]);

        if ($request->account_type == null) {
            return back()->with(['error' => 'Account type is required']);
        }
        if ($request->amount == null) {
            return back()->with(['error' => 'Input amount']);
        }
        $admin_wallet = '';
        if ($request->currency == 1) {
            $admin_wallet = AdminWallet::where('wallet', 'Bitcoin')->first()->address;
        } elseif ($request->currency == 2) {
            $admin_wallet = AdminWallet::where('wallet', 'usdt')->first()->address;
        } elseif ($request->currency == 3) {
            $admin_wallet = AdminWallet::where('wallet', 'wireUSD')->first()->address;
        } elseif ($request->currency == 4) {
            $admin_wallet = AdminWallet::where('wallet', 'wireEUR')->first()->address;
        } elseif ($request->currency == 5) {
            $admin_wallet = AdminWallet::where('wallet', 'wireGBP')->first()->address;
        }


        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        // $transaction->plan_id = $request->account_type;
        $transaction->type = 'Deposit';
        $transaction->amount = $request->amount;
        $transaction->currency_id = $request->currency;
        $transaction->status = 'pending';
        $transaction->save();



        $amount = $request->amount;
        $currency = Currency::find($request->currency);

        $number = rand(00000, 99999);
        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Account Deposit' ;
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A deposit was made on your account.';
        $notification->save();



        return view('user.wallet', compact('admin_wallet', 'currency', 'amount', 'transaction'));
    }
    public function confirm(Transaction $transaction)
    {

        $title = 'Deposit Notification';
        $content = 'A Deposit of $' . number_format($transaction->amount) . ' has been made on your account. Please wait while our servers verifies your payment. The deposit amount would be added to your account once payment is confirmed by Fortress Union server.';

        Mail::to(Auth::user()->email)->send(new Custom($title, $title, $content));

        $title = 'Deposit Notification';
        $content = 'A Deposit request of $' . number_format($transaction->amount) . ' by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org')->send(new Custom($title, $title, $content));

        return redirect()->route('user.transactions');
    }

    public function withdrawView()
    {
        $wallets = Auth::user()->wallets;

        return view('user.withdraw', compact('wallets'));
    }

    public function transfer()
    {
        $countries = Country::all();

        return view('user.transfer', compact('countries'));
    }

    public function withdraw(Request $request)
    {
        $user = auth()->user();
        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();
        $wallet = Wallet::find($request->wallet_id);
        $balance = $wallet->balance;
        if ($request->amount == null) {
            return back()->with(['error' => 'Input amount']);
        }
        if ($request->wallet == null) {
            return back()->with(['error' => 'Input Wallet']);
        }
        if ($request->amount > $balance) {
            return back()->with(['error' => 'Insufficient balance']);
        }

        if ($request->pin != Auth::user()->pin) {
            return back()->with(['error' => 'Wrong wallet pin']);
        }

        $request->validate([
            'amount' => 'required|numeric|min:0.01|max:1000000000000',
        ]);
        if ($documents->isEmpty() || $documents->first()->status !== 'confirmed') {
            return back()->with('error', 'Please verify your account');
        }

        $otp = rand(100000, 999999); // Generate a 6-digit OTP

        // Store the OTP in the session or DB for verification
        Session::put('withdraw_otp', $otp);
        Session::put('withdraw_details', [
            'amount' => $request->amount,
            'wallet' => $request->wallet,
            'wallet_id' => $request->wallet_id,
            'currency_id' => $request->currency_id,
        ]);

        // Send OTP to the user's email
        Mail::to($user->email)->send(new OtpMail($otp));

        return redirect()->route('withdraw.verifyOtp')->with('success', 'An OTP has been sent to your email. Please verify to proceed.');

        // Start a database transaction
        DB::beginTransaction();



        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->type = 'Withdraw';
        $transaction->amount = $request->amount;
        $transaction->currency_id = $wallet->currency_id;
        $transaction->wallet = $request->wallet;

        $transaction->status = 'pending';
        $transaction->save();

        $wallet->balance -= $request->amount;
        $wallet->save();

        $number = rand(00000, 99999);
        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Withdrawal Request' ;
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A withdrawal was made on your account.';
        $notification->save();

        $title = 'Withdrawal Notification';
        $content = 'A withdrawal request of $' . number_format($request->amount) . ' has been made on your account. Please wait while our servers verifies your withdrawal. Your withdrawal will be confirmed by our server.';

        Mail::to($request->user())->send(new Custom($title, $title, $content));

        $title = 'Withdrawal Notification';
        $content = 'A withdrawal request of $' . number_format($request->amount) . ' by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org')->send(new Custom($title, $title, $content));

        return redirect()->route('user.transactions')->with(['success' => 'Withdrawal request opened successfully']);
    }

    public function withdrawOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric'
        ]);

        $userOtp = $request->otp;
        $sessionOtp = Session::get('withdraw_otp');
        $withdrawDetails = Session::get('withdraw_details');

        if ($userOtp == $sessionOtp) {
            // Clear OTP from session
            Session::forget('withdraw_otp');
            Session::forget('withdraw_details');

            $user = auth()->user();
            $wallet = Wallet::find($withdrawDetails['wallet_id']);

            // Ensure the wallet exists
            if (!$wallet) {
                return back()->with('error', 'Wallet not found.');
            }

            // Create Domestic Transfer
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->type = 'Withdraw';
            $transaction->amount = $withdrawDetails['amount'];
            $transaction->currency_id = $wallet['currency_id'];
            $transaction->wallet = $withdrawDetails['wallet'];

            $transaction->status = 'pending';
            $transaction->save();

            $wallet->balance -= $withdrawDetails['amount'];
            $wallet->save();

            $number = rand(00000, 99999);
            $notification = new Notification();
            $notification->user_id = Auth::user()->id;
            $notification->title = 'Withdrawal Request' ;
            $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
            $notification->content = 'A withdrawal was made on your account.';
            $notification->save();

            $title = 'Withdrawal Notification';
            $content = 'A withdrawal request of $' . number_format($withdrawDetails['amount']) . ' has been made on your account. Please wait while our servers verifies your withdrawal. Your withdrawal will be confirmed by our server.';

            Mail::to($request->user())->send(new Custom($title, $title, $content));

            $title = 'Withdrawal Notification';
            $content = 'A withdrawal request of $' . number_format($withdrawDetails['amount']) . ' by user ' . $user->name . ' has been made. Please confirm!!!!!.';

            Mail::to('info@fortressunion.org')->send(new Custom($title, $title, $content));

            return redirect()->route('user.transactions')->with(['success' => 'Withdrawal request opened successfully']);
        } else {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }
    }
    public function showOtpFormWith()
    {
        return view('user.withdraw-otp'); // returns OTP input form view
    }
}
