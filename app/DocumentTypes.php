<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentTypes extends Model
{
    protected $keyType = string;

    public $incrementing = false;

    public $timestamps = false;
}
