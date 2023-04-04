<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      'customer_id',
      'total',
    ];
    protected $casts = [
        'total' => 'decimal:2',
    ];
    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
