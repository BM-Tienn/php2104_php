@section('username')
<a href="#" class="d-block">{{$user->name}}</a>
@endsection
<x-admin>
        
        <form method="POST" action="{{route('products.store')}}">
            @csrf
        <div class="content" style="min-height: 1602px;">
        <!-- Content Header (Page header) -->
        <div class="card ">
            <div class="card-header text-center">
            <h1 class="">Add Product</h1>
            </div>
            <!-- Main content -->
            <section class="content">
            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                    <div class="col-12">
                        <img src="data:image/jpeg;base64,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" class="product-image" alt="Product Image">
                    </div>
                    <!-- <div class="col-12 product-image-thumbs"><div class="product-image-thumb active"><img src="/themes/adminlte/dist/img/prod-1.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-2.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-3.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-4.jpg" alt="Product Image"></div><div class="product-image-thumb"><img src="/themes/adminlte/dist/img/prod-5.jpg" alt="Product Image"></div></div> -->
                    </div>
                    <div class="col-12 col-sm-6">
                    <h1 class="my-3">
                        <span style="color: #bbb;">Name Product</span>
                        <input type="text" name="name" value="">
                    </h1>
                    <div class="mt-4">
                        <span class="text-left mr-4">
                        <a href="#" class="mr-2"></a> 
                        </span>
                        <span class="text-left mr-4">
                            <span style="color: #bbb;">Sale Off</span>
                            <input type="text" name="sale_off" value="" style="max-width: 30px; text-align: center;">%&ensp; 
                        </span>
                    </div>
                    <div class=" mt-4">
                        <span style="color: #bbb;">Price</span>
                        <h2 class="mb-0"> $ <input type="text" name="price" value="">
                        </h2>
                    </div>
                    <div class=" mt-4">
                        <span style="color: #bbb;">Quantity</span>
                        <h2 class="mb-0"><input type="text" name="quantity" value="">
                        </h2>
                    </div>
                    <div class=" mt-4">
                        <span style="color: #bbb;">Category</span>
                        <h4 class="mb-0">                            
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                    @endforeach
                            </select>
                        </h4>
                    </div>
                    
                    
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- checkbox -->
                          <div class="form-group">
                            <div class="form-check">
                              <input name="is_public" class="form-check-input" type="checkbox" checked="" value="1">
                              <label class="form-check-label">public</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>

                    <button type="submit" class="btn btn-success" style="margin: 20px 20px">add</button>
                    </div>
                    
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
    </form>
  </x-admin>