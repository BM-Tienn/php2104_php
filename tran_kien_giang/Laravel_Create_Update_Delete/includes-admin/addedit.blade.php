
<form action="{{ $action }}" method="POST">
	@csrf
    @if ($method == 'PUT')
      @method('PUT')
    @endif
	<div class="form-group select" style="width: 97%; margin-left: 19px;">
    	<label>Category</label>
	   <select name="category_id" class="form-control">
	    	@foreach($categories as $id => $category)
			<option value="{{ $id }}" 
				@if($id == @$product->id)
				selected
				@endif
			>
				{{ $category->name }}
			</option>
			@endforeach
	    </select>
  	</div>
	<div class="card-body">
	  	<div class="form-group">
	    	<label >Name</label>
	    	<input value="{{ @$product->product_name }}" name="product_name" type="name" class="form-control"  placeholder="Name">
	  	</div>
	  	<div class="form-group">
	    	<label >Img Name</label>
	    	<input value="{{ @$product->img_name }}" name="img_name"  class="form-control" placeholder="Enter Image Name">
	  	</div>
	  	<div class="form-group">
	    	<label >Img Url</label>
	    	<input value="{{ @$product->img_url }}" name="img_url"  class="form-control"  placeholder="Enter email">
	  	</div>
	    <div class="form-group">
	    	<label >Price</label>
	    	<input value="{{ @$product->price }}" name="price" type="name" class="form-control"  placeholder="Price">
	  	</div>
	  	<div class="form-group">
	    	<label >Quantity</label>
	    	<input value="{{ @$product->quantity }}" name="quantity" class="form-control"  placeholder="Quantity">
	  	</div>
	  	
        <div class="form-group">
	    	<label>Sale Off</label>
	    	<input value="{{ @$product->sale_off }}" name="sale_off" class="form-control"  placeholder="Sale_off">
	  	</div>
		<div class="form-group">
			<label for="exampleInputFile">Choose</label>
			<div class="input-group">
			  	<div class="custom-file">
			    	<input type="file" class="custom-file-input" id="exampleInputFile">
			    	<label class="custom-file-label" for="exampleInputFile">Choose file</label>
			  	</div>
		  		<div class="input-group-append">
		    		<span class="input-group-text">Upload</span>
		  		</div>
			</div>
	  	</div>
	  	<div class="col-sm-6">
			<!-- checkbox -->
			<div class="form-group">
				<div class="form-check">
				   <input name="status" class="form-check-input" type="checkbox" value="1"
              @if (@$product->status) checked @endif
            >
				  <label class="form-check-label">Status</label>
				</div>
			</div>
        </div>
	</div>
	<!-- /.card-body -->

	<div class="card-footer">
  		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>