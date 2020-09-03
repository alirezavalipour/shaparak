<?php

namespace Shaparak\Database\models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;

class Acceptor extends Model
{

    protected $table = 'shaparak_acceptors';

    public function terminals()
    {
        return $this->hasMany(Terminal::class);
    }

    public function getShaparakSettlementIbansAttribute($value)
    {
        return unserialize($value);
    }

    public function getCreatedAtFaAttribute()
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:m');
    }
}
