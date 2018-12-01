<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>

  </head>
  <body>
    @if( Session::has('mensagem'))
      <h1>{{ Session::get('mensagem') }}</h1>
    @endif

    <ul>
        <li><a href="/">Principal</a></li>
        <li><a href="/lista">Lista</a></li>
        <li><a href="/info">Informações</a></li>
        <li><a href="/contato">Contato</a></li>
    </ul>

    @yield('conteudo')


  </body>
</html>
