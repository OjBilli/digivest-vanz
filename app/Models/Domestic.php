<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domestic extends Model
{
    protected $fillable = [
        'amount', 'bank_name', 'account_number','account_name', 'narration'
    ];
}
