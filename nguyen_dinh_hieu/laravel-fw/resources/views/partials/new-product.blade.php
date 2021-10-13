<section class="new-product-area section-padding30">
    <div class="container">
        <!-- Section tittle -->
        <div class="row">
            <div class="col-xl-12">
                <div class="section-tittle mb-70">
                    <h2>New Arrivals</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($category as $list_category)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-new-pro mb-30 text-center">
                    <div class="product-img">
                        <img src="/time-zone/assets/img/gallery/{{ $list_category->image }}" alt="">
                    </div>
                    <div class="product-caption">
                        <h3><a href="{{ route('category.show', ['id' => $list_category->id]) }}">{{ $list_category->name }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>