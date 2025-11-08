<?php

namespace App\Models;

use App\Models\Loan;
use App\Models\Wire;
use App\Models\Invest;
use App\Models\Wallet;
use App\Models\Virtual;
use App\Models\Domestic;
use App\Models\Identity;
use App\Models\Transaction;
use App\Models\Notification;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'currency_type', 'account_type','occupation','email','username', 'account_number','password','country','phone','city','address_1','annual_income','profile_picture','ssn','dob',
    ];

    public static function generateUniqueAccountNumber()
    {
        do {
            $accountNumber = mt_rand(1000000000, 9999999999);
        } while (self::where('account_number', $accountNumber)->exists());

        return $accountNumber;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bitcoinWallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'user_id', 'id')->where('currency_id', 1);
    }
        public function usdtWallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'user_id', 'id')->where('currency_id','2');
    }
    /**
     * Get the usdteWallet associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wireUSDWallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'user_id', 'id')->where('currency_id','3');
    }
    /**
     * Get the bnbWallet associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wireEURWallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'user_id', 'id')->where('currency_id','4');
    }
    /**
     * Get the dogeWallet associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    /**
     * Get the wireWallet associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wireGBPWallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'user_id', 'id')->where('currency_id','5');
    }
    /**
     * Get all of the wallets for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wallets(): HasMany
    {
        return $this->hasMany(Wallet::class);
    }

    /**
     * Get all of the deposits for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deposits(): HasMany
    {
        return $this->hasMany(Transaction::class)->where('type', 'deposit')->latest();
    }

    public function withdraws(): HasMany
    {
        return $this->hasMany(Transaction::class)->where('type', 'withdraw')->latest();
    }
    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class);
    }

    public function cheques(): HasMany
    {
        return $this->hasMany(Cheque::class);
    }
    public function domestics(): HasMany
    {
        return $this->hasMany(Domestic::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
    public function wires(): HasMany
    {
        return $this->hasMany(Wire::class);
    }
    public function documents(): HasMany
    {
        return $this->hasMany(Identity::class);
    }

    public function virtuals(): HasMany
    {
        return $this->hasMany(Virtual::class);
    }

    public static function totalBalance()
    {
        return number_format(Wallet::where('user_id', Auth::user()->id)->sum('balance'));
    }

    /**
     * Get all of the investments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function investments(): HasMany
    {
        return $this->hasMany(Invest::class);
    }
}
