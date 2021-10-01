<x-admin>
  <div class="card ">
    <div class="card-header text-center">
      <h1 class="">List Of Products</h1>
    </div>
    <div class="row">
      <div class="col-md-4" style="padding: 20px 0 0 20px;">
        <div>
          <a href="{{ route('admin.product.create') }}" type="button" class="btn btn-xs btn-warning" style="width: 110px; height: 40px; padding-top: 10px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
            </svg> &ensp; Add Product </a>
        </div>
      </div>
      <div class="col-md-4" style="padding-top: 20px;"> 
      @if(Session::has('success')) 
      <div class="alert alert-success fade in alert-dismissible show" style="height: 50px;">
        {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" style="font-size:20px">×</span>
      </div> 
      @endif 
      @if(Session::has('error')) 
      <div class="alert alert-danger fade in alert-dismissible show" style="height: 50px;">
      {{Session::get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" style="font-size:20px">×</span>
      </div>
        @endif 
      </div>
      <div class="col-md-4" style="padding-top: 20px;">
        <form action="/admin/search" class="form-inline">
          <div class="from-group">
            <input type="text" style="width: 450px; height: 40px;" name="keyS" value="">
          </div>
          <button type="submit" class="btn btn-xs btn-secondary" style="width: 55px; height: 40px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
        </form>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="bg-primary color-palette">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Category</th>
              <th>User ID</th>
              <th>Price</th>
              <th>Image</th>
              <th>Quantity</th>
              <th>Sold</th>
              <th>Sale Off</th>
              <th>Rate</th>
              <th>Description</th>
              <th style="width: 150px;">Active</th>
            </tr>
          </thead>
          <tbody> @foreach ( $products as $product) <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->category->name }}</td>
              <td>{{ $product->user_id }}</td>
              <td>{{ $product->price }}</td>
              <td>
                <img src="{{ asset('storage/products/' . $product->image) }}" style="width: 60px; height: 60px;" />
              </td>
              <td>{{ $product->quantity }}</td>
              <td>{{ $product->sold }}</td>
              <td>{{ $product->sale_off }}</td>
              <td>{{ $product->rate }}</td>
              <td>{{ $product->description }}</td>
              <td>
                <div class="row">
                  <div class="col-md-4">
                    <a href="{{ route('admin.product.show', ['id' => $product->id]) }}" type="button" class="btn btn-xs btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                      </svg>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" type="button" class="btn btn-xs btn-success">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                      </svg>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-xs btn-danger confirm-delete" data-toggle="modal" data-target="#modal-delete" data-url="{{ route('admin.product.destroy', ['id' => $product->id]) }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </td>
            </tr> @endforeach </tbody>
        </table>
        <div class="card-footer clearfix">
          <div class="pagination float-right">
            {{ $products->links('pagination.bootstrap-4') }}
          </div>
        </div>
      </div> @include('partials.form-delete')
</x-admin>