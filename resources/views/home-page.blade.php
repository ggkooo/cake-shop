@include('layout.hero')

<section class="container">
    @if(session()->has('message') )  {{-- session message to show instant message container  --}}
    <div class="alert alert-{{session('type')}}">
        {{session('message')}}
    </div>
    @endif
    {{--    <div class="container-fluid">--}}
    <!--Benefits  -->
    <section class="sections benefits">
        <div class="benefit-center box">
            <div class="benefit">
                <span class="icon"><i class="bx bx-purchase-tag"></i></span>
                <h4>Fast Shipping</h4>
                <span class="text">At a low cost</span>
            </div>


            <div class="benefit">
                <span class="icon"><i class="bx bx-book-reader"></i></span>
                <h4>Yummy and Fresh</h4>
                <span class="text">Free of chemicals</span>
            </div>

            <div class="benefit">
                <span class="icon"><i class="bx bx-headphone"></i></span>
                <h4>Pre-Order</h4>
                <span class="text">Call us to pre-order</span>
            </div>
        </div>
    </section>

    <!-- New Arrivals -->
    <section class="sections">
        <div class="h">
            <h1><span>New</span> Arrivals</h1>
        </div>
        <div class="ac-center box">
            @foreach(array_slice($latests->toArray(), 0, 3) as $latest)
                <div class="ac">
                    <div class="img-cover" style=" width: 100%;height: auto;">
                        @if(is_file('uploads/products/'.$latest['image_prod']))
                            <img  src="{{ asset('/uploads/products/'.$latest['image_prod']) }}" alt="">
                        @else
                            <img src="{{url($latest['image_prod'])}}" alt="">
                        @endif
                    </div>
                    <p>{{$latest['title']}}</p>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                    </div>
                    @if($latest['sale_price']>0)
                        <div class="price">
                            <strike style="color: #761b18;">BDT {{$latest['price']}}</strike>
                            <span style="color: #2d995b">BDT {{$latest['sale_price']}}</span>
                        </div>
                        <a href="{{route('products.productshop')}}" class="btn btn-outline-success">ORDER NOW</a>
                    @else
                        <div class="price">BDT {{$latest['price']}}</div>
                        <a href="{{route('products.productshop')}}" class="btn btn-outline-success">ORDER NOW</a>
                    @endif
                </div>
            @endforeach

        </div>
    </section>

    <!-- Shop By Category -->
    <section class="sections">
        <div class="h">
            <h1><span>Shop By</span> Categories</h1>
        </div>
        <div class="ab box">
            <div class="item item-1">
                @if(is_file('uploads/categories/'.$categories->toArray()[0]['image_cat']))
                    <img  src="{{ asset('/uploads/categories/'.$categories->toArray()[0]['image_cat']) }}" alt="">
                @else
                    <img src="{{url($categories->toArray()[0]['image_cat'])}}" alt="">
                @endif

            </div>
            <div class="item item-2">
                @if(is_file('uploads/categories/'.$categories->toArray()[1]['image_cat']))
                    <img  src="{{ asset('/uploads/categories/'.$categories->toArray()[1]['image_cat']) }}" alt="">
                @else
                    <img src="{{url($categories->toArray()[1]['image_cat'])}}" alt="">
                @endif
            </div>
            <div class="item item-3">
                @if(is_file('uploads/categories/'.$categories->toArray()[2]['image_cat']))
                    <img  src="{{ asset('/uploads/categories/'.$categories->toArray()[2]['image_cat']) }}" alt="">
                @else
                    <img src="{{url($categories->toArray()[3]['image_cat'])}}" alt="">
                @endif
            </div>
            <div class="item item-4">
                @if(is_file('uploads/categories/'.$categories->toArray()[3]['image_cat']))
                    <img  src="{{ asset('/uploads/categories/'.$categories->toArray()[3]['image_cat']) }}" alt="">
                @else
                    <img src="{{url($categories->toArray()[3]['image_cat'])}}" alt="">
                @endif
            </div>
        </div>
    </section>

    <!-- Popular Products -->
    <section class="sections">
        <div class="h">
            <h1><span>Popular</span> Products</h1>
        </div>
        <div class="ac-center box">
            @foreach(array_slice($products->toArray(), 4, 12) as $product)
                <div class="ac">
                    <div class="img-cover">
                        @if(is_file('uploads/products/'.$product['image_prod']))

                            <img  src="{{ asset('/uploads/products/'.$product['image_prod']) }}" alt="">
                        @else
                            <img src="{{url($product['image_prod'])}}" alt="">
                        @endif
                    </div>
                    <p>{{$product['title']}}</p>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                    </div>
                    @if($product['sale_price']>0)
                        <div class="price">
                            <strike style="color: #761b18;">BDT {{$product['price']}}</strike>
                            <span style="color: #2d995b">BDT {{$product['sale_price']}}</span>
                        </div>
                        <a href="{{route('products.productshop')}}" class="btn btn-outline-success">ORDER NOW</a>
                    @else
                        <div class="price">BDT {{$product['price']}}</div>
                        <a href="{{route('products.productshop')}}" class="btn btn-outline-success">ORDER NOW</a>
                    @endif
                    {{--                    <div class="price">LKR 8500</div>--}}
                </div>
            @endforeach

        </div>
    </section>


    <h3 class="pb-3 mb-4 font-italic border-bottom">

    </h3>
    @if(\Illuminate\Support\Facades\Auth::user())
        @if(\Illuminate\Support\Facades\Auth::user()->role_as==1)
            <div class="blog-post">
                <h2 class="blog-post-title" style="text-align: center;">Admin Management Section</h2>

                <p>
                    <a href="{{route('categories.index')}}" class="btn btn-info btn-block">Category Management</a>
                </p>
                <p>
                    <a href="{{route('products.index')}}" class="btn btn-info btn-block">Products Management</a>
                </p>
                <p>
                    <a href="{{route('orders.index')}}" class="btn btn-info btn-block">Orders Management</a>
                </p>
            </div>
        @endif
    @endif
</section>
