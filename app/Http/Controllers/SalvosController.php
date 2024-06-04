<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;

class SalvosController extends Controller
{

    public function index()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::get();
        return view('site.salvos', ['categorias' => $categorias, 'receitas' => $receitas]);
    }
}