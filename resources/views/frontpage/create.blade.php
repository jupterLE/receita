@extends('layout.php')
@section('title', 'Criar nova Receita')
@section('content')

    <h1>Criar nova Receita</h1>
    <br>
{{Form::open(['route' => '', 'method' => 'POST'])}}
    {{Form::label('nome', 'Nome')}}
    {{Form::open('nome','',['class => 'form-control', 'required', 'placeholder'=>'Nome'])}}
    {{Form::label('conteudo', 'Conteudo')}}
    {{Form::open('conteudo','',['class => 'form-control', 'required', 'placeholder'=>'Conteudo'])}}
    {{Form::label('imagem', 'Imagem')}}
    {{Form::open('imagem','',['class => 'form-control', 'required', 'placeholder'=>'aqui fica a imagem'])}}
    
    <br>
    {{Form::submit('Salvar'['class'=>'btn btn-success'])}}
    {!!Form::button('Cancelar'['onclick'=>'javascript:history.go(-1)','class'=>btn btn-secondary])!!}
{{Form::close()}}
@endsection  