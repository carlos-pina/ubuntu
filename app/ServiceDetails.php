<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    public function services()
    {
        return $this->belongsTo('App\Services');
    }
}
