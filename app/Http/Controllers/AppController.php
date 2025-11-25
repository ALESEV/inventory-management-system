<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homepageApp()
    {
        return view("app.homepage");
    }
}
