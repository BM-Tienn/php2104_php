<!-- /.card-header -->
<div class="card-body">
  <form action="{{ $action }}" method="POST">
    @csrf

    @if ($method == 'PUT')
      @method('PUT')
    @endif
    <div class="row">
      <div class="col-sm-12">
        <!-- select -->
        <div class="form-group">
          <label>Category</label>
          <select class="custom-select" name="category_id">
            @foreach ($categories as $id => $category)
              <option value="{{ $id }}"
                @if ($id == @$product->id)
                selected
                @endif
              >
                {{ $category }}
              </option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- text input -->
        <div class="form-group">
          <label>Name</label>
          <input name="name" type="text" class="form-control" value="{{ @$product->name }}">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- textarea -->
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control" rows="3">{{ @$product->description }}</textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- text input -->
        <div class="form-group">
          <label>Price</label>
          <input name="price" type="text" class="form-control" value="{{ @$product->price }}">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- text input -->
        <div class="form-group">
          <label>Quantity</label>
          <input name="quantity" type="text" class="form-control" value="{{ @$product->quantity }}">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- text input -->
        <div class="form-group">
          <label>Sale off</label>
          <input name="sale_off" type="text" class="form-control" value="{{ @$product->sale_off }}" placeholder="50%">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <!-- checkbox -->
        <div class="form-group">
          <div class="form-check">
            <input name="is_public" class="form-check-input" type="checkbox" value="1"
              @if (@$product->is_public) checked @endif
            >
            <label class="form-check-label">Public</label>
          </div>
        </div>
      </div>
    </div>

    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
</div>
<!-- /.card-body -->
