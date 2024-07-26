<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataInputController extends Controller
{
    public function show()
    {
        return view('console.datainput');
    }
}
