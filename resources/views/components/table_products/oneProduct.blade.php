<h1>Product</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Detail</th>
        <th scope="col">Category ID</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <tr>
        <td> {{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->detail}}</td>
        <td>{{$product->category_id}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->updated_at}}</td>
    </tr>
    </tbody>
</table>
