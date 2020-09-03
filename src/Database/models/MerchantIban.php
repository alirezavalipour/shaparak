<?php

namespace Shaparak\Database\models;

use Illuminate\Database\Eloquent\Model;

class MerchantIban extends Model
{

    protected $table = "shaparak_merchant_ibans";

    protected $fillable = [
        'merchantIban',
        'description',
        'merchant_id',
    ];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }


}
