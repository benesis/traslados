<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('titulo-pagina', 'Traslados Empresa X')</title>

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="icon" href="{{asset('./img/icon.png')}}">

</head>
<body class="root">
 
  <!--Navbar-->
  @section('navbar')
        @include('componentes.navbar')
  @show
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Nuevo Traslado
 </button>

<!-- contenedor -->
  <div class="container">
    @yield('content', 'Default Content')
  </div>

<!--footer-->
@section('footer')
        @include('componentes.footer')
@show
<!--Modal-->
@section('modal')
        @include('componentes.modal')
@show
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
