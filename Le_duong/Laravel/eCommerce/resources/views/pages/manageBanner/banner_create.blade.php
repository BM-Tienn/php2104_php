@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection
@section('content')
    <form method="POST" action="{{route('banner.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Photo Banner</label>
            <input type="file" class="form-control-file" name="banner">
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>
            Save</button>
    </form>
@endsection
