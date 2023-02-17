<h1>CREATE</h1>
<form action="{{ route('product.store', "createProduct")}}" method="POST">
    @csrf
    <table>
        <tr>
            <th><td>NAME</td></th>
            <th><td><input type="text" name="name" value="{{ $createProduct->name ?? ''}}"></td></th>
        </tr>

        <tr>
            <th><td>DESCRIPTION</td></th>
            <th><td><input type="text" name="description" value="{{ $createProduct->description ?? ''}}"></td></th>
        </tr>

        <tr>
            <th><td>PRICE</td></th>
            <th><td><input type="number" name="price" value="{{ $createProduct->price ?? ''}}"></td></th>
        </tr>
        <tr><td colspan="2"><input type="submit"></tr>
    </table>
</form>