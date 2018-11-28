@extends('layout')

@section('titulo','Área do Cliente')

@section('opcoesUser')
  <a class="dropdown-item" href="#">Minha conta</a>
  <a class="dropdown-item" href="/meuspedidos">Meus pedidos</a>
  <a class="dropdown-item" href="/">Sair</a>

@endsection


@section('conteudo')
<h1>Bem vindo de volta, {{$cliente->nome}}!!</h1>



@endsection
