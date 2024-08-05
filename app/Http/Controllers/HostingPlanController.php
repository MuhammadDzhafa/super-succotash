<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingPlanController extends Controller
{
    public function index()
    {
        return view('app.hosting-plans.index');
    }
}
