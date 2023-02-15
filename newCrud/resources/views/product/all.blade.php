<h1><i>M</i>enu</h1>
<td><a href="{{ route('product.create') }}">Nuevo</a></td>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @foreach($product as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td><a href="{{ route('product.show', $item->id)}}">Mostrar</td>
            <td><a href="">Editar</td>
            <td><a href="">Eliminar</td>
        </tr>
    @endforeach
</table>