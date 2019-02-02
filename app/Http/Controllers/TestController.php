<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function seeText()
    {
        return 'This is the first test using laravel dusk';
    }

    public function clickLink()
    {
        return view('click-link');
    }

    public function duskView()
    {
        return view('dusk-view');
    }
}
