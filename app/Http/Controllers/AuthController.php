<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController
{
    public function callback(Request $request)
    {
        Log::info(print_r($request, true));
    }
}
