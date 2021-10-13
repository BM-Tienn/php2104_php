@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection
@section('content')
    <h4>Edit Category</h4>
    <div class="row g-2">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control"  value="{{$category->name}}" disabled>
            </div>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control"  value="{{$category->title}}" disabled>
            </div>

        </div>
        <div class="col-lg-6">
            <form method="POST" action="{{route('categories.update',['category' => $category])}}" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-upload"></i>
                    Update</button>
            </form>
        </div>
    </div>
@endsection
