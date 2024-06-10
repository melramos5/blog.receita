<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;

class ReceitaController extends Controller
{

    public function index()
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::get();
        return view('site.receita', ['categorias' => $categorias, 'receitas' => $receitas, 'perfil' => $perfil]);
    }

    public function show(string $id)
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $postagem = Postagem::find($id);
        return view('site.receita', ['postagem' => $postagem, 'categorias' => $categorias, 'perfil' => $perfil]);
    }
}

