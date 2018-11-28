@extends('layout')

@section('titulo','Cadastro de clientes')

@section('opcoesUser')
<a class="dropdown-item" href="/">Sair</a>
@endsection
@section('conteudo')
<h1>Cadastro de usuário</h1>

<form> <!-- class="form-inline" //-->

  <div class="form-group">
    <label for="nome">Nome de usuário</label>
    <input type="text" name="nome" id="nome" class="form-control form-control-lg">
  </div>

  <div class="form-group">
    <label for="usuario">E-mail</label>
    <input type="email" class="form-control" id="usuario">
  </div>

  <div class="form-group">
    <label for="pass">Senha</label>
    <input type="password" name="senha" id="pass" class="form-control">
  </div>



  <input type="submit" class="btn btn-danger" value="Criar">

  <input type="reset" class="btn btn-warning" value="Limpar">

</form>


<script src="{{ URL::asset('/js/cadastro.js') }}"></script>
@endsection
