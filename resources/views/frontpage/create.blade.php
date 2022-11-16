@extends('layout.app')
@section('title', 'Criar nova Receita')
@section('content')

    <h1>Criar nova Receita</h1>
    <br>
    {{Form::open(['route'=> 'frontpage.store', 'method' => 'POST', 'enctype'=>'multipart/form-data'])}}
    {!!Form::label('nome', 'Nome') !!}
    {!!Form::text('nome','',['class'=>'form-control container-sm','required','placeholder'=>'Nome da Receita']) !!}
    {!!Form::label('conteudo', 'Conteudo')!!}
    {!!Form::text('conteudo','',['class' => 'form-control container-sm', 'required', 'placeholder'=>'Conteudo'])!!}
    {!!Form::label('imagem', 'Imagem')!!}
    {!!Form::text('imagem','',['class' => 'form-control container-sm', 'required', 'placeholder'=>'Aqui fica a imagem'])!!}
    
    <br>
    {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
 
{{Form::close()}}
@endsection  