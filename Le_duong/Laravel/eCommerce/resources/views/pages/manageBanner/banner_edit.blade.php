@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection
@section('content')
    <h4>Edit Banner</h4>
    <div class="row g-2">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Photo Slider</label>
                <img src="{{asset('/storage/images/banner/'.$banner->name)}}" class="img-thumbnail" alt="{{$banner->name}}">
            </div>
        </div>
        <div class="col-lg-6">
            <form method="POST" action="{{route('banner.update',['banner' => $banner])}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label>Photo Banner</label>
                    <input type="file" class="form-control-file" name="banner" required>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-upload"></i>
                    Update</button>
            </form>
        </div>
    </div>
@endsection
