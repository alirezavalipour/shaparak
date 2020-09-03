<?php

namespace Shaparak\Database\models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shaparak_shops';

    protected $dates = ['certificateExpiryDate', 'rentalExpiryDate', 'certificateIssueDate', 'etrustCertificateIssueDate', 'etrustCertificateExpiryDate'];

    public static function ownershipType()
    {
        return [
            0 => "مالک",
            1 => "مستاجر",
        ];
    }

    public static function businessType()
    {
        return [
            0 => "فروشگاه صرفا فیزیکی",
            1 => "فروشگاه فیزیکی و مجازی",
            2 => "فروشگاه صرفا مجازی",
        ];
    }
    public static function etrustCertificateType()
    {
        return [
            0 => "یک ستاره",
            1 => "دو ستاره",
        ];
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public   function acceptors()
    {
        return $this->hasMany(Acceptor::class);
    }

    public function getCreatedAtFaAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:m');
    }

}
