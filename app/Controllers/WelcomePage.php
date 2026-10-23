<?php

namespace App\Controllers;

class WelcomePage extends BaseController
{
    public function index()
    {
        return view('my_first_view');
    }
}