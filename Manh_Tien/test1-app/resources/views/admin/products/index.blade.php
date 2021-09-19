<x-admin-layout>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Progress</th>
            <th style="width: 40px">Label</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $loop->index + 1 }}.</td>
              <td>
                <a href="{{ route('adminproducts.show', ['product' => $product->id]) }}">
                  {{ $product->name }}
                </a>
              </td>
              <td>
                <a href="{{ route('theme-categories-page.show', ['id' => $product->category->id]) }}">
                  {{ $product->category->name }}
                </a>
              </td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td>
                <a href="{{ route('theme-product-page', ['id' => $product->id]) }}" class="btn btn-block btn-info btn-xs" target="_blank">
                  Demo
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->

    {{ $products->links('partials.admin-paginate') }}

    </div>
  </div>
</x-admin-layout>