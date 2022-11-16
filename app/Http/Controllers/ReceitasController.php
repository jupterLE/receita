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
        $receitas = Receitas::all();
       return view('frontpage.index', array('receitas'=>$receitas, 'busca'=>null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('frontpage/create',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receitas = new Receitas();
        $receitas ->nome = $request->input('nome');
        $receitas ->conteudo = $request->input('conteudo');
        $receitas ->imagem = $request->input('imagem');
        if($receitas->save()){
            return redirect('frontpage');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receita = Receitas::find($id);
        return view('frontpage.show', ['receita'=>$receita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receita = Receitas::find($id);
        return view('frontpage.edit',['receita'=>$receita]);
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
    public function destroy($id)
    {
        $receita = Receitas::find($id);
        $receita ->delete();
        Session::flash('mensagem', 'receita excluida com sucesso!');
        return redirect(url('receitas/'));

    }
}
