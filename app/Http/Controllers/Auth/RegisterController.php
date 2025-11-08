<?php

namespace App\Http\Controllers\Auth;

use App\Mail\Custom;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'currency_type' => ['required', 'string', 'max:255'],
            'account_type' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'city' => ['required', 'string', 'max:255'],
            'address_1' => ['required', 'string', 'max:255'],
            'annual_income' => ['required', 'string', 'max:255'],

            'ssn' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
            'profile_picture' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // if ($data['referral']) {
        //     $ref_user = User::where('referral_code', $data['referral'])->first()->id;
        // } else {
        //     $ref_user = null;
        // }

        $account_number = $this->generateUniqueAccountNumber();

        $profilePictureFilename = $this->storeProfilePicture($data['profile_picture']);

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'currency_type' => $data['currency_type'],
            'account_type' => $data['account_type'],
            'occupation' => $data['occupation'],
            'email' => $data['email'],
            'username' => $data['username'],
            'account_number' => $account_number,
            'country' => $data['country'],
            'phone' => $data['phone'],
            'password' => $data['password'],

            'city' => $data['city'],
            'address_1' => $data['address_1'],
            'annual_income' => $data['annual_income'],

            'profile_picture' => $profilePictureFilename,
            'ssn' => $data['ssn'],
            'dob' => $data['dob'],

        ]);
        if (isset($data['image'])) {
            $file = $data['image'];
            $ext = $file->getClientOriginalExtension();
            $filename = \Str::slug($data['first_name'] . '-' . $data['last_name']) . '-' . time() . '.' . $ext;
            $file->storePubliclyAs('public/images', $filename);
            $user->profile_picture = $filename;
        }

        $user->save();

        $validated['account_number'] = User::generateUniqueAccountNumber();

        //create Btc wallet
        $btc = new Wallet();
        $btc->user_id = $user->id;
        $btc->balance = 0;
        $btc->currency_id = '1';
        $btc->save();


        //create cardano wallet
        $usdt = new Wallet();
        $usdt->user_id = $user->id;
        $usdt->balance = 0;
        $usdt->currency_id = '2';
        $usdt->save();


        //create bnb wallet
        $wireUSD = new Wallet();
        $wireUSD->user_id = $user->id;
        $wireUSD->balance = 0;
        $wireUSD->currency_id = '3';
        $wireUSD->save();


        //create doge wallet
        $wireEUR = new Wallet();
        $wireEUR->user_id = $user->id;
        $wireEUR->balance = 0;
        $wireEUR->currency_id = '4';
        $wireEUR->save();

        $wireGBP = new Wallet();
        $wireGBP->user_id = $user->id;
        $wireGBP->balance =0;
        $wireGBP->currency_id = '5';
        $wireGBP->save();

        $title = 'WELCOME TO ATLAS MARKET EDGERS';
        $content = "
        <strong>Hi $user->first_name $user->last_name,</strong><br><br>
        Thank you so much for allowing us to help you with your recent account opening. We are committed to providing our customers with the highest level of service and the most innovative banking products possible.<br><br>
        We are very glad you choose us as your financial institution and hope you will take advantage of our wide variety of savings, investment and loan products, all designed to meet your specific needs.<br><br>
        Below are your account login details:<br>
        <strong>ACCOUNT ID:</strong> {$user->account_number}<br>
        <strong>PINCODE:</strong> 12345<br>
        <strong>PASSWORD:</strong> (Use your created password)<br><br>
        For more detailed information about any of our products or services, please refer to our website, <a href='https://www.atlasmarketedgers.com'>https://www.atlasmarketedgers.com</a>, or visit any of our convenient locations.<br><br>
        Respectfully,<br>
        <strong>ATLAS MARKET EDGERS';</strong>";

        Mail::to($user->email)->send(new Custom($title, $title, $content));

        $title = 'Registeration Alert for New user';
        $content = 'A new user by name ' .$user->last_name .' just registered.';

        Mail::to('info@atlasmarketedgers.com')->send(new Custom($title, $title, $content));


        return $user;
    }
    protected function generateUniqueAccountNumber()
    {
        do {
            // Generate a 7-digit number
            $randomNumber = random_int(1000000, 9999999);
            // Concatenate "510" with the 7-digit number
            $accountNumber = '510' . $randomNumber;
        } while (User::where('account_number', $accountNumber)->exists());

        return $accountNumber;
    }
    protected function storeProfilePicture($image)
    {
        $ext = $image->getClientOriginalExtension();
        $filename = \Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . time() . '.' . $ext;
        $image->storePubliclyAs('public/images', $filename);

        return $filename;
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        return back()->with('success', 'Registration successful! Please check your email for verification and other details!!');

    }
}
