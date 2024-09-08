<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function food () {
        return "burger";
    }

    
    public function beauty () {
        return "wardah";
    }

    public function home () {
        return "bpjs";
    }

    
    public function baby () {
        return "baby bottle";
    }
}
