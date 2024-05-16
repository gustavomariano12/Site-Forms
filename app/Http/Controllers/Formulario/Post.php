<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;

class Forms extends Controller
{
    public function contato() {
        var_dump($_POST);
        return view('contact');
    }
}
