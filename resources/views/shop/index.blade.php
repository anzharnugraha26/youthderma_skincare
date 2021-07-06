@extends('layouts.shop')
@section('content')
<div id="page-content">
    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{asset('image/shop-slider/1.jpg')}}" src="{{asset('image/shop-slider/home.jpg')}}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                {{-- <div class="wrap-caption right">
                                    <h2 class="h1 mega-title slideshow__title">Our New Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% Off</span>
                                    <span class="btn">Shop now</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{asset('image/shop-slider/2.jpg')}}" src="{{asset('image/shop-slider/main_home.jpg')}}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                {{-- <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                    <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy Fashion Clother's</span>
                                    <span class="btn">Shop now</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{asset('image/shop-slider/3.jpg')}}" src="{{asset('image/shop-slider/main_home.jpg')}}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                {{-- <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                    <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy Fashion Clother's</span>
                                    <span class="btn">Shop now</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{asset('image/shop-slider/4.jpg')}}" src="{{asset('image/shop-slider/main_home.jpg')}}" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                {{-- <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                    <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy Fashion Clother's</span>
                                    <span class="btn">Shop now</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Home slider-->
    <!--Weekly Bestseller-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2" style="font-family: 'Poppins';">All Products</h2>
                        
                    </div>
                    <div class="productSlider grid-products">
                       @foreach ($product as $item)
                       
                       <div class="col-12 item">
                           <!-- start product image -->
                           <div class="product-image">
                               <!-- start product image -->
                               <a href="{{url('product-detail/'. $item->id)}}" class="grid-view-item__link">
                                   <img class="primary blur-up lazyload" data-src="{{asset('image/product/'.$item->image)}}" src="{{asset('image/product/'.$item->image)}}" alt="image" title="product">
                                   <img class="hover blur-up lazyload" data-src="{{asset('image/product/'.$item->image)}}" src="{{asset('image/product/'.$item->image)}}" alt="image" title="product">
                                   <img class="grid-view-item__image hover variantImg" src="{{asset('image/product/'.$item->image)}}" alt="image" title="product">
                               </a>
                               @if(Auth::check())
                               <form class="variants add" action="{{url('add-carts/' .$item->id)}}" method="post">
                                @csrf
                                        <input type="hidden" value="{{$item->id}}" name="product_id">
                                        {{-- <input type="hidden" value="{{$item->name}}" name="product_name">
                                        <input type="hidden" value="{{$item->price}}" name="product_price">
                                        <input type="hidden" value="{{$item->weight}}" name="weight"> --}}
                                        <input type="hidden" value="1" name="qty">
                                        <button class="btn btn-addto-cart" tabindex="0">Add To Cart</button>
                               </form>
                               @else
                               <form class="variants add" action="{{url("product-detail/". $item->id)}}" method="get">
                                @csrf
                                        <button class="btn btn-addto-cart" tabindex="0">View Detail</button>
                               </form>
                                @endif
                               {{-- <div class="button-set">
                                   <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                       <i class="icon anm anm-search-plus-r"></i>
                                   </a>
                                   <div class="wishlist-btn">
                                       <a class="wishlist add-to-wishlist" href="wishlist.html">
                                           <i class="icon anm anm-heart-l"></i>
                                       </a>
                                   </div>
                                   <div class="compare-btn">
                                       <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                           <i class="icon anm anm-random-r"></i>
                                       </a>
                                   </div>
                               </div> --}}
                           </div>

                           <div class="product-details text-center">
                               
                               <div class="product-name">
                                   <a href="{{url('product-detail/'. $item->id)}}">{{$item->name}}</a>
                               </div>
                            
                               <div class="product-price">
                                   <span class="price">{{ 'Rp.' . number_format($item->price) }}</span>
                               </div>
                               <!-- End Variant -->
                           </div>
                           <!-- End product details -->
                       </div>
                       
                       @endforeach



                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!--Weekly Bestseller-->
    <!--Parallax Section-->
    <div class="section">
        <div class="hero hero--large hero__overlay bg-size">
            <img class="bg-img" src="{{asset('image/background/detail.jpg')}}" alt="" />
            <div class="hero__inner">
                <div class="container">
                    <div class="wrap-text left text-small font-bold">
                        <h2 class="h2 mega-title">Physician Formulated Skincare</h2>
                        <div class="rte-setting mega-subtitle">Our Skincare essentials are designed to make you look and feel your glowy</div>
                        <a href="{{url("product")}}" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Parallax Section-->

    <div class="section imgBanners pb-0">
        <div class="imgBnrOuter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            {{-- <h2 class="h2">Gallery BY Youthderma Skincare </h2> --}}
                            {{-- <p>Shop the Nicest Deals on Best Prices in all category</p> --}}
                        </div>
                        
                    </div>
                </div>    
                <div class="row img-grid-banner1">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 image-banner-1">
                        <div class="inner topright">
                            <a href="#">	
                                   <img data-src="{{asset('image/gallery/1a.JPG')}}" src="{{asset('image/gallery/1a.JPG')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                {{-- <div class="ttl">
                                    Shop <h5>Halloween Look</h5>
                                </div> --}}
                            </a>
                         </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 image-banner-2">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 image-banner-3">
                                <div class="inner topright">
                                    <a href="#">	
                                        <img data-src="{{asset('image/gallery/1b.jpg')}}" src="{{asset('image/gallery/1b.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                        {{-- <div class="ttl">
                                            Shop <h5>Heeled Boots</h5>
                                        </div> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="inner btmleft">
                                    <a href="#">	
                                        <img data-src="{{asset('image/gallery/1c.jpg')}}" src="{{asset('image/gallery/1c.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                        {{-- <div class="ttl">
                                            Shop Cool <h5>Caps</h5>
                                        </div> --}}
                                    </a>
                                </div>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                                <div class="inner center">
                                    <a href="#">	
                                        <img data-src="{{asset('image/gallery/1d.jpg')}}" src="{{asset('image/gallery/1d.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                        {{-- <div class="ttl">
                                            Hot Summer Collection <h5>Sun Glasses, Shoes and more</h5>
                                        </div> --}}
                                    </a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>


    <!--New Arrivals-->
    <div class="product-rows section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">All Products</h2>
                        {{-- <p>Grab these new items before they are gone!</p> --}}
                    </div>
                </div>
            </div>
            <div class="grid-products">
                <div class="row">
                    @foreach ($product as $item)
                    <div class="col-6 col-sm-2 col-md-4  item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="{{url('product-detail/'. $item->id)}}" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{asset('image/product/'.$item->image)}}" src="{{asset('image/product/'.$item->image)}}" alt="image" title="product">
                             
                                <img class="hover blur-up lazyload" data-src="{{asset('image/product/'.$item->image)}}" src="{{asset('image/product/'.$item->image)}}" alt="image" title="product">
                               
                                <img class="grid-view-item__image hover variantImg" src="{{asset('image/product/'.$item->image)}}" alt="image" title="product">
                               
                            </a>


                            @if(Auth::check())
                               <form class="variants add" action="{{url('add-carts/' .$item->id)}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$item->id}}" name="product_id">
                                <input type="hidden" value="1" name="qty">
                                        <button class="btn btn-addto-cart" tabindex="0">Add To Cart</button>
                               </form>
                               @else
                               <form class="variants add" action="{{url("product-detail/". $item->id)}}" method="get">
                                @csrf
                                        <button class="btn btn-addto-cart" tabindex="0">View Detail</button>
                               </form>
                             
                            @endif
{{-- 
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div>
                                <div class="compare-btn">
                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                        <i class="icon anm anm-random-r"></i>
                                    </a>
                                </div>
                            </div> --}}
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="{{url('product-detail/'. $item->id)}}">{{$item->name}}</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                {{-- <span class="old-price">$500.00</span> --}}
                                <span class="price">{{ 'Rp.' . number_format($item->price) }}</span>
                            </div>
                           
                        </div>
                        <!-- End product details -->
                    </div>
                    @endforeach
                   
                </div>
                </div>

            </div>
       </div>
    </div>	
</div>  

@endsection
