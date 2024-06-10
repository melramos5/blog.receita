<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::limit(6)->get();
        $receitasRecentes = Postagem::limit(8)->orderBy('id', 'desc')->get();
        return view('site.home', ['categorias' => $categorias, 'receitas' => $receitas, 'receitasRecentes' => $receitasRecentes, 'perfil' => $perfil]);
    }
}
