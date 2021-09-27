<x-admin-layout>
  @if (session('msg'))
    <div class="alert alert-success">
      {{ session('msg') }}
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}.</td>
              <td>
                <a href="{{ route('admin.products.show', ['product' => $product->id]) }}">
                  {{ $product->name }}
                </a>
              </td>
              <td>
                <a href="{{ route('category.show', ['id' => $product->category->id]) }}">
                  {{ $product->category->name }}
                </a>
              </td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-4">
                    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn btn-info btn-xs" target="_blank">
                      Demo
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="btn btn-info btn-xs">
                      Edit
                    </a>
                  </div>

                  <div class="col-md-4">

                    <button type="button"
                      class="btn btn-danger btn-xs confirm-delete"
                      data-toggle="modal"
                      data-target="#modal-delete"
                      data-url="{{ route('admin.products.destroy', ['product' => $product->id]) }}"
                    >
                      Delete
                    </button>
                  </div>
                </div>
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

  @include('partials.form-delete')

</x-admin-layout>
