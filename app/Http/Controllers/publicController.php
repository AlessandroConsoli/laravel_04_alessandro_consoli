<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function welcomePage() {
        $title = 'secondo blog di prova';
        return view('welcome');
    }
}
