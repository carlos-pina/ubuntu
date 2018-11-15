<?php

namespace App\Http\Controllers;

use App\ServiceDetails;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function show($id)
    {
        $details = ServiceDetails::where('services_id', '=', $id)->get();
        return $details;
    }
}
