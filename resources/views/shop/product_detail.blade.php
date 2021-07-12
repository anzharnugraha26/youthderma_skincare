@extends('layouts.shop')
@section('content')
<style>
    body {font-family: Arial;}
    
    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #8AA385;
      background-color: #8AA385;
    }
    
    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 14px;
      transition: 0.3s;
      font-size: 17px;
    }
    
    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #8AA385;
    }
    
    /* Create an active/current tablink class */
    .tab button.active {
      background-color: white;
    }
    
    /* Style the tab content */
    .tabcontent {
      display: none;
      font-size: 15px;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
    </style>

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
                                <h1>{{$product->name}}</h1>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                   
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">{{ 'Rp.' . number_format($product->price) }}</span></span>
                                    </span>
                                </p>
                            </div>
                            <div class="product-single__description rte">
                                <h5>Description</h5>
                                <p>{{$product->description}}</p>
                            </div>
                            <hr>
                            @if($product != null)
                            <div class="product-single__description rte">
                                <h5>BPOM : {{ $product->bpom }}</h5>
    
                            </div>
                            @endif

                            
                            <div class="card">
                                <br>
                                @if(Auth::check())
                                
                                    <form method="post" action="{{url('add-carts/' . $product->id)}}"  class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">

                                        @csrf
                                        <div class="product-action clearfix" style="margin-left: 20px;margin-right: 20px;">
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
                                        <div class="product-action clearfix" style="margin-left: 20px;margin-right: 20px;">
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
                                                <button class="btn product" style="background-color: #8AA385">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>

                            <div class="display-table shareRow">
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>

            <div class="card-body">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Cara Penggunaan</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Informasi Produk</button>
                  </div>
                  
                  <div id="London" class="tabcontent">
                      <div class="card-body">
                          <h3>Cara Penggunaan :</h3>
                          <p>{{ $product->cara_penggunaan }}</p>
                      </div>
                  </div>
                  
                  <div id="Paris" class="tabcontent">
                        <div class="card-body">
                            @if($product->description != null)
                                <h3>Keterangan :</h3>
                                <p>{{ $product->description }}</p>
                            @endif

                            @if($product->cara_penggunaan != null)
                                <h3>Cara Penggunaan :</h3>
                                <p>{{ $product->cara_penggunaan }}</p>
                            @endif
                            
                            @if($product->howtouse != null)
                                <h3>How to Use :</h3>
                                <p>{{ $product->howtouse }}</p>
                            @endif
                            
                            @if($product->howtouse != null)
                                <h3>Ingredients :</h3>
                                <p>{!! $product->ingredients !!}</p>
                            @endif
                            
                            @if($product->howtouse != null)
                                <h3>key ingredients :</h3>
                                <p>{!! $product->keyingredients !!}</p>
                            @endif
                            
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



  
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@endsection