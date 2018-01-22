<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaracteristicaFormRequest;
use App\models\Caracteristica;
use Illuminate\Http\Request;

class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristicas = Caracteristica::all();
        return view('caracteristica.index',compact('caracteristicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caracteristica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaracteristicaFormRequest $request)
    {
        Caracteristica::create($request->all());
        return redirect()->route('caracteristica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caracteristica = Caracteristica::find($id);
        return view('caracteristica.create',compact('caracteristica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CaracteristicaFormRequest $request, $id)
    {
        Caracteristica::find($id)->update($request->all());
        return redirect()->route('caracteristica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Caracteristica::find($id)->delete();
        return redirect()->route('caracteristica.index');
    }
}
