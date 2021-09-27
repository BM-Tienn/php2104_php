<x-my-web>
<div class="hero-wrap hero-bread" style="background-image: url('/vegefoods/image/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/home-page">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="/shop-ms"
						@if ($category->name == '')
							class="active"
						@endif
						>All</a></li>
    					<li>
						<a href="/categories/1"
							@if ($category->name == 'Fruits')
								class="active"
							@endif
							>
							Fruits
						</a>
						</li>
						<li>
						<a href="/categories/2"
							@if ($category->name == 'Vegetables')
								class="active"
							@endif
							>
							Vegetables
						</a>
						</li>
    					<li>
						<a href="/categories/3"
							@if ($category->name == 'Juices')
								class="active"
							@endif
							>
							Juices
						</a>
						</li>
    					<li>
						<a href="/categories/4"
							@if ($category->name == 'Dried')
								class="active"
							@endif
							>
							Dried
						</a>
						</li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
			@foreach ($products as $product)

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{ route('product-single-ms', ['id' => $product->id]) }}" class="img-prod"><img class="img-fluid" src="{{ $product->image }}" alt="Colorlib Template">
							@if($product->sale_off > 0)
                            <span class="status">{{ $product->sale_off }}%</span>
                            @endif
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{ route('product-single-ms', ['id' => $product->id])}}">{{ $product->name }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price">
										<span class="mr-2 price-dc">${{ $product->price }}</span>
										<span class="price-sale">${{ $product->price * (100 - $product->sale_off) / 100 }}</span>
									</p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
			@endforeach
    		</div>
    	</div>
		{{ $products->links() }}
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</x-my-sho>
