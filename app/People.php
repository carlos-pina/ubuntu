<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Get the user that owns the people.
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
