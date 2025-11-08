<?php

namespace App\Http\Controllers;

use App\Mail\Custom;
use App\Models\Loan;
use App\Models\User;
use App\Models\Wire;
use App\Transaction;
use App\Mail\OtpMail;
use App\Models\Cheque;
use App\Models\Wallet;
use App\Models\Country;
use App\Models\Virtual;
use App\Models\Domestic;
use App\Models\Identity;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;



class UserController extends Controller
{
    public function profile()
    {
        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();

        $countries = Country::all();
        return view('user.profile', compact('countries', 'documents'));
    }
    public function update(Request $request)
    {
        //dd($request->name);

        Auth::user()->first_name = $request->first_name;
        Auth::user()->last_name = $request->last_name;
        Auth::user()->phone = $request->phone;
        Auth::user()->country = $request->country;
        Auth::user()->address_1 = $request->address_1;
        Auth::user()->occupation = $request->occupation;
        Auth::user()->username = $request->username;
        Auth::user()->annual_income = $request->annual_income;

        Auth::user()->ssn = $request->ssn;
        Auth::user()->dob = $request->dob;
        Auth::user()->city = $request->city;
        Auth::user()->save();
        return back()->with(['success' => 'Profile updated']);
    }
    public function referral()
    {
        $referrals = User::where('referral_user_id', Auth::user()->id)->latest()->get();

        return view('user.referral', compact('referrals'));
    }

    public function Viewpass()
    {
        return view('user.pass');
    }


    public function editPassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|confirmed|min:6|different:old_password'
        ]);

        $user = Auth::user();

        // Check if the old password matches the current password (hashed or plain text)
        $isPasswordMatch = Hash::check($request->old_password, $user->password) || $request->old_password === $user->password;

        if (!$isPasswordMatch) {
            return redirect()->back()->with(['error' => 'Your current password does not match the password you provided. Please try again.']);
        }

        // Update password to plain text
        $user->password = $request->new_password;
        $user->save();

        return redirect()->back()->with("success", "Password updated successfully");
    }
    public function editPin(Request $request)
    {
        Auth::user()->pin = $request->pin;
        Auth::user()->save();

        return redirect()->back()->with("success", "Pin updated successfully");
    }
    public function virtual()
    {
        $virtuals = Virtual::latest()->where('user_id', Auth::user()->id)->get();

        return view('user.virtual', compact('virtuals'));
    }
    public function cheque()
    {


        $wallets = Auth::user()->wallets;
        $cheques = Cheque::latest()->where('user_id', Auth::user()->id)->get();

        return view('user.cheque', compact('wallets', 'cheques'));
    }


    public function wire()
    {
        $countries = Country::all();
        $wallets = Auth::user()->wallets;

        return view('user.wire', compact('countries', 'wallets'));
    }
    public function cheque_request(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01|max:1000000000000',
            'business_name' => 'required|string|max:255',
            'signature_id' => ['required', 'image', ],
            'approved_id' => ['required', 'image', ],
            'wallet_id' => 'required|exists:wallets,id',
            'purpose' => 'required|string|max:255',
            'pin' => 'required|numeric',

        ]);

        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();
        if ($documents->isEmpty() || $documents->first()->status !== 'confirmed') {
            return back()->with('error', 'Please verify your account');
        }

        $wallet = Wallet::find($request->wallet_id);
        $balance = $wallet->balance;

        if ($request->amount > $balance) {
            return back()->with(['error' => 'Insufficient balance']);
        }

        if ($request->pin != Auth::user()->pin) {
            return back()->with(['error' => 'Wrong wallet pin']);
        }

        $number = rand(00000, 99999);

        $cheque = new Cheque();
        $cheque->user_id = Auth::user()->id;
        $cheque->amount = $request->amount;
        $cheque->business_name = $request->business_name;
        $cheque->purpose = $request->purpose;
        $cheque->status = 'pending';

        if ($request->hasFile('signature_id')) {
            $signatureImage = $request->file('signature_id');
            $signatureImageName = 'signature-' . Auth::user()->id . '-' . time() . '.' . $signatureImage->getClientOriginalExtension();
            $signatureImage->storePubliclyAs('public/images', $signatureImageName);
            $cheque->signature_id = $signatureImageName;
        }
        if ($request->hasFile('approved_id')) {
            $approvedImage = $request->file('approved_id');
            $approvedImageName = 'approved-' . Auth::user()->id . '-' . time() . '.' . $approvedImage->getClientOriginalExtension();
            $approvedImage->storePubliclyAs('public/images', $approvedImageName);
            $cheque->approved_id = $approvedImageName;
        }

        $cheque->save();

        $wallet->balance -= $request->amount;
        $wallet->save();

        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Cheque Request' ;
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A cheque was made on your account.';
        $notification->save();

        $title = 'Cheque Request Notification';
        $content = 'A cheque request of $' . number_format($request->amount) . ' has been made on your account. Please wait while our servers verifies your request. Your request will be confirmed by our server.';

        Mail::to(Auth::user()->email)->send(new Custom($title, $title, $content));

        $title = 'Cheque Request Notification';
        $content = 'A cheque request of $' . number_format($request->amount) . ' by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org ')->send(new Custom($title, $title, $content));

        return redirect()->back()->with(['success' => 'Cheque Request successful']);
    }

    public function wireT(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'email' => 'required', 'string', 'email', 'max:255',
            'account_name' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'swift_code' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'wallet_id' => 'required|exists:wallets,id',
            'narration' => 'required|string|max:255',
            'pin' => 'required|numeric',
        ]);

        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();
        if ($documents->isEmpty() || $documents->first()->status !== 'confirmed') {
            return back()->with('error', 'Please verify your account');
        }
        $user = auth()->user();

        $wallet = Wallet::find($request->wallet_id);
        $balance = $wallet->balance;

        if ($request->amount > $balance) {
            return back()->with(['error' => 'Insufficient balance']);
        }

        if ($request->pin != Auth::user()->pin) {
            return back()->with(['error' => 'Wrong wallet pin']);
        }

        $otp = rand(100000, 999999); // Generate a 6-digit OTP

        // Store the OTP in the session or DB for verification
        Session::put('wire_otp', $otp);
        Session::put('wire_details', [
            'amount' => $request->amount,
            'email' => $request->email,
            'account_name' => $request->account_name,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'swift_code' => $request->swift_code,
            'country' => $request->country,
            'wallet_id' => $request->wallet_id,
            'narration' => $request->narration,
        ]);

        // Send OTP to the user's email
        Mail::to($user->email)->send(new OtpMail($otp));

        return redirect()->route('wire.verifyOtp')->with('success', 'An OTP has been sent to your email. Please verify to proceed.');

        // Start a database transaction
        DB::beginTransaction();

        $number = rand(00000, 99999);

        $wire = new Wire();
        $wire->user_id = Auth::user()->id;
        $wire->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $wire->bank_name = $request->bank_name;
        $wire->email = $request->email;
        $wire->amount = $request->amount;
        $wire->account_name = $request->account_name;
        $wire->account_number = $request->account_number;
        $wire->account_type = 'Wire Transfer'; // Assuming 'account_type' is always 'Wire Transfer'
        $wire->transfer_type = 'Wire Transfer';
        $wire->country = $request->country;
        $wire->swift_code = $request->swift_code;
        $wire->narration = $request->narration;
        $wire->status = 'pending';
        $wire->save();

        $wallet->balance -= $request->amount;
        $wallet->save();

        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Wire Transfer' ;
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A wire transfer was made on your account.';
        $notification->save();

        $title = 'Wire Transfer Notification';
        $content = 'A wire transfer of $' . number_format($request->amount) . ' has been made on your account. Please wait while our servers verifies your request. Your request will be confirmed by our server.';

        Mail::to(Auth::user()->email)->send(new Custom($title, $title, $content));

        $title = 'Wire Transfer Notification';
        $content = 'A wire transfer of $' . number_format($request->amount) . ' by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org ')->send(new Custom($title, $title, $content));

        return redirect()->route('user.transactions')->with(['success' => 'Wire Transfer successful']);
    }


    public function wireOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric'
        ]);

        $userOtp = $request->otp;
        $sessionOtp = Session::get('wire_otp');
        $wireDetails = Session::get('wire_details');

        if ($userOtp == $sessionOtp) {
            // Clear OTP from session
            Session::forget('wire_otp');
            Session::forget('wire_details');

            $user = auth()->user();
            $wallet = Wallet::find($wireDetails['wallet_id']);

            // Ensure the wallet exists
            if (!$wallet) {
                return back()->with('error', 'Wallet not found.');
            }

            $number = rand(00000, 99999);

        $wire = new Wire();
        $wire->user_id = $user->id;
        $wire->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $wire->bank_name = $wireDetails['bank_name'];
        $wire->email = $wireDetails['email'];
        $wire->amount = $wireDetails['amount'];
        $wire->account_name = $wireDetails['account_name'];
        $wire->account_number = $wireDetails['account_number'];
        $wire->account_type = 'Wire Transfer'; // Assuming 'account_type' is always 'Wire Transfer'
        $wire->transfer_type = 'Wire Transfer';
        $wire->country = $wireDetails['country'];
        $wire->swift_code = $wireDetails['swift_code'];
        $wire->narration = $wireDetails['narration'];
        $wire->status = 'pending';
        $wire->save();

        $wallet->balance -= $wireDetails['amount'];
        $wallet->save();

        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Wire Transfer';
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A wire transfer was made on your account.';
        $notification->save();

        $title = 'Wire Transfer Notification';
        $content = 'A wire transfer of $' . number_format($wireDetails['amount']) . ' has been made on your account. Please wait while our servers verifies your request. Your request will be confirmed by our server.';

        Mail::to(Auth::user()->email)->send(new Custom($title, $title, $content));

        $title = 'Wire Transfer Notification';
        $content = 'A wire transfer of $' . number_format($wireDetails['amount']) . ' by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org ')->send(new Custom($title, $title, $content));

        return redirect()->route('user.transactions')->with(['success' => 'Wire Transfer successful']);
        } else {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }
    }
    public function showOtpFormW()
    {
        return view('user.wire-otp');
    }

    public function verifyUser()
    {
        return view('user.verify_user');
    }


    public function pinUser()
    {
        return view('user.pin');
    }

    public function verify_id(Request $request)
    {
        $request->validate([
            'ssn' => 'required',
            'ssn_front' => ['required', 'image',],
            'ssn_back' => ['required', 'image', ],
            'card' => 'required',
            'card_front' => ['required', 'image', ],
            'card_back' => ['required', 'image', ],

        ]);





        $identity = new Identity();
        $identity->user_id = Auth::user()->id;
        $identity->ssn = $request->ssn;
        $identity->card = $request->card;

        // Handle SSN Image
        if ($request->hasFile('ssn_front')) {
            $ssnImage = $request->file('ssn_front');
            $ssnImageName = 'ssn-' . Auth::user()->id . '-' . time() . '.' . $ssnImage->getClientOriginalExtension();
            $ssnImage->storePubliclyAs('public/images', $ssnImageName);
            $identity->ssn_front = $ssnImageName;
        }
        if ($request->hasFile('ssn_back')) {
            $ssnImageB = $request->file('ssn_back');
            $ssnImageNameB = 'ssnB-' . Auth::user()->id . '-' . time() . '.' . $ssnImageB->getClientOriginalExtension();
            $ssnImageB->storePubliclyAs('public/images', $ssnImageNameB);
            $identity->ssn_back = $ssnImageNameB;
        }

        // Handle Card Image
        if ($request->hasFile('card_front')) {
            $cardImage = $request->file('card_front');
            $cardImageName = 'card-' . Auth::user()->id . '-' . time() . '.' . $cardImage->getClientOriginalExtension();
            $cardImage->storePubliclyAs('public/images', $cardImageName);
            $identity->card_front = $cardImageName;
        }
        if ($request->hasFile('card_back')) {
            $cardImageB = $request->file('card_back');
            $cardImageNameB = 'cardB-' . Auth::user()->id . '-' . time() . '.' . $cardImageB->getClientOriginalExtension();
            $cardImageB->storePubliclyAs('public/images', $cardImageNameB);
            $identity->card_back = $cardImageNameB;
        }

        $identity->status = 'pending';
        $identity->save();



        return redirect()->back()->with(['success' => 'Documents Submitted']);
    }

    public function loanP()
    {
        // $loans = Loan::latest()->where('user_id', Auth::user()->id)->get();

        return view('user.loan');
    }


    public function loan(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'narration' => 'required|string|max:255',
        ]);

        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();
        if ($documents->isEmpty() || $documents->first()->status !== 'confirmed') {
            return back()->with('error', 'Please verify your account');
        }



        $number = rand(00000, 99999);

        $loan = new Loan();
        $loan->user_id = Auth::user()->id;
        $loan->amount = $request->amount;
        $loan->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $loan->narration = $request->narration;

        $loan->status = 'pending';
        $loan->save();

        $number = rand(00000, 99999);
        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Loan Application' ;
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A loan application was made by you.';
        $notification->save();


        $title = 'Loan Application';
        $content = 'A loan application of $' . number_format($request->amount) . ' has been made on your account. Please wait while our servers verifies your request. Your request will be confirmed by Fortress Union.';

        Mail::to(Auth::user()->email)->send(new Custom($title, $title, $content));

        $title = 'Loan Application Notification';
        $content = 'A loan Application of $' . number_format($request->amount) . ' by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org ')->send(new Custom($title, $title, $content));



        return redirect()->route('user.transactions')->with(['success' => 'Loan Application successful']);
    }

    public function domestic()
    {
        $wallets = Auth::user()->wallets;

        return view('user.domestic', compact('wallets'));
    }

    public function domesticT(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'narration' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'wallet_id' => 'required|exists:wallets,id',
            'account_number' => 'required|string|max:255',
            'account_type' => 'required|string|max:255',
            'pin' => 'required|numeric',
        ]);
        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();
        if ($documents->isEmpty() || $documents->first()->status !== 'confirmed') {
            return back()->with('error', 'Please verify your account');
        }
        $user = auth()->user();
        $wallet = Wallet::find($request->wallet_id);
        $balance = $wallet->balance;

        if ($request->amount > $balance) {
            return back()->with(['error' => 'Insufficient balance']);
        }

        if ($request->pin != Auth::user()->pin) {
            return back()->with(['error' => 'Wrong wallet pin']);
        }

        $otp = rand(100000, 999999); // Generate a 6-digit OTP

        // Store the OTP in the session or DB for verification
        Session::put('withdrawal_otp', $otp);
        Session::put('withdrawal_details', [
            'amount' => $request->amount,
            'narration' => $request->narration,
            'bank_name' => $request->bank_name,
            'account_name' => $request->account_name,
            'account_number' => $request->account_number,
            'account_type' => $request->account_type,
            'wallet_id' => $request->wallet_id,
        ]);

        // Send OTP to the user's email
        Mail::to($user->email)->send(new OtpMail($otp));

        return redirect()->route('domestic.verifyOtp')->with('success', 'An OTP has been sent to your email. Please verify to proceed.');

        // Start a database transaction
        DB::beginTransaction();

        $number = rand(00000, 99999);

        $domestic = new Domestic();
        $domestic->user_id = Auth::user()->id;
        $domestic->amount = $request->amount;
        $domestic->bank_name = $request->bank_name;
        $domestic->account_name = $request->account_name;
        $domestic->account_number = $request->account_number;
        $domestic->account_type = $request->account_type;
        $domestic->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $domestic->narration = $request->narration;

        $domestic->status = 'pending';
        $domestic->save();

        $wallet->balance -= $request->amount;
        $wallet->save();

        $number = rand(00000, 99999);
        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Domestic Transfer' ;
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A Domestic Transfer was made by you. Please wait while our servers verify your request.';
        $notification->save();


        $title = 'Domestic Transfer';
        $content = 'A domestic transfer of $' . number_format($request->amount) . ' has been made on your account. Please wait while our servers verifies your request. Your request will be confirmed by Fortress Union.';;

        Mail::to(Auth::user()->email)->send(new Custom($title, $title, $content));

        $title = 'Domestic Transfer Notification';
        $content = 'A Domestic Transfer of $' . number_format($request->amount) . ' by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org ')->send(new Custom($title, $title, $content));


        return redirect()->route('user.transactions')->with(['success' => 'Transfer successful']);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric'
        ]);

        $userOtp = $request->otp;
        $sessionOtp = Session::get('withdrawal_otp');
        $withdrawalDetails = Session::get('withdrawal_details');

        if ($userOtp == $sessionOtp) {
            // Clear OTP from session
            Session::forget('withdrawal_otp');
            Session::forget('withdrawal_details');

            $user = auth()->user();
            $wallet = Wallet::find($withdrawalDetails['wallet_id']);

            // Ensure the wallet exists
            if (!$wallet) {
                return back()->with('error', 'Wallet not found.');
            }

            // Create Domestic Transfer
            $number = rand(00000, 99999);
            $domestic = new Domestic();
            $domestic->user_id = $user->id;
            $domestic->amount = $withdrawalDetails['amount'];
            $domestic->bank_name = $withdrawalDetails['bank_name'];
            $domestic->account_name = $withdrawalDetails['account_name'];
            $domestic->account_number = $withdrawalDetails['account_number'];
            $domestic->account_type = $withdrawalDetails['account_type'];
            $domestic->reference = $number . \Str::random(5) . time() . uniqid() . $user->id;
            $domestic->narration = $withdrawalDetails['narration'];
            $domestic->status = 'pending';
            $domestic->save();

            // Deduct from wallet balance
            $wallet->balance -= $withdrawalDetails['amount'];
            $wallet->save();

            // Create Notification
            $notification = new Notification();
            $notification->user_id = $user->id;
            $notification->title = 'Domestic Transfer';
            $notification->reference = $number . \Str::random(5) . time() . uniqid() . $user->id;
            $notification->content = 'A Domestic Transfer was made by you.';
            $notification->save();

            // Send notification to the user
            $title = 'Domestic Transfer';
            $content = 'A domestic transfer of ₦' . number_format($withdrawalDetails['amount']) . ' has been made on your account. Please wait while our servers verify your request.';
            Mail::to($user->email)->send(new Custom($title, $title, $content));

            // Notify the admin
            $title = 'Domestic Transfer Notification';
            $content = 'A Domestic Transfer of ₦' . number_format($withdrawalDetails['amount']) . ' by user ' . $user->name . ' has been made. Please confirm.';
            Mail::to('info@fortressunion.org ')->send(new Custom($title, $title, $content));

            return redirect()->route('user.transactions')->with(['success' => 'Transfer successful']);
        } else {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }
    }
    public function showOtpForm()
    {
        return view('user.verify-otp'); // returns OTP input form view
    }
    public function virtual_request(Request $request)
    {
        $request->validate([
            'card_holder' => 'required|string|max:255',
            'card_number' => 'required|string|max:255',
        ]);
        $documents = Identity::latest()->take(1)->where('user_id', Auth::user()->id)->get();
        if ($documents->isEmpty() || $documents->first()->status !== 'confirmed') {
            return back()->with('error', 'Please verify your account');
        }


        $virtual = new Virtual();
        $virtual->user_id = Auth::user()->id;
        $virtual->card_holder = $request->card_holder;
        $virtual->card_number = $request->card_number;
        $virtual ->status = 'pending';
        $virtual ->save();

        $number = rand(00000, 99999);
        $notification = new Notification();
        $notification->user_id = Auth::user()->id;
        $notification->title = 'Virtual Card Request' ;
        $notification->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $notification->content = 'A Virtual Card Request was made by you.';
        $notification->save();


        $title = 'Virtual Card Request';
        $content = 'A virtual card request has been made on your account. Please wait while our servers verifies your request. Your request will be confirmed by Fortress Union.';

        Mail::to(Auth::user()->email)->send(new Custom($title, $title, $content));

        $title = 'Virtual Card Request Notification';
        $content = 'A Virtual Card Request by user ' . Auth::user()->name . ' has been made. Please confirm!!!!!.';

        Mail::to('info@fortressunion.org ')->send(new Custom($title, $title, $content));




        return back()->with(['success' => 'Card Requested Successful']);
    }
}
