<?php

namespace Shaparak\Database\models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $table = 'shaparak_terminals';

    protected $dates = ['setupDate'];

    public static function terminalTypes()
    {
        return [
            0 => "پایانه فروش رومیزی",
            1 => "درگاه پرداخت اینترنتی",
            2 => "درگاه پرداخت موبایلی",
            3 => "پایانه فروش بی سیم",

        ];
    }

    public function getCreatedAtFaAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:m');
    }
}
