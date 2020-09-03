<?php

namespace Shaparak\Database\models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = "shaparak_responses";

    protected $fillable = [
        "tracking_number",
        "tracking_number_psp",
        "status",
        "request_date",
        "description",
        "request_type",
        "merchant_id",
        "related_merchants",
        "data",
        "request_rejection_reasons",
        "request_details",
        "success",
    ];

    public static function status()
    {
        return [
            0 => "توضیحات",
            1 => "رد نهایی",
            2 => "در انتظار ارائه سرویس درخواستی",
            3 => "تأخیر در پردازش",
            4 => "تایید نهایی",
        ];
    }

    public static function requestType()
    {
        return [
            0 => "تغییر آدرس فروشگاه پذیرندگی",
            1 => "فعالسازی مجدد ترمینال",
        ];
    }

    public function getCreatedAtFaAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:m');
    }
}
