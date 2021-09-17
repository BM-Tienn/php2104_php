<x-theme-sidebar>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Is_public</th>
                <th>Classify  </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $category) 
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->image }}</td>
                    <td>{{ $category->is_public }}</td>
                    <td>{{ $category->classify }}</td>
                    <td><i class="far fa-edit"></i></td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-theme-sidebar>