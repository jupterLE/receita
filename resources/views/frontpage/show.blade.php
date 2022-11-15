@extends('layout.php')
@section('title', ' - {{$->nome}}')
@section('content')
    <h1>Receita - {{$->nome}}</h1>
    
    <ul>
        <li>ID: {{$->id}}</li>
        <li>Como Fazer: {{$->conteudo}}</li>
        <li>{{$->imagem}}</li>
     </ul>
    
     {{Form::open(['route'=>['.destroy',$->id],'method'=>'DELETE'])}}
    <a href="{{url('/.$->id.'/edit')}}" class="btn btn-success">Alterar</a>
     {{Form::submit(['Excluir'=>['class'=>'btn btn-danger'])}}
    <a href="{{url('/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
     @endsection   