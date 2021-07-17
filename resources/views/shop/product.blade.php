@extends('layouts.shop')
@section('content')
<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"><img data-src="{{asset('image/gallery/1d.jpg')}}" src="{{asset('image/gallery/1d.jpg')}}" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Shop List View</h1></div>
          </div>
    </div>
 <div class="container" style="margin-top: 20px">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>All Products</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                   @foreach ($product as $item)
                                   <li class="lvl-1"><a href="{{url('product-detail/' . $item->id)}}" class="site-nav">{{$item->name}}</a></li>                                       
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                        
						<div class="sidebar_widget">
             
						<div class="widget-content">
                                
              </div>
						</div>
                        <!--End Popular Products-->
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                        	<img src="assets/images/side-banner-2.jpg" alt="" />
                        </div>
                       
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="productList">
                        <div class="list-view-items grid--view-items">
                        	<!--ListView Item-->
                            @foreach ($product as $item)
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="{{url('product-detail/' . $item->id)}}"><img class="list-view-item__image blur-up lazyload" data-src="{{asset('image/product/' .$item->image)}}" src="{{asset('image/product/' .$item->image)}}" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="{{url('product-detail/' . $item->id)}}" >{{$item->name}}</a></div>
                                    <!-- Product Review -->
                                   <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p>{{$item->description}}</p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        {{-- <span class="old-price">$600.00</span> --}}
                                        <span class="product-price__price product-price__sale"><span class="money">{{ 'Rp.' . number_format($item->price)}}</span></span>
                                    </p>
                                    <!-- End Price -->
                                    <form class="variants" action="{{url('product-detail/' .$item->id)}}">
                                        @csrf
                                    	<button class="btn btn--small" style="background-color: #8AA385" >View Detail</button>
	                                </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>


@endsection