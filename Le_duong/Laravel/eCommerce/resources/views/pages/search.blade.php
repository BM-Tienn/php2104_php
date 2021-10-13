@extends('layouts.main')
@section('page','Search')
@section('title_page')
    Result Search For : {{$resultSearch}}
@endsection
@section('content')
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">

            <div class="flex-w flex-sb-m p-b-52">
            </div>

            <x-product :products="$products"/>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="{{route('shops')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        </div>
    </div>
@endsection
