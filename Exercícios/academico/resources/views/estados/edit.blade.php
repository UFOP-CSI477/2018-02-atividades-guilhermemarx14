@extends('layout')

@section('conteudo')

<h1>Editar Estado</h1>


<form action="{{ route('estados.update',$estado->id) }}" method="post">
  @csrf
  @method('PATCH')

  <p>Nome: <input type="text" name="nome" value="{{ $estado->nome }}"></p>
  <p>Sigla: <input type="text" name="sigla" value="{{ $estado->sigla }}"></p>


  <input type="submit" name="btnSalvar" value="Salvar">
</form>


@endsection
