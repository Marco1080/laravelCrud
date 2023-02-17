<h1>INDICE</h1>
<a href="{{ route('product.create')}}">NUEVO</a>
<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($product as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td><a href="{{ route('product.show', $item->id) }}">DETALLES</td>
            <td><a href="{{ route('product.edit', $item->id)}}">EDITAR</td>
            <td><a href="{{ route('product.destroy', $item->id)}}">BORRAR</td>
        </tr>
    @endforeach
</table>