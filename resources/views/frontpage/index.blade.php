@section('content')
@extends('layout.app')
@section('title', 'Listagem de receitas')
    <h1>Listagem de receitas</h1>
    
    @if(Session::has('mensagem'))
        <div class="alert alert-info">
            {{Session::get('mensagem')}}
        </div>
    @endif
 
<br />
<a class="btn btn-success" href="{{url('frontpage/create')}}">Adicionar</a>
<br><br>
<table class="table table-striped">
    @foreach ($receitas as $receita)
        <tr>
            <td>
                <a href="{{url('frontpage/'.$receita->id)}}">
                    {{$receita->nome}}</a>
</td>
</tr>
@endforeach
</table>
@endsection
   