<?php

namespace App\Http\Controllers\AdminArea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class parentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
