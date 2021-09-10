@extends('layouts.home')
@section('name','Product Details')

@section('content')
<!--start-products-details-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <div class="col-md-9 single-main-left">
            <div class="sngl-top">
                <div class="col-md-5 single-top-left">
                    <div class="flexslider">
                            <ul class="slides">
                            <li data-thumb="{{asset('images/s-1.jpg')}}">
                                <div class="thumb-image"> <img src="{{asset('images/s-1.jpg')}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                            </li>
                            <li data-thumb="{{asset('images/s-2.jpg')}}">
                                    <div class="thumb-image"> <img src="{{asset('images/s-2.jpg')}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                            </li>
                            <li data-thumb="{{asset('images/s-3.jpg')}}">
                                <div class="thumb-image"> <img src="{{asset('images/s-3.jpg')}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                            </li>
                            </ul>
                    </div>
                    <!-- FlexSlider -->
                    <script src="{{asset('js/imagezoom.js')}}"></script>
                    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
                    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />

                    <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                        });
                    });
                    </script>
                </div>
                <div class="col-md-7 single-top-right">
                    <div class="single-para simpleCart_shelfItem">
                    <h2>{{$product->name}}}</h2>
                        <div class="star-on">
                            <ul class="star-footer">
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                    <li><a href="#"><i> </i></a></li>
                                </ul>
                        <div class="clearfix"> </div>
                        </div>

                        <h5 class="item_price">$ {{$product->price}}.00</h5>
                        <p>{{$product->description_short}}</p>
                        <div class="available">
                            <ul>
                                <li>Color
                                    <select>

                                    <option>{{$product->color}}</option>

                                    </select>
                                </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                        <ul class="tag-men">
                            <li><span>TAG</span>
                            <span class="women1">: {{$product->itended}},</span></li>
                            <li><span>SKU</span>
                            <span class="women1">: {{$product->code}}</span></li>
                        </ul>
                            <a href="#" class="add-cart item_add">ADD TO CART</a>

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="tabs">
                <ul class="menu_drop">
            <li class="item1"><a href="#"><img src="{{asset('images/arrow.png')}}" alt="">Description</a>
                <ul>
                    <li class="subitem1">
                        <a href="#">{{$product->description_short}}</a>
                    </li>
                    <li class="subitem2">
                        <a href="#">{{$product->description_long}}</a>
                    </li>
                </ul>
            </li>
        </ul>
            </div>
            <div class="latestproducts">
                <div class="product-one">
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/p-1.png')}}" alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/p-2.png')}}" alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/p-3.png')}}" alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
            <div class="col-md-3 single-right">
                <div class="w_sidebar">
                    <section  class="sky-form">
                        <h4>Catogories</h4>
                        <div class="row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>
                            </div>
                        </div>
                    </section>
                    <section  class="sky-form">
                        <h4>Brand</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Omax</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sports</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fossil</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Maxima</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yepme</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diesel</label>
                            </div>
                        </div>
                    </section>
                    <section class="sky-form">
                    <h4>price</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio" checked=""><i></i>~100$</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>200$-400$</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>500$-700$</label>
                            </div>
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio"><i></i></label>
                                <label class="radio"><input type="radio" name="radio"><i></i>750$-900$</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>~$1500</label>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-product-details-->
@endsection
