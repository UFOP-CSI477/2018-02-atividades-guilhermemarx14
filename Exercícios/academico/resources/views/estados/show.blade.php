@extends('layout')

@section('conteudo')

  <h1>Estado: {{ $estado->nome }} - {{ $estado->sigla }}</h1>



  <p>Código: {{ $estado->id }}</p>
  <p>Editar:  </p>



  <a href="{{ route('estados.index') }}">Voltar</a>
  <a href="{{ route('estados.edit', $estado->id) }}">Editar</a>



  <form class="" action="{{ route('estados.destroy',$estado->id) }}" method="post" onsubmit="return confirm('Confirma exclusão do estado {{ $estado->nome }}?');">
    @csrf
    @method('DELETE')
    <input type="submit" name="" value="Excluir">
  </form>
@endsection
