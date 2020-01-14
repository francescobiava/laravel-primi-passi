<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cdsController extends Controller
{
    public function getCds() {
        return view('cds');
    }
}
