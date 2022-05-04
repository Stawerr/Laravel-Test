<h1>Projects</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Product ID</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>

    </tr>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->name}}</td>
            <td>
                @foreach($project->products as $product)
                    <p>{{$product->name}}</p>
                @endforeach
            </td>
            <td>{{$project->created_at}}</td>
            <td>{{$project->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
