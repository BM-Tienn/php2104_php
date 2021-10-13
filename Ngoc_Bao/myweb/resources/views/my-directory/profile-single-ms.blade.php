<x-my-web>    
    <div class="creator" style="text-align: center; margin-bottom: 100px; font-size: 60px">{{$profile->user->name}}</div>
    <div class="container" style="min-height: 500px; display: grid; grid-template-collumn: 1fr 1fr;">
        <div class="left blogs" style="grid-column: 1/2">
            <b style="font-size: 50px; margin-left: 10px; margin-bottom: 400px">Blogs Created</b>
            @php
                $blogs = $profile->user->blogs()->paginate(config('blog.paginate4')); 
            @endphp
             {{-- start loop blogs from blogcontroller--}}
             @foreach ($blogs as $blog)
             <div class="col-md-12 d-flex ftco-animate">
                 <div class="blog-entry align-self-stretch d-md-flex">
                     <a href="#" class="block-20" style="background-image: url('{{$blog->image}}');">
                     </a>
                     <div class="text d-block pl-md-4">
                         <div class="meta mb-3">
                             <div><a href="#">{{$blog->created_at}}</a></div>
                             <div><a href="#">{{$blog->user->name}}</a></div>
                             <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                         </div>
                         <h3 class="heading"><a href="#">{{$blog->title}}</a></h3>
                         <p>{{$blog->content}}</p>
                         <p><a href="{{route('blog-single-ms',['id' => $blog->id])}}" class="btn btn-primary py-2 px-3">Read more</a></p>
                     </div>
                 </div>
             </div>
             @endforeach
             <div style="display: flex; justify-content: left;">
                {{ $blogs->links() }}
            </div>
             {{-- end loop --}}
        </div>
        <div class="right products" style="grid-column: 2/3">
            <b style="font-size: 50px; margin-left: 10px; margin-bottom: 400px">Products Created</b>
            @php
                $products = $profile->user->products()->paginate(config('product.paginate4')); 
            @endphp
             {{-- start loop blogs from blogcontroller--}}
             @foreach ($products as $product)
             <div class="col-md-12 d-flex ftco-animate">
                 <div class="blog-entry align-self-stretch d-md-flex">
                     <a href="#" class="block-20" style="background-image: url('{{$product->image}}');">
                     </a>
                     <div class="text d-block pl-md-4">
                         <div class="meta mb-3">
                             <div><a href="#">{{$product->created_at}}</a></div>
                             <div><a href="#">{{$product->user->name}}</a></div>
                             <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                         </div>
                         <h3 class="heading"><a href="#">{{$product->title}}</a></h3>
                         <p>{{$product->content}}</p>
                         <p><a href="{{route('product-single-ms',['id' => $product->id])}}" class="btn btn-primary py-2 px-3">Read more</a></p>
                     </div>
                 </div>
             </div>
             @endforeach
             <div style="display: flex; justify-content: left;">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-my-web>