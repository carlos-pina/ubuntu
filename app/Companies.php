<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companies extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Get the user that owns the company.
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
