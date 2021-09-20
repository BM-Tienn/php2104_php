<x-admin>
  <div class="card ">
    <div class="card-header text-center">
      <h1 class="">List Of Products</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead class="bg-primary color-palette">
          <tr>
            <th style="width: 10px">Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sold</th>
            <th>Sale</th>
            <th>Rate</th>
            <th>Description</th>
            <th style="width: 40px">Active</th>
          </tr>
        </thead>
        <tbody> @foreach ( $products as $product) <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name}}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->sold }}</td>
            <td>{{ $product->sale_off }}</td>
            <td>{{ $product->rate }}</td>
            <td>{{ $product->description }}</td>
            <td>
              <a href="{{ route('admin.product.show', ['id' => $product->id]) }}" type="button" class="btn btn-block btn-primary" title="See product">Info</a>
            </td>
          </tr> @endforeach </tbody>
      </table>
      <div class="card-footer clearfix">
        <div class="pagination float-right">
          {{ $products->links('pagination.bootstrap-4') }}
        </div>
      </div>
    </div>
</x-admin>