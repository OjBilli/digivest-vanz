<?php

namespace App\Models;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
   /**
   * Get the plan that owns the transaction
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function plan(): BelongsTo
  {
      return $this->belongsTo(Plan::class);
  }


  /**
   * Get the currency that owns the Transaction
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function currency(): BelongsTo
  {
      return $this->belongsTo(Currency::class);
  }
}
