@extends('layout')

@section('titulo','Página Inicial')

@section('opcoesUser')
  <a class="dropdown-item" href="#">Login</a>
  <a class="dropdown-item" href="/cadastro">Cadastro</a>
@endsection


@section('conteudo')
<img width="200%" src="/img/banner.jpg" class="img-fluid" alt="Responsive image">

@endsection
