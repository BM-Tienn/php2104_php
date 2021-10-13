<x-admin>
  <div class="card card-primary">
    <div class="card-header text-center">
      <h3 class="">Edit Product</h3>
    </div>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('admin.product.update', ['id' => $products->id]) }}">
    @method('PATCH')
    @csrf
    <div class="card-body">
    <div class="form-group">
        <input type="hidden" class="form-control" id="exampleInputCategory" value="{{ $products->id }}" name="id">
      </div>
      <div class="form-group">
      <select name="category_id" id="exampleInputCategoryId" class="form-control">
        <option  value="{{ $products->category->id }}">{{ $products->category->name }} - Choose...</option>
          @foreach($categories as $category)
          <option  value="{{ $category->id }}" >{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputUserId">User ID</label>
        <input type="number" class="form-control" id="exampleInputUserId" value="{{ $products->user_id }}" name="user_id">
      </div> -->
      <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputname" value="{{ $products->name }}" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputPrice">Price - $</label>
        <input type="number" class="form-control" id="exampleInputPrice" value="{{ $products->price }}" name="price">
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputImage">Image</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" value="{{ $products->image }}" name="image">
            <label class="custom-file-label" for="exampleInputFile">Choose file image</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div> -->
      <div class="form-group">
        <label for="exampleInputQuantity">Quantity - kg</label>
        <input type="number" class="form-control" id="exampleInputQuantity" value="{{ $products->quantity }}" name="quantity">
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputRate">Rate</label>
        <input type="number" class="form-control" id="exampleInputRate" value="{{ $products->rate }}" name="rate">
      </div> -->
      <!-- <div class="form-group">
        <label for="exampleInputSold">Sold - kg</label>
        <input type="number" class="form-control" id="exampleInputSold" value="{{ $products->sold }}" name="sold">
      </div> -->
      <div class="form-group">
        <label for="exampleInputName">Description</label>
        <textarea class="form-control" id="exampleInputDescription" cols="182" rows="3" name="description">{{ $products->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputSaleOff">Sale Off - %</label>
        <input type="number" class="form-control" id="exampleInputSaleOff" value="{{ $products->sale_off }}" name="sale_off">
      </div>
      <div class="form-group">
        <div class="form-check">
          <input name="is_public" class="form-check-input" type="checkbox" checked value="1">
          <label class="form-check-label"><b>Public</b></label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" style=" width: 100px; " >Edit</button>
      </div>
  </form>
</x-admin>