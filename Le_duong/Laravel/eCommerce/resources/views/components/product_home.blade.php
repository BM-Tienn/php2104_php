@push('style')
    <style type="text/css">
        .my-active span{
            background-color: #5cb85c !important;
            color: white !important;
            border-color: #5cb85c !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
                @foreach ($products as $product)
                <div class="col-md-3 product-left mt-4">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="{{route('product_details',['id'=>$product->id])}}" class="mask"><img class="img-responsive zoom-img" src="{{$product->image_url}}" alt="{{$product->name}}" /></a>
                        <div class="product-bottom">
                            <h3>{{$product->name}}</h3>
                            <p>Add To Cart</p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ {{$product->price}}</span></h4>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
                {{$products->links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>
</div>
