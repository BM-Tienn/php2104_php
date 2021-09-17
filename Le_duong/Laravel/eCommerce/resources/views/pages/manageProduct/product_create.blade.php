@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection
@section('content')
    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" placeholder="Enter price" name="price">
        </div>
        <div class="form-group">
            <label>Size</label>
            <input type="text" class="form-control" placeholder="Enter size" name="size">
        </div>
        <div class="form-group">
            <label>Color</label>
            <input type="text" class="form-control" placeholder="Enter color" name="color">
        </div>
        <div class="form-group">
            <label>Quanlity</label>
            <input type="text" class="form-control" placeholder="Enter quanlity" name="quanlity">
        </div>
        <div class="form-group">
            <label>Description 1</label>
            <input type="text" class="form-control" placeholder="Enter description1" name="description1">
        </div>
        <div class="form-group">
            <label>Description 2</label>
            <input type="text" class="form-control" placeholder="Enter description2" name="description2">
        </div>
        <div class="col-auto mb-4">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category">

                <option selected>Choose...</option>
                @foreach($categories as $category)
                    <option  value="{!!$category->name!!}">{!!$category->name!!}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <label>Code</label>
            <input type="text" class="form-control" placeholder="Enter code" name="code">
        </div>
        <div class="form-group">
            <label>Photo Product</label>
            <input type="file" class="form-control-file" name="product">
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>
            Save</button>
    </form>
@endsection
