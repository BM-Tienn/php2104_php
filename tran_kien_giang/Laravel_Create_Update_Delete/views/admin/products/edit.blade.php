<x-admin>
@if (session('msg'))
  	<div class="alert alert-success">
    	{{session('msg')}}
  	</div>
@endif

@if (session('error'))
	<div class="alert alert-success">
	{{session('error')}}
	</div>
@endif

@include('includes-admin.addedit', [
  'action' => route('admin.products.update', ['product' => $product->id]),
  'method' => 'PUT',
])
</x-admin>