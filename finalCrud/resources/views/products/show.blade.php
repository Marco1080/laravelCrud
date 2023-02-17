<h1>SHOW</h1>
<table>
    <tr>   
        <td>ID</td>
        <td>NAME</td>
        <td>DESCRIPTION</td>
        <td>PRICE</td>
    </tr>
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
    </tr>
</table>
<a href="{{ route('product.index')}}">VOLVER</a>