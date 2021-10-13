@section('username')
<a href="#" class="d-block">{{$user->name}}</a>
@endsection
<x-admin>
  <div class="card ">
    <div class="card-header text-center">
      <h1 class="">List Of Products</h1>
      <a href="{{route('products.create')}}">
        <i class="fas fa-plus-square" style="float: right; font-size: 40px; width: 95px; color: green" class="btn btn-success btn-xs"></i>
      </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if (session('msg'))
          <div class="alert alert-success flex-container " style="display: grid; grid-template: 9fr 1fr">
            {{ session('msg') }}

            <i class="far fa-times-circle closesession" style="grid-collumn:2/3"></i>
          </div>
      @endif
      @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
            <i class="far fa-times-circle closesession" style="grid-collumn:2/3"></i>
          </div>
      @endif
      <script>
        $('.closesession').click(function() {
          $('.alert').css('display','hidden');
        });
      </script>
      <table class="table table-bordered">
        <thead class="bg-primary color-palette" style="text-align: center;">
          <tr>
            <th style="width: 10px; ">Id</th>
            <th>image</th>
            <th>Name Product</th>
            <th>Creator</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sold</th>
            <th>Sale_off</th>
            <th>Rate</th>
            <th>Is Public</th>
            <th>create at</th>
            <th>Description</th>
            <th style="width: 100px">Action</th>
          </tr>
        </thead>
        <tbody> @foreach ( $products as $product) <tr>
            <td>{{ ($loop->index + 1) + ($products->currentPage() - 1)*$products->perPage() }}.</td>
            <td> <img src="{{ $product->image }}" alt="" width="80px"> </td>
            <td>
              <a href="{{ route('product-single-ms', ['id' => $product->id]) }}">
                {{ $product->name }}
              </a>
            </td>
            <td>
              <a href="{{ route('profile-single-ms.show', ['product' => $product->user->id]) }}">
                {{ $product->user->name }}
              </a>
            </td>
            <td>
              <a href="{{ route('category.show', ['id' => $product->category->id]) }}">
                {{ $product->category->name }}
              </a>
            </td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->sold }}</td>
            <td>{{ $product->sale_off }}</td>
            <td>{{ $product->rate }}</td>
            <td>{{ $product->is_public }}</td>
            <td>{{ $product->created_at }}</td>
            <td style=" max-height: 5px; overflow: hidden;">{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-block btn-info btn-xs" target="_blank">
                    Detail
                </a>
                
                
                <button type="button" class="btn btn-danger btn-xs btn-block btn-info confirm-delete" 
                data-toggle="modal"
                data-target="#modal-delete"
                data-url="{{ route('products.destroy',[ 'product' => $product->id ])}}"
                >
                  Delete
                </button>

                <a href="{{route('products.edit',['product'=>$product->id])}}" class="btn btn-block btn-info btn-xs btn-warning">Edit</a>
            </td>
          </tr>
        @endforeach
     </tbody>
      </table>
      
      <div class="card-footer clearfix">
        <div class="pagination" style="display: flex; justify-content: center;">
          {{ $products->links('pagination.bootstrap-4') }}
        </div>
      </div>
    </div>
    @include('partials.form-delete')
</x-admin>