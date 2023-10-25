<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TratamentosController extends Controller
{
    public function index()
    {
        return view('tratamentos');
    }
}
