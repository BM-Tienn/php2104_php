<x-admin>
  @if (session('msg'))
  <div class="alert alert-success">
    {{session('msg')}}
  </div>
  @endif

  @if (session('error'))
  <div class="alert alert-success">
    {{session('error')}}
  </div>
  @endif
	<div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Product Name</th>
              <th>Progress</th>
              <th style="width: 40px">Label</th>
            </tr>
          </thead>
          <tbody>
          	 @foreach($products as $product)
            <tr>
              <td>{{ ($loop->index+1)+($products->currentPage()-1)*$products->perPage()  }}</td>
              <td>
              	<a href="{{route('admin.products.show', ['product' => $product -> id])}}">
              		{{ $product->product_name }}
              	</a>
              </td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 75%"></div>
                </div>
              </td>
              <td>
              	<a href="" class="btn btn-block btn-info btn-sm" target="_blank">
              		Demo
              	</a>
                  <button type="button"
                    class="btn btn-danger btn-sm confirm-delete" 
                    data-toggle="modal"
                    data-target="#modal-delete"
                    data-url="{{ route('admin.products.destroy', ['product' => $product->id]) }}"
                    style="margin-top:8px" >
                    Delete
                  </button>
                <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="btn btn-block btn-info btn-sm" style="margin-top:8px">
                    Edit
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    {{ $products->links('includes.pagination-admin') }}
    <!-- /.card-body -->
  @include('includes-admin.delete')
</x-admin>