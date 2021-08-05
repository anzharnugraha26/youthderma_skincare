<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [];

    public const PAYMENT_CHANELS = [
        'credit_card', 'mandiri_clickpay'
    ];

    public const EXPIRY_DURATION = 7;
    public const EXPIRY_UNIT = 'days';
    public const CHALLENGE = 'challenge';
    public const SUCCESS = 'success';
    public const SETTLEMENT = 'settlement';
    public const PENDING = 'pending';
    public const DENY = 'deny';
    public const EXPIRE = 'expire';
    public const CANCEL = 'cancel';
    public const PAYMENTCODE = 'PAY';
}
