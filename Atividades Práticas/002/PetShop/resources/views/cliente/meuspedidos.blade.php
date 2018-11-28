@extends('layout')

@section('titulo','Área do Cliente: Meus Pedidos')

@section('opcoesUser')
  <a class="dropdown-item" href="#">Minha conta</a>
  <a class="dropdown-item" href="/meuspedidos">Meus pedidos</a>
    <a class="dropdown-item" href="/">Sair</a>
@endsection


@section('conteudo')
<h1>Meu histórico de pedidos</h1>
<div class="table-responsive">

      <table class="table table-bordered table-striped table-hover">
      <!-- Cabeçalho //-->
        <thead>
          <tr>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Preço Unitário</th>
              <th>Valor total</th>
              <th>Data</th>
          </tr>
        </thead>
        <tbody>
                  <!-- Dados //-->

<?php foreach ($listaCompras as $compra):
  echo "<tr class=\"table-success\">";
  echo "<td>" . $compra->produto . "</td>";
  echo "<td>" . $compra->quantidade . "</td>";
  echo "<td>R\$ " . number_format($compra->preco,2,',','') . "</td>";
  echo "<td>R\$ " . number_format($compra->preco*$compra->quantidade,2,',','') . "</td>";
  echo "<td>" . $compra->data . "</td>";
  echo "</tr>";
 endforeach; ?>

      </table>
    </div>


@endsection
