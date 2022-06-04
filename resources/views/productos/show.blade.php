@extends("../layouts.plantillaBase")

@section("header")

    <p>Actualizar Registros</p>

@endsection

@section("content")
        
        <form class='form-input' method='POST' action="{{url('/productos', $data->id)}}"> 
        
        <input type='hidden' name='id' value={{$data->id}}>

        <div class='input-content'>
            <label for="articulo">Nombre de Articulo:
            <input class='input-text-content' type='text' name='articulo' value={{$data->articulo}}></label>
        </div>

        <div class='input-content'>
            <label for="session">Sección:
            <input class='input-text-content'  name='session' value={{$data->session}}></label>
        </div>

        <div class='input-content'>
            <label for="precio">Precio:
            <input class='input-text-content' type name='precio' value={{$data->precio}}></label>
        </div>

        <div class='input-content'>
            <label for="fecha">Fecha:
            <input class='input-text-content'  name='fecha' value={{$data->fecha}}></label>
        </div>

        <div class='input-content'>
            <label for="origen">Origen:
            <input class='input-text-content'  name='origen' value={{$data->origen}}></label>
        </div>

        @method('PUT')
        @csrf
        <div class='input-content'>
            <input class='button-submit' type='submit' name='enviar' value='Enviar'>           
        </div>
        
    </form>

    <form class='form-delete' method='POST' action="{{url('/productos', $data->id)}}">
        <input type='hidden' name='id' value={{$data->id}}>
        <div class='input-content'>
            <input class='button-delete' type='submit' name='borrar' value='Borrar'>
        </div>
        @method('DELETE')
        @csrf
    </form>
    

        @foreach($data as $row)
     
        @endforeach

@endsection


@section("footer")
@endsection
