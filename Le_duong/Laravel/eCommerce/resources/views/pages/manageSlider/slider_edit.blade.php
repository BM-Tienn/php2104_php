@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection
@section('content')
    <h4>Edit Slider</h4>
    <div class="row g-2">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control"  value="{{$slider->title}}" disabled>
            </div>

            <div class="form-group">
                <label>Description </label>
                <textarea rows="10" type="text" class="form-control" disabled>{{$slider->description}}</textarea>
            </div>

            <div class="form-group">
                <label>Photo Slider</label>
                <img src="{{asset('/storage/images/slider/'.$slider->name)}}" class="img-thumbnail" alt="{{$slider->name}}">
            </div>
        </div>
        <div class="col-lg-6">
            <form method="POST" action="{{route('slider.update',['slider' => $slider])}}" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                </div>
                <div class="form-group">
                    <label>Description </label>
                    <textarea rows="10" type="text" class="form-control" placeholder="Enter description" name="description">

                    </textarea>
                </div>

                <div class="form-group">
                    <label>Photo Slider</label>
                    <input type="file" class="form-control-file" name="slider">
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-upload"></i>
                    Update</button>
            </form>
        </div>
    </div>
@endsection
