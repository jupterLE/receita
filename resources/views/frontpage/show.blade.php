@extends('layout.app')
@section('title', 'Receita - {{$receita->nome}}')
@section('content')
    <h1>Receita - {{$receita->nome}}</h1>
    
    <ul>
        <li>ID: {{$receita->id}}</li>
        <li>Como Fazer: {{$receita->conteudo}}</li>
        <li>{{$receita->imagem}}</li>
     </ul>
    
     {{Form::open(['route'=>['frontpage.destroy',$receita->id],'method'=>'DELETE'])}}
    <a href="{{url('frontpage/'.$receita->id.'/edit')}}" class="btn btn-success">Alterar</a>
     {{Form::submit(['Excluir'=>['class'=>'btn btn-danger']])}}
    <a href="{{url('frontpage/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection   