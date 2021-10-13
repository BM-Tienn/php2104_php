@section('username')
<a href="#" class="d-block">{{$user->name}}</a>
@endsection
<x-admin>
  <div class="content" style="min-height: 1602px;">
    <!-- Content Header (Page header) -->
    <a href="{{ route('products.edit',['product'=>$product->id]) }}" class="btn  btn-success" style=" text-align:center;" >edit</a>
    <div class="card ">
      <div class="card-header text-center">
        <h1 class="">Single Product</h1>
      </div>
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="col-12">
                  <img src="{{ $product->image }}" class="product-image" alt="Product Image">
                </div>
                <!-- <div class="col-12 product-image-thumbs"><div class="product-image-thumb active"><img src="/themes/adminlte/dist/img/prod-1.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-2.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-3.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-4.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-5.jpg" alt="Product Image"></div></div> -->
              </div>
              <div class="col-12 col-sm-6">
                <h1 class="my-3">
                  <a href="{{ route('product-single-ms', ['product' => $product->id]) }}">
                    <b>{{ $product->name }}</b>
                  </a>
                </h1>
                <div class="mt-4">
                  <span class="text-left mr-4">
                    <a href="#" class="mr-2">{{ $product->rate }}</a> 
                    @for ($i=0; $i<$product->rate; $i++) 
                    <span class="far fa-star"></span> 
                    @endfor 
                  </span>
                  <span class="text-left mr-4">
                    <a href="#" class="mr-2" style="color: #000;">{{ $product->sold }}&ensp; <span style="color: #bbb;">Sold</span>
                    </a>
                  </span>
                  <span class="text-left mr-4">
                    <a href="#" class="mr-2" style="color: #000;">{{ $product->sale_off }}%&ensp; <span style="color: #bbb;">Sale Off</span>
                    </a>
                  </span>
                </div>
                <div class=" mt-4">
                  <span style="color: #bbb;">Price</span>
                  <h2 class="mb-0"> ${{ $product->price }}
                  </h2>
                </div>
                <div class=" mt-4">
                  <span style="color: #bbb;">Category</span>
                  <h4 class="mb-0">
                    <a href="{{ route('category.show', ['id' => $product->category->id]) }}">
                      {{ $product->category->name }}
                    </a>
                  </h4>
                </div>
                <div class=" mt-4">
                  <span style="color: #bbb;">Profile Creator</span>
                  
                </div>
                
                <hr>
                <h5>{{ $product->description }}</h5>
                <!-- <div class="mt-4"><div class="btn btn-primary btn-lg btn-flat"><i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </div><div class="btn btn-default btn-lg btn-flat"><i class="fas fa-heart fa-lg mr-2"></i>
                  Add to Wishlist
                </div></div> -->
              </div>
            </div>
            <h1 style="display: flex; justify-content: center;margin-top: 150px;">History Update</h1>
            <div class="row mt-4">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Created By</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">quantity</th>
                    <th scope="col">price</th>
                    <th scope="col">sale_off</th>
                    <th scope="col">category_id</th>
                    <th scope="col">is_public</th>
                    <th scope="col">create at</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$producthistory->user->name}}</td>
                    <td>{{$producthistorydetails[0]['name']}}</td>
                    <td>{{$producthistorydetails[0]['quantity']}}</td>
                    <td>{{$producthistorydetails[0]['price']}}</td>
                    <td>{{$producthistorydetails[0]['sale_off']}}</td>
                    <td>{{$producthistorydetails[0]['category_id']}}</td>
                    <td>{{$producthistorydetails[0]['is_public']}}</td>
                    <td>{{$producthistorydetails[0]['created_at']}}</td>
                  </tr>
                </tbody>
              </table>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Updated By</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">quantity</th>
                    <th scope="col">price</th>
                    <th scope="col">sale_off</th>
                    <th scope="col">category_id</th>
                    <th scope="col">is_public</th>
                    <th scope="col">update at</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($producthistorydetails) > 1)
                  @for ($i = 1; $i < count($producthistorydetails); $i++)
                  <tr>
                    <td>{{$producthistory->user->name}}</td>
                    <td>{{$producthistorydetails[$i]['name']}}</td>
                    <td>{{$producthistorydetails[$i]['quantity']}}</td>
                    <td>{{$producthistorydetails[$i]['price']}}</td>
                    <td>{{$producthistorydetails[$i]['sale_off']}}</td>
                    <td>{{$producthistorydetails[$i]['category_id']}}</td>
                    <td>{{$producthistorydetails[$i]['is_public']}}</td>
                    <td>{{$producthistorydetails[$i]['updated_at']}}</td>
                  </tr>
                  @endfor
                  @endif
                  
                </tbody>
              </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
</x-admin>