<x-admin>
  <div class="card card-primary">
    <div class="card-header text-center">
      <h3 class="">Add Product</h3>
    </div>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('admin.product.store') }}"> @csrf <div class="card-body">
      <div class="form-group">
        <label for="exampleInputCategoty">Category</label>
        <select name="category_id" id="exampleInputCategoryId" class="form-control"> @foreach($categories as $category) <option value="{{ $category->id }}">{{ $category->name }}</option> @endforeach </select>
      </div>
      <!-- <div class="form-group"><label for="exampleInputUserId">User ID</label><input type="number" class="form-control" id="exampleInputUserId" placeholder="Enter user id" name="user_id"></div> -->
      <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputname" placeholder="Enter name product" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputPrice">Price - $</label>
        <input type="text" class="form-control" id="exampleInputPrice" placeholder="Enter price" name="price">
      </div>
      <!-- <div class="form-group"><label for="exampleInputImage">Image</label><div class="input-group"><div class="custom-file"><input type="file" class="custom-file-input" id="exampleInputFile" name="image"><label class="custom-file-label" for="exampleInputFile">Choose file image</label></div></div></div> -->
      <div class="form-group">
        <label for="exampleInputQuantity">Quantity - kg</label>
        <input type="number" class="form-control" id="exampleInputQuantity" placeholder="Enter quantity" name="quantity">
      </div>
      <!-- <div class="form-group"><label for="exampleInputRate">Rate</label><input type="number" class="form-control" id="exampleInputRate" placeholder="Enter rate" name="rate"></div><div class="form-group"><label for="exampleInputSold">Sold - kg</label><input type="number" class="form-control" id="exampleInputSold" placeholder="Enter sold" name="sold"></div> -->
      <div class="form-group">
        <label for="exampleInputName">Description</label>
        <textarea class="form-control" id="exampleInputDescription" cols="182" rows="3" placeholder="Enter description" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputSaleOff">Sale Off - %</label>
        <input type="number" class="form-control" id="exampleInputSaleOff" placeholder="Enter sale off" name="sale_off">
      </div>
      <div class="form-group">
        <div class="form-check">
          <input name="is_public" class="form-check-input" type="checkbox" value="1">
          <label class="form-check-label">
            <b>Public</b>
          </label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" style=" width: 100px;">Add</button>
      </div>
  </form>
</x-admin>