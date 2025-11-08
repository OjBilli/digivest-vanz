<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wire extends Model
{
    protected $fillable = [
        'amount', 'bank_name', 'account_number', 'country', 'swift_code', 'email', 'narration'
    ];
}
