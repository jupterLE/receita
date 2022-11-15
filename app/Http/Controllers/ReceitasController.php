<?php

namespace App\Http\Controllers;

use App\Models\Receitas;
use Illuminate\Http\Request;

class ReceitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $ = ::all();
       // return view('frontpage.index', array(''=>$, 'busca'=>null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $ = new Receita();
        //$ ->nome = $request->input('nome');
        //$ ->conteudo = $request->input('conteudo');
        //$ ->imagem = $request->input('imagem');
        //if($->save()){
         //   return redirect('');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function show(Receitas $receitas)
    {
       // $ = ::find($id);
      //  return view('frontpage.show', array(''=>$));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Receitas $receitas)
    {
        //$ = ::find($id)
       // return view('.edit',array(''=>$));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receitas $receitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receitas $receitas)
    {
        //$ = ::find($id);
       // $ ->delete();
      //  Session::flash('mensagem', 'receita excluida com sucesso!');
       // return redirect(url('/'));

    }
}
