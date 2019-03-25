@extends('main')

@section('titulo-pagina', 'Traslados')

@section('content')
  @component('componentes.grid.grid_12')
    @slot('sideA')
      @component('componentes.card')
        @slot('head', 'Entrantes')
        @slot('body')
          @component('componentes.tablaTraslado')
            @slot('tablaTrasladoCuerpo')
            @endslot
          @endcomponent
        @endslot
      @endcomponent

      @component('componentes.card')
        @slot('head', 'Salientes')
        @slot('body')
          @component('componentes.tablaTraslado')
            @slot('tablaTrasladoCuerpo')
            @endslot
          @endcomponent
        @endslot
      @endcomponent
    @endslot
  @endcomponent
@endsection
