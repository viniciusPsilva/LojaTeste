<?php

namespace App\Http\Controllers;

use App\models\Categoria;
use App\models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all()->sortBy('nome');
        $produtos = Produto::all();
        return view('home',compact('categorias','produtos'));
    }

    public function pesquisarProduto(Request $request){
        $categorias = Categoria::all();
        $dataForm = $request->all();
        $nomeProduto = $dataForm['nome'];
        $produtos = Produto::where('nome','like','%'.$nomeProduto.'%')->get();

        return view('home', compact('produtos','categorias'));
    }
}
