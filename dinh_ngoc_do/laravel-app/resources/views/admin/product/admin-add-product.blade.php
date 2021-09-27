<x-admin-layout>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create A New Product !</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-12">
            <!-- select -->
            <div class="form-group">
              <label>Category</label>
              <select class="custom-select">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Name</label>
              <input name="name" type="text" class="form-control" placeholder="Enter product name...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Title</label>
              <input name="title" type="text" class="form-control" placeholder="Enter product title...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <!-- textarea -->
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="form-control" rows="3" placeholder="Enter product description..."></textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Price</label>
              <input name="price" type="text" class="form-control" placeholder="Enter product price...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Quantity</label>
              <input name="quantity" type="text" class="form-control" placeholder="Enter product quantity...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-check">
                <input name="is_public" class="form-check-input" type="checkbox" checked="" value="1">
                <label class="form-check-label">Public</label>
              </div>
            </div>
          </div>
        </div>

        <input type="submit" value="Add Product" class="btn btn-primary">
      </form>
    </div>
    <!-- /.card-body -->
  </div>
</x-admin-layout>