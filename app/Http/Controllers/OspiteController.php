<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OspiteController extends Controller
{
    public function index() {
      
      return view('ospiti');
    }
}
