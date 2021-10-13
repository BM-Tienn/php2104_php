<x-admin>

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
              <td>{{ $loop->index+1 }}</td>
              <td>
              	<a href="{{route('admin.products.show', ['product' => $product -> id])}}">
              		{{ $product->product_name }}
              	</a>
              </td>
              <td>
               e <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td>
              	<a href="" class="btn btn-block btn-info btn-sm" target="_blank">
              		Demo
              	</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    {{ $products->links('includes.pagination') }}
    <!-- /.card-body -->
	<div class="card-footer clearfix">
		<ul class="pagination pagination-sm m-0 float-right">
			<li class="page-item"><a class="page-link" href="#">«</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">»</a></li>
		</ul>
	</div>
</x-admin>