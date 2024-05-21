<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;

class SiteController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::get();
        return view('site.index', ['categorias' => $categorias, 'receitas' => $receitas]);
    }

    public function categoria($id)
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::where('categoria_id', $id)->get();
        return view('site.index', ['categorias' => $categorias,'receitas' => $receitas]);
    }
}
