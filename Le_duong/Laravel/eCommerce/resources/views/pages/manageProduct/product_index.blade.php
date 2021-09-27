@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection

@section('content')
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  @if (session('fail'))
    <div class="alert alert-danger">
      {{ session('fail') }}
    </div>
  @endif
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>
            Products List</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Quanlity</th>
                        <th>Description 1</th>
                        <th>Description 2</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>
                              {{ $loop->iteration + ($products->currentPage()-1) * ($products->perPage()) }}
                            </td>
                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                {{$product->price}}$
                            </td>
                            <td>
                                {{$product->size}}
                            </td>
                            <td>
                                {{$product->color}}
                            </td>
                            <td>
                                {{$product->quanlity}}
                            </td>
                            <td>
                                {{$product->description1}}
                            </td>
                            <td>
                                {{$product->description2}}
                            </td>
                            <td>
                                {{$product->category}}
                            </td>
                            <td>
                                {{$product->code}}
                            </td>
                            <td>
                                <div class="m-r-10">
                                    <img src="{{asset('storage/images/products/'.$product->photos)}}" alt="{{$product->photos}}" class="rounded" width="45">
                                </div>
                            </td>
                            <td>
                                <a href="{{route('products.edit',['product' => $product->id])}}">
                                    <button class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                        Update
                                    </button>
                                </a>
                              <button
                                class="btn btn-danger btn-delete"
                                data-toggle="modal"
                                data-target="#modalDelete"
                                data-url="{{route('products.destroy',['product' => $product->id])}}"
                              >
                                <i class="fa fa-remove"></i>
                                Delete
                              </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
@endsection
