@extends("../layouts.plantillaBase")

@section("header")

    <p>Insertar Datos</p>

@endsection

@section("content")

    <form class='form-input' method='POST' action="{{url('/productos')}}"> <!-- verificar las rutas/Esto lleva al post de 
                                                Productos que a su ves lo redirige al método
                                                store del modelo -->
        
        <div class='input-content'>
            <label for="articulo">Nombre de Articulo:
            <input class='input-text-content' type='text' name='articulo' placeholder='...nombre'></label>
        </div>

        <div class='input-content'>
            <label for="session">Sección:
            <input class='input-text-content' type='text' name='session' placeholder='...Sección'></label>
        </div>

        <div class='input-content'>
            <label for="precio">Precio:
            <input class='input-text-content' type name='precio' placeholder='...Precio'></label>
        </div>

        <div class='input-content'>
            <label for="fecha">Fecha:
            <input class='input-text-content' type='text' name='fecha' placeholder='...Fecha'></label>
        </div>

        <div class='input-content'>
            <label for="origen">Origen:
            <input class='input-text-content' type='text' name='origen' placeholder='...Origen'></label>
        </div>

        @csrf
        <div class='input-delete'>
            <input class='button-submit' type='submit' name='enviar' value='Enviar'>
            <input class='button-submit' type='reset' name='borrar' value='Eliminar'>
        </div>
        
    </form>
@endsection


@section("footer")
@endsection
