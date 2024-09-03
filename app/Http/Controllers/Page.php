<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    public function Page( Request $request ) {
        return view('Home');
    }
}
