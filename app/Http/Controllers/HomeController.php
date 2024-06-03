<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;

class HomeController extends Controller
{

    public function index()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::limit(6)->get();
        return view('site.home', ['categorias' => $categorias, 'receitas' => $receitas]);
    }
}
