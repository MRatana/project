<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index()
    {    
        return response(Auth()->user()->product);
    }

}
