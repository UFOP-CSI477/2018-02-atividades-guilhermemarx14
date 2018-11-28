<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm navbar-danger bg-danger">

      <div class="mx-auto order-0 w-10">
        <a class="navbar-brand mx-auto text-white" href="/">MyPetShop</a>
      </div>
      <div class="mx-auto order-1 w-40">
        <a class="navbar-brand mx-auto text-white" href="/">Produtos</a>
      </div>
      <div class="navbar order-3 w-50">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropleft">
              <a class="nav-link dropdown-toggle text-white " href="#" data-toggle="dropdown">

              </a>

              <div class="dropdown-menu dropdown-menu-left">
                @yield('meuCarrinhoDeCompras','Carrinho Vazio')
              </div>

            </li>

            <li class="nav-item" style="font-size: 24px;">
              <a class="far fa-shopping-cart text-white"> </a>
            </li>

          <li class="nav-item dropleft">

              <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown">

              </a>

              <div class="dropdown-menu dropdown-menu-left">
                @yield('opcoesUser')
              </div>

            </li>
          <li class="nav-item" style="font-size: 24px;">
            <a class="far fa-user text-white"> </a>
          </li>

        </ul>

      </div>
    </nav>

<div class="jumbotron">
  @yield('conteudo')
</div>



  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
