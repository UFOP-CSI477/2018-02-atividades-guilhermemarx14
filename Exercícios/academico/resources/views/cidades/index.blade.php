@extends('layout')

@section('conteudo')

  <h1>Cidades</h1>

  @foreach($cidades as $c)
    <p>{{$c->nome}}</p>
  @endforeach

@endsection
