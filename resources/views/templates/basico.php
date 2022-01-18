<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Erica+One&display=swap" rel="stylesheet">  
    @stack('style')
  </head>
<body>
    <header class="mb-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{route('home')}}" class="nav-link px-2 @if ($pagina == 'home') @endif">Inicial</a></li>
          <li><a href="{{route('produtos')}}" class="nav-link px-2 @if ($pagina == 'produtos')  @endif">Produtos</a></li>
          <li><a href="/usuarios" class="nav-link px-2 @if ($pagina == 'usuarios')@endif">Usuários</a></li>
          <li><a href="{{route('blog')}}" class="nav-link px-2 @if ($pagina == 'blog') @endif">Blog</a></li>
        </ul>

        <div class="text-end">
