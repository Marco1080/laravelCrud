<h1>Detalles</h1>
<table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
        </tr>
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
        </tr>
</table>
<a href="{{ route('product.index')}}">Volver al menu</a>