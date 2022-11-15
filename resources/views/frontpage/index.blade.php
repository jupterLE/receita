@extends('layout.php')
@section('title', 'Listagem de ')
@section('content')
    <h1>Listagem de receitas</h1>
    @if(Session::has('mensagem'))
        <div class="alert alert-info">
            {{Session::get('mensagem')}}
        </div>
    @endif
    <ul>
      <!--  @foreach () 
        <li>
            <a href= "{{url('/'.$->id)}}">
                {{$->nome}}</a>
        </li>
        @endforeach 
</ul>
@endsection 
<br />
<a class="btn btn-success" href="{{url('')}}">Adicionar</a>
<br><br>
<table class="table table-striped">
    @foreach ($ as $)
        <tr>
            <td>
                <a href="{{url(''.$->id)}}">{{$->nome}}</a>
</td>
</tr>
@endforeach
</table>
@endsection    -->