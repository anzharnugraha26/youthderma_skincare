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
                            <div class="product-single__description rte">
                                <h5>Suited To</h5>
                                <p>{{$product->suitedto}}</p>
                            </div>
                            <div class="product-single__description rte">
                                <h5>How To Use</h5>
                                <p>{{$product->howtouse}}</p>
                            </div>
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
    </div>
</div>
<hr>




@endsection