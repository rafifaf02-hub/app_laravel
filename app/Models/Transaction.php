<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = ['customer_id',        'invoice',        'weight',        'total_price',        'status',];
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
