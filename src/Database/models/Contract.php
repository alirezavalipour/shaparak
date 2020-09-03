<?php

namespace Shaparak\Database\models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'shaparak_contracts';

    protected $dates = [
        "contractDate",
        "expiryDate",
        "serviceStartDate",
    ];
    public function getCreatedAtFaAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:m');
    }

}
