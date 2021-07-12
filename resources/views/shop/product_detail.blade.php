@extends('layouts.shop')
@section('content')

<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">
        <!--Breadcrumb-->
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>{{$product->name}}</span>
            </div>
        </div>
        <!--End Breadcrumb-->
        
        <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
            <!--product-single-->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img">

                            <div class="zoompro-wrap product-zoom-right pl-20">
                                <div class="zoompro-span">
                                    <img class="zoompro blur-up lazyload" data-zoom-image="{{asset('image/product/'.$product->image)}}" alt="" src="{{asset('image/product/'.$product->image)}}" />
                                </div>
                                <div class="product-labels"></div>

                            </div>
                            <div class="lightboximages">
                                <a href="assets/images/product-detail-page/product-labels1.jpg" data-size="1462x2048"></a>
                                <a href="assets/images/product-detail-page/product-labels2.jpg" data-size="1462x2048"></a>
                                <a href="assets/images/product-detail-page/product-labels4.jpg" data-size="1462x2048"></a>
                                <a href="assets/images/product-detail-page/product-labels5.jpg" data-size="1462x2048"></a>
                                <a href="assets/images/product-detail-page/product-labels6.jpg" data-size="1462x2048"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="margin-top: 15%">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{$product->name}}</h1>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                   
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">{{ 'Rp.' . number_format($product->price) }}</span></span>
                                    </span>
                                </p>
                            <div class="product-single__description rte">
                                <h5>Description</h5>
                                <p>{{$product->description}}</p>
                            </div>
                            <hr>
                            @if($product->bpom != null)
                            <div class="product-single__description rte">
                                <h5>BPOM : {{ $product->bpom }}</h5>
    
                            </div>
                            @endif

                            @if(Auth::check())

                            <form method="post" action="{{url('add-carts/' . $product->id)}}"  class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">

                                @csrf
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                {{-- <input type="hidden" value="{{$product->name}}" name="product_name">
                                                <input type="hidden" value="{{$product->price}}" name="product_price"> --}}
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="qty" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="product-form__item--submit" >
                                        <button class="btn product" style="background-color: #8AA385">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- End Product Action -->
                            </form>

                            @else 
                            <form method="post" action="{{url('add-carts/' . $product->id)}}"  class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                @csrf
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                                {{-- <input type="hidden" value="{{$product->name}}" name="product_name">
                                                <input type="hidden" value="{{$product->price}}" name="product_price"> --}}
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="qty" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="product-form__item--submit">
                                        <button class="btn product">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </form>
                             @endif
                            <div class="display-table shareRow">
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                                    <div class="display-table-cell text-right">
                                        <div class="social-sharing">
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                            </a>
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                            </a>
                                            <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                            </a>
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                            </a>
                                            <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                            </a>
                                         </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>

            <div class="tabs-listing">
                <div class="tab-container" style="margin-top: 40px">
                    <h2>Detail Product</h2><a href="#tab1" class="tablink">Product Reviews</a>
                    <hr>
                    <div id="tab1" class="tab-content">
                        <div class="product-description rte">
                            <h3>Skin Feel</h3>
                            <p>{{$product->skinfeel}}</p>
                            <h3> Key Ingredients</h3>
                            {!!$product->keyingredients!!} 
                            <h3>Ingredients.</h3>
                            {!!$product->ingredients!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2" style="font-family: 'Poppins';">PRODUK LAINNYA</h2>
                            
                        </div>
                        <div class="productSlider grid-products">
                            <?php $product = DB::table('products')->get();?>

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

    </div>

</div>
<hr>




@endsection