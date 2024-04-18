<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MassaController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('categoria.massa');
    }
}
