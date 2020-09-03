<?php

namespace Shaparak\Database\models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{

    protected $table = "shaparak_merchants";

    protected $fillable = [
        'firstNameFa',
        'lastNameFa',
        'fatherNameFa',
        'firstNameEn',
        'lastNameEn',
        'fatherNameEn',
        'gender',
        'birthDate',
        'registerDate',
        'nationalCode',
        'registerNumber',
        'comNameFa',
        'comNameEn',
        'merchantType',
        'residencyType',
        'vitalStatus',
        'birthCrtfctSerial',
        'birthCrtfctSeriesLetter',
        'birthCrtfctSeriesNumber',
        'birthCrtfctNumber',
        'nationalLegalCode',
        'commercialCode',
        'countryCode',
        'foreignPervasiveCode',
        'passportNumber',
        'passportExpireDate',
        'description',
        'telephoneNumber',
        'cellPhoneNumber',
        'emailAddress',
        'webSite',
        'fax',
        'merchantIbans',

    ];

    protected $dates = [
        'birthDate',
        'registerDate',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function merchantIbans()
    {
        return $this->hasMany(MerchantIban::class);
    }

    public function contract()
    {
        return $this->hasOne(Contract::class);
    }

    public function getCreatedAtFaAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:m');
    }

}
