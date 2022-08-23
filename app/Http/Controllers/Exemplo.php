<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exemplo extends Controller
{
    public function index() {
        return view('welcome');
    }
}
