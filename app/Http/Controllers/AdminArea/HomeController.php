<?php

namespace App\Http\Controllers\AdminArea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends parentController
{
    public function index()
    {
        return view('AdminArea.Pages.dashboard.index');
    } 
}
