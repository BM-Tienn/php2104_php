@extends('layouts.board')
@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection

@section('content')
@if (session('success'))
<div class="alert alert-success hidden" role="alert">
    <div class="d-flex align-items-center justify-content-between">
        {{session('success')}}
        <i class="fa fa-close btn-hidden"></i>
    </div>
</div>
@endif
@if (session('error'))
<div class="alert alert-danger hidden" role="alert">
    <div class="d-flex align-items-center justify-content-between">
        {{session('error')}}
        <i class="fa fa-close btn-hidden"></i>
    </div>
</div>
@endif
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>
            Photo Banners List</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Size</th>
                        <th>Type</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td>{{$banner->id}}</td>
                            <td>
                                {{$banner->name}}
                            </td>
                            <td>
                                <div class="m-r-10">
                                    <img src="{{asset('storage/images/banner/'.$banner->name)}}" alt="{{$banner->name}}" class="rounded" width="45">
                                </div>
                            </td>
                            <td>
                                {{$banner->size}}KB
                            </td>
                            <td>
                                {{$banner->type}}
                            </td>
                            <td>
                                {{$banner->getCategory->name}}
                            </td>
                            <td>
                                <a href="">
                                    <button class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                        Update
                                    </button>
                                </a>
                                <a href="">
                                    <button class="btn btn-danger">
                                        <i class="fa fa-remove"></i>
                                        Delete
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route('banner.create')}}">
                    <button class="btn btn-secondary">
                        <i class="fa fa-plus"></i>
                        Add
                    </button>
                </a>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
@endsection
