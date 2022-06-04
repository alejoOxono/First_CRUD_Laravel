@extends("../layouts.plantillaBase")

@section("header")

    <p>Ver Registros</p>

@endsection

@section("content")

    <table class='table-index'>
        <thead>
            <tr>
                <th>Articulo</th>
                <th>Sección</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Origen</th>
                <th>Actualizar /</br>
                Borrar
                </th>
            </tr>
        </thead>

        @foreach($data as $row)
            <tbody>
                <tr>    
                    @foreach($row as $key=>$value)
                        @if($key =='id')
                            <?php $control = $value ?>
                        @endif
                        @if($key!='created_at' && $key!='updated_at' && $key!='id')
                            <td>
                                {{$value}}
                            </td>
                        @endif
                    @endforeach
                    <td>
                        <button class='button-update' type='button' onClick="Javascript:window.location.href = '/productos/{{$control}}';">
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

@endsection


@section("footer")
@endsection
