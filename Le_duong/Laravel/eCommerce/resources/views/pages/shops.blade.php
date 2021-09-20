@extends('layouts.app');
@section('page','Product')
@section('content')
<div class="bg0 m-t-23 p-b-140">
    <div class="container">

        <div class="flex-w flex-sb-m p-b-52">
            <x-navigation :categories="$categories"/>

            <x-filter/>

            <x-filter-product/>
            <x-search-product/>
        </div>

        <x-product :products="$products"/>

        <!-- Pagination -->
        <div class="flex-c-m flex-w w-full p-t-45">
        {{--<x-paginate/>--}}
            {{$products->links('vendor.pagination.custom')}}
        </div>
    </div>
</div>
@endsection
