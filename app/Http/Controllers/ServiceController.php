<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ServiceController extends Controller
{
    public function service($local) {

            App::setLocale( $local );
            
            return view("service");
    }
}
