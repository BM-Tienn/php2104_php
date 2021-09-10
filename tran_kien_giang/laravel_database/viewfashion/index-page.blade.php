<x-home>
    @section('section')
    <!-- Hero Section Begin -->
    @include('includes.section-overlay')
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    @include('includes.section-banner')
    <!-- Banner Section End -->
    
    <!-- Product Section Begin -->
    @include('includes.section-product')
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    @include('includes.section-categories')
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    @include('includes.section-instagram') 
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    @include('includes.section-blog') 
    <!-- Latest Blog Section End -->
    @endsection
</x-home>