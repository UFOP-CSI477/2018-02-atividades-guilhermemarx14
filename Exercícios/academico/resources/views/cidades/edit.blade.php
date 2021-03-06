@extends('layout')

@section('conteudo')

<h1>Editar Cidade</h1>


<form action="{{ route ('cidades.update',$cidade->id)}}" method="post">
  @csrf
  @method('PATCH')
  <p>Nome: <input type="text" name="nome" value="{{ $cidade->nome }}"></p>
  <p>Estado: </p>
  <select name="estado_id">
    @foreach($estados as $e)
      <option value="{{ $e->id }}"
        @if ($e->id == $cidade->estado_id)
          selected
        @endif
        >{{ $e->nome }}</option>

    @endforeach
  </select>


  <input type="submit" name="btnSalvar" value="Incluir">
</form>


@endsection
