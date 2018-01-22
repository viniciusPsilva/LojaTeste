<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoFormRequest;
use App\models\Caracteristica;
use App\models\Categoria;
use App\models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('home', compact('produtos', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $caracteristas = Caracteristica::all();

        return view('produto.create', compact('categorias', 'caracteristas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoFormRequest $request)
    {
        $formData = $request->all();
        $produto = Produto::create($formData);
        if (isset($formData['categoria'])) {
            $produto->categorias()->sync($formData['categoria']);
        }
        if (isset($formData['caracteristica'])) {
            $produto->caracteristicas()->sync($formData['caracteristica']);
        }

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $caminho = $request->imagem->storeAs('public/imagemsProdutos', "produto_$produto->id." . $imagem->extension());
            $formData['imagem'] = $caminho;
            $produto->update($formData);
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produto.show',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
