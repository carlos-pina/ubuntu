<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    public function service_details()
    {
        return $this->hasMany('App\ServiceDetails');
    }
}
