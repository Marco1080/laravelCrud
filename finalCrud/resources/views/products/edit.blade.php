<h1>Editar {{$product->id}}</h1>
<h1>CREATE</h1>
<form action="{{ route('product.update', $product->id)}}" method="PUT">
    @method('PUT')
    @csrf
    <table>
        <tr>
            <th><td>NAME</td></th>
            <th><td><input type="text" name="name" value="{{ $product->name ?? ''}}"></td></th>
        </tr>

        <tr>
            <th><td>DESCRIPTION</td></th>
            <th><td><input type="text" name="description" value="{{ $product->description ?? ''}}"></td></th>
        </tr>

        <tr>
            <th><td>PRICE</td></th>
            <th><td><input type="number" name="price" value="{{ $product->price ?? ''}}"></td></th>
        </tr>
        <tr><td colspan="2"><input type="submit"></tr>
    </table>
</form>