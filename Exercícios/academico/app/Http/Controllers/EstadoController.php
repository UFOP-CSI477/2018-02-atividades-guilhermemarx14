<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //exibe o formulario de receber os dados
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //persistencia dos dados do formulario
        //dd($request->all());
        //validação deve ser redundante

        //gravação em massa dos dados
        Estado::create($request->all());
        return redirect('/estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //se estivesse o $id
        // $estado = Estado::find($id)
        return view('estados.show')->with('estado',$estado);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estados.edit')->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
      $estado->fill($request->all());
      $estado->save();
      session()->flash('mensagem','Estado atualizado com sucesso!');
      return redirect()->route('estados.show',$estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //validacao -> chave estrangeira

        $estado->delete();
        session()->flash('mensagem','Estado excluído com sucesso.');
        return redirect()->route('estados.index');
    }
}
