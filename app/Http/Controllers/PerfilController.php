<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;

class PerfilController extends Controller
{

    public function index()
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('site.perfil', ['categorias' => $categorias, 'perfil' => $perfil]);
    }
}
