<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/welcome', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::view('/service', 'service')->name('service');
Route::view('/loan', 'loan')->name('loan');
Route::view('/contact', 'contact')->name('contact');


Route::get('/register', [CountryController::class, 'index'])->name('register');
Route::get('/login', [CountryController::class, 'create'])->name('login');
Route::get('/pin', [CountryController::class, 'pin'])->name('verify.pin');
Route::post('/verify-pin', [CountryController::class, 'verifyPin'])->name('verify.pin.post');

Route::prefix('user')->middleware(['auth', 'verified', 'check.pin','status'])->group(function () {
    // Route::view('/dashboard', 'TransactionController@dashboard')->name('user.dashboard');
    Route::get('/dashboard', [InvestController::class, 'check'])->name('user.dashboard');
    Route::get('/portfolio', [InvestController::class, 'portfolio'])->name('user.portfolio');

    Route::get('/link', [InvestController::class, 'link'])->name('user.link');

    Route::get('/deposit', [TransactionController::class, 'depositView'])->name('user.deposit');
    Route::post('/deposit', [TransactionController::class, 'deposit'])->name('user.deposit');

    Route::get('/depositp', [TransactionController::class, 'depositpView'])->name('user.depositp');
    Route::get('/withdraw', [TransactionController::class, 'withdrawView'])->name('user.withdraw');
    Route::get('/confirm/{transaction}', [TransactionController::class, 'confirm'])->name('user.confirm');

    Route::get('/user/withdraw-otp', [TransactionController::class, 'showOtpFormWith'])->name('withdraw.showOtpForm');
    Route::post('/user/withdraw-otp', [TransactionController::class, 'withdrawOtp'])->name('withdraw.verifyOtp');

    Route::get('/transactions', [TransactionController::class, 'transactonsView'])->name('user.transactions');

    Route::get('/wire_transactions', [TransactionController::class, 'wireView'])->name('user.wireTran');

    Route::get('/domestic_transactions', [TransactionController::class, 'domesticView'])->name('user.domesticTran');

    Route::get('/loan_transactions', [TransactionController::class, 'loanView'])->name('user.loanTran');


    Route::get('/transfer_page', [TransactionController::class, 'transfer'])->name('user.transfer');


    Route::get('/investments', [TransactionController::class, 'investment'])->name('user.investments');

    Route::get('/virtual_card', [UserController::class, 'virtual'])->name('user.virtual');
    Route::post('/virtual_action', [UserController::class, 'virtual_request'])->name('user.virtual.card');

    Route::get('/request_cheque', [UserController::class, 'cheque'])->name('user.cheque');
    Route::post('/cheque_action', [UserController::class, 'cheque_request'])->name('user.cheque.request');

    Route::get('/domestic', [UserController::class, 'domestic'])->name('user.domestic');
    Route::post('/dom', [UserController::class, 'domesticT'])->name('user.domesticT');

    Route::get('/user/verify-otp', [UserController::class, 'showOtpForm'])->name('domestic.showOtpForm');
    Route::post('/user/verify-otp', [UserController::class, 'verifyOtp'])->name('domestic.verifyOtp');

    Route::get('/wire_transfer', [UserController::class, 'wire'])->name('user.wire');
    Route::post('/transfer', [UserController::class, 'wireT'])->name('user.wireT');

    Route::get('/user/wire-otp', [UserController::class, 'showOtpFormW'])->name('wire.showOtpForm');
    Route::post('/user/wire-otp', [UserController::class, 'wireOtp'])->name('wire.verifyOtp');

    Route::post('/verify', [UserController::class, 'verify_id'])->name('user.verify_id');

    Route::get('/verify_user', [UserController::class, 'verifyUser'])->name('user.verifyUser');

    Route::post('/card_request', [UserController::class, 'card_request'])->name('user.card_request');

    Route::post('/loan', [UserController::class, 'loan'])->name('user.loan');

     Route::get('/loan_page', [UserController::class, 'loanP'])->name('user.loanP');



    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile', [UserController::class, 'update'])->name('user.profile');

    Route::get('/change-password', [UserController::class, 'Viewpass'] )->name('user.password');
    Route::post('/edit-password', [UserController::class, 'editPassword'])->name('user.edit-password');
    Route::post('/edit-pin', [UserController::class, 'editPin'])->name('user.edit-pin');

    Route::get('/user_pin', [UserController::class, 'pinUser'])->name('user.pin');




    Route::get('/referral', [UserController::class, 'referral'])->name('user.referral');
    Route::view('/wallet', 'user.wallet')->name('user.wallet');
    Route::get('/invest', [InvestController::class, 'index'])->name('user.invest');
    Route::post('/invest', [InvestController::class, 'create'])->name('user.invest');
    Route::view('/support','user.support')->name('user.support');
    Route::view('/global', 'user.global')->name('user.global');


    Route::post('/withdraw', [TransactionController::class, 'withdraw'])->name('user.withdraw');
});
Route::prefix('admin')->middleware(['auth', 'check.pin', 'admin'])->group(function (){
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/database', [AdminController::class, 'database'])->name('admin.database');
    Route::get('/user-withdraws/{id}',[AdminController::class, 'userWithdraws'])->name('admin.user-withdraws');
    Route::get('/confirm-withdraws/{id}',[AdminController::class, 'confirmWithdraws'] )->name('admin.confirm-withdraws');
    Route::post('/admin/loans/withdraws/{id}', [AdminController::class, 'cancelWithdraw'])->name('admin.cancel-withdraw');

    Route::delete('/admin/withdraws/{id}', [AdminController::class, 'destroyW'])->name('admin.delete-withdraw');

    Route::get('/user-loans/{id}',[AdminController::class, 'userLoans'])->name('admin.user-loans');
    Route::get('/confirm-loans/{id}',[AdminController::class, 'confirmLoans'] )->name('admin.confirm-loans');
     Route::post('/admin/loans/cancel/{id}', [AdminController::class, 'cancelLoan'])->name('admin.cancel-loan');

    Route::get('/user-domestics/{id}',[AdminController::class, 'userDomestics'])->name('admin.user-domestics');
    Route::get('/confirm-domestics/{id}',[AdminController::class, 'confirmDomestics'] )->name('admin.confirm-domestics');
     Route::post('/admin/domestics/cancel/{id}', [AdminController::class, 'cancelDomestic'])->name('admin.cancel-domestic');

    Route::get('/user-documents/{id}',[AdminController::class, 'userDocuments'])->name('admin.user-documents');
    Route::get('/confirm-documents/{id}',[AdminController::class, 'confirmDocuments'] )->name('admin.confirm-documents');
     Route::post('/admin/documents/cancel/{id}', [AdminController::class, 'cancelDocument'])->name('admin.cancel-document');

    Route::get('/user-virtuals/{id}',[AdminController::class, 'userVirtuals'])->name('admin.user-virtuals');
    Route::get('/confirm-virtuals/{id}',[AdminController::class, 'confirmVirtuals'] )->name('admin.confirm-virtuals');
    Route::post('/admin/virtuals/cancel/{id}', [AdminController::class, 'cancelVirtual'])->name('admin.cancel-virtual');

    Route::get('/user-cheques/{id}',[AdminController::class, 'userCheques'])->name('admin.user-cheques');
    Route::get('/confirm-cheques/{id}',[AdminController::class, 'confirmCheques'] )->name('admin.confirm-cheques');
    Route::post('/admin/documents/cheques/{id}', [AdminController::class, 'cancelCheque'])->name('admin.cancel-cheque');


    Route::get('/user-wires/{id}',[AdminController::class, 'userWires'])->name('admin.user-wires');
    Route::get('/confirm-wires/{id}',[AdminController::class, 'confirmWires'] )->name('admin.confirm-wires');
    Route::delete('/admin/wires/{id}', [AdminController::class, 'destroyWire'])->name('admin.delete-wire');


     Route::post('/admin/wires/cancel/{id}', [AdminController::class, 'cancelWire'])->name('admin.cancel-wire');

    Route::get('/user-wires-edit/{wire_id}',[AdminController::class, 'userWiresEdit'])->name('admin.wire-edit');
    Route::put('/update-wire/{wire_id}', [AdminController::class, 'editWire'])->name('admin.edit-wire');

    Route::get('/user-domestic-edit/{domestic_id}',[AdminController::class, 'userDomesticsEdit'])->name('admin.domestic-edit');
    Route::put('/update-domestic/{domestic_id}', [AdminController::class, 'editDomestic'])->name('admin.edit-domestic');


    Route::get('/deposit/{id}', [AdminController::class, 'deposit'])->name('admin.deposit');
    Route::post('/deposit', [AdminController::class, 'updateWallet'])->name('admin.update-wallet');

    Route::post('/admin/deposits/cancel/{id}', [AdminController::class, 'cancel'])->name('admin.cancel-deposit');






    Route::get('/wire-deposit/{id}', [AdminController::class, 'wire_deposit'])->name('admin.wire.deposit');
    Route::post('/wire-deposit', [AdminController::class, 'updateWire'])->name('admin.update-wire');

    Route::get('/user-deposits/{id}', [AdminController::class, 'userDeposits'])->name('admin.user-deposits');
    Route::get('/confirm-deposits/{id}', [AdminController::class, 'confirmDeposits'])->name('admin.confirm-deposits');

    Route::delete('/admin/deposits/{id}', [AdminController::class, 'destroy'])->name('admin.delete-deposit');


    Route::view('/trade', 'admin.trade')->name('admin.trade');
    Route::get('/delete',[AdminController::class, 'delete'] )->name('admin.delete');
    Route::get('/user-delete/{id}',[AdminController::class, 'block'] )->name('admin.user-delete');
    Route::get('/user-recover/{id}', [AdminController::class, 'recover'])->name('admin.user-recover');

    Route::get('/wallet', [AdminController::class, 'wallet'])->name('admin.wallet');
    Route::post('/wallet', [AdminController::class, 'walletUpdate'] )->name('admin.wallet');


    Route::get('/admin/dashl/{id}',[AdminController::class, 'user_switch'] )->name('admin.userlogin');
    Route::get('/dashA',[AdminController::class, 'user_switch_stop'] )->name('admin.back');

    // Route::get('/admin/login-as-user/{id}', [AdminController::class, 'loginAsUser'])->name('admin.loginAsUser');
});
