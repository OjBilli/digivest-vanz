<?php

namespace App\Http\Controllers;

use App\Mail\Custom;
use App\Models\Loan;
use App\Models\User;
use App\Models\Wire;
use App\Models\Cheque;
use App\Models\Wallet;
use App\Models\Country;
use App\Models\Virtual;
use App\Models\Domestic;
use App\Models\Identity;
use App\Models\AdminWallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all();


        return view('admin.dashboard', compact('users'));
    }
    public function database()
    {
        $users = User::all();


        return view('admin.database', compact('users'));
    }
    public function userDeposits($id){
        $user = User::find($id);
        $deposits = $user->deposits;

        return view('admin.view', compact('deposits', 'user'));
    }

    public function userWithdraws($id){
        $user =  User::find($id);
        $withdraws = $user->withdraws;

        return view('admin.withdraw', compact('withdraws', 'user'));
    }
    public function userLoans($id){
        $user =  User::find($id);
        $loans = $user->loans;

        return view('admin.loan', compact('loans', 'user'));
    }
    public function userDomestics($id){
        $user =  User::find($id);
        $domestics = $user->domestics;

        return view('admin.domestic', compact('domestics', 'user'));
    }
    public function userCheques($id){
        $user =  User::find($id);
        $cheques = $user->cheques;

        return view('admin.cheque', compact('cheques', 'user'));
    }
    public function userDocuments($id){
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $documents = $user->documents;

        return view('admin.document', compact('documents', 'user'));
    }

    public function userVirtuals($id){
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $virtuals = $user->virtuals;

        return view('admin.virtual', compact('virtuals', 'user'));
    }


    public function userWires($id){
        $user =  User::find($id);
        $wires = $user->wires;

        return view('admin.wire', compact('wires', 'user'));
    }

    public function deposit($id){
        $user = User::find($id);

        return view('admin.deposit', compact('user'));
    }

    public function destroy($id)
    {
        $deposit = Transaction::findOrFail($id);

        // Optional: Add logic to check if the deposit can be deleted
        // if ($deposit->status == 'confirmed') {
        //     return redirect()->back()->with('error', 'Confirmed deposits cannot be deleted.');
        // }

        $deposit->delete();

        return redirect()->back()->with('success', 'Deposit deleted successfully.');
    }
    public function destroyW($id)
    {
        $withdraw = Transaction::findOrFail($id);

        // Optional: Add logic to check if the deposit can be deleted
        // if ($deposit->status == 'confirmed') {
        //     return redirect()->back()->with('error', 'Confirmed deposits cannot be deleted.');
        // }

        $withdraw->delete();

        return redirect()->back()->with('success', 'Withdrawal transaction deleted successfully.');
    }
    public function destroyWire($id)
    {
        $wire = Wire::findOrFail($id);

        // Optional: Add logic to check if the deposit can be deleted
        // if ($deposit->status == 'confirmed') {
        //     return redirect()->back()->with('error', 'Confirmed deposits cannot be deleted.');
        // }

        $wire->delete();

        return redirect()->back()->with('success', 'Wire transaction deleted successfully.');
    }

    public function updateWallet(Request $request)
    {
          $request->validate([
        'amount' => 'required|numeric|not_in:0', // must not be zero
        'wallet_id' => 'required|exists:wallets,id',
        'transaction_date' => 'nullable|date',
    ]);

    $wallet = Wallet::find($request->wallet_id);

    // If amount is negative and wallet doesn't have enough balance
    if ($request->amount < 0 && $wallet->balance < abs($request->amount)) {
        return back()->with('error', 'Insufficient balance for withdrawal');
    }

    // Update wallet balance
    $wallet->balance += $request->amount; // works for both + and -
    $wallet->save();

    // Determine transaction type automatically
    $transactionType = $request->amount > 0 ? 'deposit' : 'withdraw';

    // Log the transaction
    $transaction = new Transaction();
    $transaction->user_id = $wallet->user_id;
    $transaction->amount = abs($request->amount);
    $transaction->type = $transactionType;
    $transaction->currency_id = $wallet->currency_id;
    $transaction->wallet = $wallet->id;
    $transaction->status = 'confirmed';
    $transaction->created_at = $request->transaction_date ?? now();
    $transaction->save();

    return back()->with('success', ucfirst($transactionType) . ' completed successfully');

        // $request->validate([
        //     'amount' => 'required|numeric|min:0.01',
        //     'transaction_type' => 'required|in:deposit,withdraw',
        //     'wallet_id' => 'required|exists:wallets,id',
        //     'transaction_date' => 'nullable|date',
        // ]);


        // $wallet = Wallet::find($request->wallet_id);

        // if ($request->transaction_type === 'deposit') {

        //     $wallet->balance += $request->amount;
        // } elseif ($request->transaction_type === 'withdraw') {

        //     if ($wallet->balance < $request->amount) {
        //         return back()->with('error', 'Insufficient balance for withdrawal');
        //     }

        //     $wallet->balance -= $request->amount;
        // }


        // $wallet->save();


        // $transaction = new Transaction();
        // $transaction->user_id = $wallet->user_id;
        // $transaction->amount = $request->amount;
        // $transaction->type = strtolower($request->transaction_type);
        // $transaction->currency_id = $wallet->currency_id;
        // $transaction->wallet = $wallet->id;
        // $transaction->status = 'confirmed';
        // $transaction->created_at = $request->transaction_date ?? now();
        // $transaction->save();

        // return back()->with('success', ucfirst($request->transaction_type) . ' made successfully');
    }
    public function wire_deposit($id)
    {
        $user = User::find($id);
        $countries = Country::all();

        return view('admin.wire-deposit', compact('user', 'countries'));
    }
    public function editWire(Request $request, $wire_id)
    {
    $request->validate([
        'amount' => 'required|numeric',
        'bank_name' => 'required|string',
        'account_number' => 'required|string',
        'country' => 'required|string',
        'swift_code' => 'nullable|string',
        'email' => 'required|email',
        'narration' => 'nullable|string',
    ]);

    $wire = Wire::findOrFail($wire_id);

    $wire->update($request->all());

    return back()->with('success', 'Wire Transfer Edited successfully.');
    }


    public function cancel($id)
{
    $deposit = Transaction::findOrFail($id);
    $deposit->status = 'cancelled';
    $deposit->save();

    return redirect()->back()->with('success', 'Deposit status has been changed to Cancelled.');
}

    public function cancelWire($id)
{
    $wire = Wire::findOrFail($id);
    $wire->status = 'cancelled';
    $wire->save();

    return redirect()->back()->with('success', 'wire status has been changed to Cancelled.');
}

    public function cancelDomestic($id)
{
    $domestic = Domestic::findOrFail($id);
    $domestic->status = 'cancelled';
    $domestic->save();

    return redirect()->back()->with('success', 'Domestic status has been changed to Cancelled.');
}
public function cancelVirtual($id)
{
    $virtual = Virtual::findOrFail($id);
    $virtual->status = 'cancelled';
    $virtual->save();

    return redirect()->back()->with('success', 'Virtual card status has been changed to Cancelled.');
}

public function cancelLoan($id){
    $loan = Loan::findOrFail($id);
    $loan->status = 'cancelled';
    $loan->save();

    return redirect()->back()->with('success', 'Loan status has been changed to Cancelled.');
}

public function cancelDocument($id){
    $document = Identity::findOrFail($id);
    $document->status = 'cancelled';
    $document->save();

    return redirect()->back()->with('success', 'Document status has been changed to Cancelled.');
}

public function cancelCheque($id){
    $cheque = Cheque::findOrFail($id);
    $cheque->status = 'cancelled';
    $cheque->save();


    return redirect()->back()->with('success', 'Cheque status has been changed to Cancelled.');
}

public function cancelWithdraw($id){
    $withdraw = Transaction::findOrFail($id);
    $withdraw->status = 'cancelled';
    $withdraw->save();

    return redirect()->back()->with('success', 'Withdraw status has been changed to Cancelled.');
}

    public function updateWire(Request $request)
    {
        // Validate the request data
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'wallet_id' => 'required|exists:wallets,id',
            'wire_date' => 'nullable|date',
            'bank_name' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
            'country' => 'required',
            'swift_code' => 'required',
            'email' => 'required',
            'narration' => 'required',
        ]);


        $wallet = Wallet::find($request->wallet_id);
        $wallet->balance -= $request->amount;
        $wallet->save();

        $number = rand(00000, 99999);




        $wire = new Wire();
        $wire->user_id = $wallet->user_id;
        $wire->reference = $number . \Str::random(5) . time() . uniqid() . Auth::user()->id;
        $wire->amount = $request->amount;
        $wire->account_type = 'Wire Transfer';
        $wire->transfer_type = 'Wire Transfer';
        $wire->account_name = $request->account_name;
        $wire->account_number = $request->account_number;
        $wire->bank_name = $request->bank_name;
        $wire->country = $request->country;
        $wire->swift_code = $request->swift_code;
        $wire->email = $request->email;
        $wire->narration = $request->narration;
        $wire->status = 'confirmed';
        $wire->created_at = $request->wire_date ?? now();
        $wire->save();

        // Return a success message
        return back()->with(['success' => 'Wire Transfer made successfully']);
    }
    public function userWiresEdit($wire_id){
        $wire = Wire::findOrFail($wire_id);
        $countries = Country::all();
        return view('admin.wire-edit', compact('wire','countries'));
    }
    public function userDomesticsEdit($domestic_id){
        $domestic = Domestic::findOrFail($domestic_id);

        return view('admin.domestic-edit', compact('domestic'));
    }

    public function editDomestic(Request $request, $domestic_id)
    {
    $request->validate([
        'amount' => 'required|numeric',
        'bank_name' => 'required|string',
        'account_name' => 'required|string',
        'account_number' => 'required|string',
        'narration' => 'nullable|string',
    ]);

    $domestic = Domestic::findOrFail($domestic_id);

    $domestic->update($request->all());

    return back()->with('success', 'Domestic Transfer Edited successfully.');
    }


    public function delete(){
        $users = User::all();

        return view('admin.delete', compact('users'));
    }
    public function block($id){
        $user = User::find($id);
        $user->status ='blocked';
        $user->save();
        $title = 'Account Blocked – Immediate Action Required ';
        $content = "
        <strong>Hi $user->first_name $user->last_name,</strong><br><br>
        We regret to inform you that your account has been temporarily blocked. As a result, you will no longer be able to access your account until this issue is resolved.<br><br>
        To resolve this matter and restore your access, we kindly ask that you contact the admin team as soon as possible.<br>
        <br><br>
        Contact Information:<br>
        <strong>Contact Admin Email:</strong>info@atlasmarketedgers.com <br>
        <strong>Or Use the Livechat</strong><br><br>
        We apologize for any inconvenience this may cause and are eager to assist you in resolving the issue.<br><br>
        Thank you for your understanding,<br>
        <strong>Atlas Market Edgers</strong>";

        Mail::to($user->email)->send(new Custom($title, $title, $content));
        return back()->with(['success'=> 'User blocked']);
    }
    public function recover($id){
        $user = User::find($id);
        $user->status ='active';
        $user->save();

        $title = 'Account Reactivated – Access Restored';
        $content = "
        <strong>Hi $user->first_name $user->last_name,</strong><br><br>
        We are pleased to inform you that your account has been successfully reactivated. You now have full access to your account and its services once again.<br><br>
        If you experience any issues or have any questions, please don't hesitate to reach out to our support team.<br><br>
        Contact Information:<br>
        <strong>Support Email:</strong> info@atlasmarketedgers.com<br>
        <strong>Or Use the Livechat</strong><br><br>
        Thank you for your patience and we appreciate your continued trust in Atlas Market Edgers.<br><br>
        Best regards,<br>
        <strong>Atlas Market Edgers</strong>";

        Mail::to($user->email)->send(new Custom($title, $title, $content));

        return back()->with(['success'=> 'User Actived']);
    }
    public function confirmDeposits($id){
        $deposit = Transaction::find($id);
        $user = User::find($deposit->user_id);

        if ($deposit->currency_id  == 1) {
            $wallet = $user->bitcoinWallet;
        }elseif($deposit->currency_id  == 2) {
            $wallet = $user->usdtWallet;
        }elseif($deposit->currency_id == 3){
            $wallet =   $user->wireUSDWallet;
        }elseif($deposit->currency_id == 4){
            $wallet =   $user->wireEURWallet;
        }elseif($deposit->currency_id == 5){
            $wallet =   $user->wireGBPWallet;
        }

        $wallet->balance += $deposit->amount;
        $wallet->save();

        $deposit->status='confirmed';
        $deposit->save();

        $title = 'Deposit Approved';
        $content = ' Your deposit has been confirmed, check your dashboard for errors and relate back to the support system or account manager if need be.';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Deposit Confirmed']);


    }


    public function confirmWithdraws($id)
    {
        $withdraw = Transaction::find($id);
        $user = User::find($withdraw->user_id);

        if ($withdraw->currency == 'Bitcoin') {
            $wallet = $user->bitcoinWallet;
        }elseif($withdraw->currency=='Usdt'){
            $wallet =   $user->usdtWallet;
        }elseif($withdraw->currency=='wireUSD'){
            $wallet =   $user->wireUSDWallet;
        }elseif($withdraw->currency=='wireEUR'){
            $wallet =   $user->wireEURWallet;
        }elseif($withdraw->currency=='wireGBP'){
            $wallet =   $user->wireGBPWallet;
        }

        $withdraw->status='confirmed';
        $withdraw->save();

        $title = 'Withdrawal Request Confirmed';
        $content = 'Dear esteem user, withdrawal to your desired bank has been made. Thank you for trusting Atlas Market Edgers';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Withdraw Confirmed']);
    }

    public function confirmLoans($id)
    {
        $loan = Loan::find($id);
        $user = User::find($loan->user_id);



        $loan->status='confirmed';
        $loan->save();

        $title = 'Loan Request Confirmed';
        $content = 'Dear esteem user, your loan request has been looked into and approved. Thank you for trusting Atlas Market Edgers';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Loan Confirmed']);
    }
    public function confirmDocuments($id)
    {
        $document = Identity::find($id);
        $user = User::find($document->user_id);



        $document->status='confirmed';
        $document->save();

        $title = 'Identity Verification Confirmed';
        $content = 'Dear esteem user, your identification cards has been verified. Thank you for trusting Atlas Market Edgers';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Document verified']);
    }

    public function confirmVirtuals($id)
    {
        $virtual = Virtual::find($id);
        $user = User::find($virtual->user_id);



        $virtual->status='confirmed';
        $virtual->save();

        $title = 'Virtual Card Request Confirmed';
        $content = 'Dear esteem user, your virtual card has been approved, now you can carry our your online transactions. Thank you for trusting Atlas Market Edgers';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Virtual Card verified']);
    }

    public function confirmDomestics($id)
    {
        $domestic = Domestic::find($id);
        $user = User::find($domestic->user_id);



        $domestic->status='confirmed';
        $domestic->save();

        $title = 'Domestic Transfer Confirmed';
        $content = 'Dear esteem user, your domestic transfer has been sent out successfully. Thank you for trusting Atlas Market Edgers';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Domestic Transfer Confirmed']);
    }

    public function confirmWires($id)
    {
        $wire = Wire::find($id);
        $user = User::find($wire->user_id);



        $wire->status='confirmed';
        $wire->save();

        $title = 'Wire Transfer Confirmed';
        $content = 'Dear esteem user, your wire transfer to the designated account has been confirmed. Thank you for trusting Atlas Market Edgers';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Wire Transfer Confirmed']);
    }
    public function confirmCheques($id)
    {
        $cheque = Cheque::find($id);
        $user = User::find($cheque->user_id);



        $cheque->status='confirmed';
        $cheque->save();

        $title = 'Cheque Request Confirmed';
        $content = 'Dear esteem user, your cheque request has been confirmed. Thank you for trusting Atlas Market Edgers';

        Mail::to($user->email)->send(new Custom($title, $title, $content));


        return back()->with(['success' => 'Cheque Request Confirmed']);
    }

    public function wallet(){
        $btc = AdminWallet::where('wallet', 'Bitcoin')->first();
        $usdt = AdminWallet::where('wallet', 'Usdt')->first();
        $wireUSD = AdminWallet::where('wallet', 'wireUSD')->first();
        $wireEUR = AdminWallet::where('wallet', 'wireEUR')->first();
        $wireGBP = AdminWallet::where('wallet', 'wireGBP')->first();

        return view('admin.wallet', compact('btc', 'usdt', 'wireUSD', 'wireEUR', 'wireGBP'));
    }
    public function walletUpdate(Request $request){

        AdminWallet::where('wallet', 'Bitcoin')->first()->update([
            'address' => $request->btc,
        ]);
        AdminWallet::where('wallet', 'Usdt')->first()->update([
            'address' => $request->usdt,
        ]);
        AdminWallet::where('wallet', 'wireUSD')->first()->update([
            'address' => $request->wireUSD,
        ]);
        AdminWallet::where('wallet', 'wireEUR')->first()->update([
            'address' => $request->wireEUR,
        ]);
        AdminWallet::where('wallet', 'wireGBP')->first()->update([
            'address' => $request->wireGBP,
        ]);

        return back()->with(['success' => 'Wallet updated']);

    }

    public function loginAsUser($id)
    {
        // Ensure the logged-in user has the admin role
        if (Auth::check() && Auth::user()->role->admin) {
            Auth::loginUsingId($id);
            return redirect()->route('user.dashboard', ['id' => $id]);
        }

        return redirect()->route('home')->with('error', 'Unauthorized action.');
    }

    public function user_switch($id)
    {
        // Auth::loginUsingId(4, $remember = true);

        $user = User::where('id', $id)->first();
        Auth::loginUsingId($user->id, true);
        return redirect()->route('user.dashboard')->with('success', "You are logged in as $user->name !");

    }
    public function user_switch_stop()
    {


        // $user = User::where('id', 1);
        // Auth::loginUsingId($user->id, true);
        return redirect()->route('admin.dashboard')->with('success', "You are logged in as admin!");

    }
}
