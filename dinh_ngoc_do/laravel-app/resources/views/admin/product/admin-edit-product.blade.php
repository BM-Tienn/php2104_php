<x-admin-layout>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Update A Product !</h3>
    </div>
    <!-- /.card-header -->
    @include('admin.partials.admin-form-product', [
      'action' => route('admin.products.update', ['product' => $product->id]),
      'method' => 'PUT'
    ])
    
    <!-- /.card-body -->
  </div>
</x-admin-layout>