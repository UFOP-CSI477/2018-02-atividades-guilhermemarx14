@extends('layout')

@section('conteudo')

<h1>Inserir Estado</h1>


<form action="/estados" method="post">
  @csrf
  <p>Nome: <input type="text" name="nome"></p>
  <p>Sigla: <input type="text" name="sigla"></p>


  <input type="submit" name="btnSalvar" value="Incluir">
</form>


@endsection
