<x-theme-sidebar>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Price_sale</th>
                <th>Image</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Classify</th>
                <th>Category_id</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product) 
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->price_sale }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->classify }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td><i class="far fa-edit"></i></td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-theme-sidebar>