@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection
@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <form method='POST' action="{{route('slider_photos.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control-file" name="title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control-file" name="description">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Add Slider Photo</label>
                        <input type="file" class="form-control-file" name="slider">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-fw fa-save"></i>
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
@endsection
