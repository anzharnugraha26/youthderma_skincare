<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/home2-default.html   11 Nov 2019 12:22:28 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Youthderma Skincare | Online Store</title>
<meta name="description" content="youthdermaskincare">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('image/logo/logo3.png')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('shop-new/assets/css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('shop-new/assets/css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('shop-new/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('shop-new/assets/css/responsive.css')}}">

{{-- cek --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
{{-- <link href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.3.2/dist/select2-bootstrap4.min.css" rel="stylesheet" /> --}}
</head>
<body class="template-index home2-default">
<div id="pre-loader">
    <img src="{{asset('shop-new/assets/images/loader.gif')}}" alt="Loading..." />
</div>
<div class="pageWrapper">
	<!--Promotion Bar-->
    {{-- @if(Auth::Check())
	<div class="notification-bar mobilehide" style="background: #F4EFED">
    	<a href="#" class="notification-bar__message" style="color: black">Welcome {{Auth::user()->name}}</a>
        <span class="close-announcement">×</span>
    </div>
    @else 
    @endif --}}
    <!--End Promotion Bar-->
	<!--Search Form Drawer-->
	{{-- <div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div> --}}
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header" style="background: white">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    {{-- <div class="currency-picker">
                        <span class="selected-currency">USD</span>
                        <ul id="currencies">
                            <li data-currency="INR" class="">INR</li>
                            <li data-currency="GBP" class="">GBP</li>
                            <li data-currency="CAD" class="">CAD</li>
                            <li data-currency="USD" class="selected">USD</li>
                            <li data-currency="AUD" class="">AUD</li>
                            <li data-currency="EUR" class="">EUR</li>
                            <li data-currency="JPY" class="">JPY</li>
                        </ul>
                    </div> --}}
                    {{-- <div class="language-dropdown">
                        <span class="language-dd">English</span>
                        <ul id="language">
                            <li class="">German</li>
                            <li class="">French</li>
                        </ul>
                    </div> --}}
                    <p class="phone-no"><i class="anm anm-phone-s"></i> 0821 1210 0020</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                    @if(Auth::Check())
                	<div class="text-center"><p class="top-header_middle-text"> Welcome {{Auth::user()->name}}</p></div>
                    @else
                	<div class="text-center"><p class="top-header_middle-text"> Youthderma Skincare</p></div>
                    @endif
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        @if (Auth::check()) 
                        <li><a href="{{url('logout')}}">Log-Out</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        @else
                        <li><a href="{{url('login')}}">Login</a></li>
                        <li><a href="{{url('register')}}">Create Account</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex border-bottom" style="background: #8AA385">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="{{url("/")}}">
                    	<img src="{{asset('image/logo/shop.png')}}" alt="Youthderma Aesthetic Clinic" title="Youthderma Aesthetic Clinic" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                          <li><a href="{{url("/")}}" class="site-nav lvl-2" style="color: white;text-transform: capitalize;">Home </a></li>
                          <li class="lvl1 parent dropdown"><a href="{{url("/products")}}" style="color: white;text-transform: capitalize;">Produk<i class="anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <?php $pr = DB::table('products')->paginate(10); ?>
                                @foreach ($pr as $item)            
                                <li><a href="{{url('product-detail/' . $item->id)}}" class="site-nav">{{$item->name}}</a></li>
                                @endforeach
                              <li><a href="{{url("/products")}}" class="site-nav">All Product</a></li>
                        
                            </ul>
                          </li>
                          {{-- <li class="lvl-2"><a href="{{url("/products")}}" class="site-nav lvl-2" style="color: white;text-transform: capitalize;">Produk </a></li> --}}
                          @if (Auth::check()) 
                          <li class="lvl-2"><a href="{{url("/carts")}}" class="site-nav lvl-2" style="color: white;text-transform: capitalize;">Carts |
                            <span><?php $p = DB::table('keranjangs')->where('user_id', Auth::user()->id)->count(); echo $p;?></span></a></li>
                            <li class="lvl-2"><a href="{{url("/order")}}" class="site-nav lvl-2" style="color: white;text-transform: capitalize;">Order</a></li>
                            <li class="lvl-2"><a href="{{url("/order")}}" class="site-nav lvl-2" style="color: white;text-transform: capitalize;">Confirm Payment</a></li>
                          @endif
                          <li class="lvl-2"><a href="{{url("/gallery")}}" class="site-nav lvl-2" style="color: white;text-transform: capitalize;">Gallery</a></li>
                          <li class="lvl-2"><a href="{{url("/contact-us")}}" class="site-nav lvl-2" style="color: white;text-transform: capitalize;">Kontak</a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                    <a href="{{url("/")}}">
                    <div class="logo">
                            <img src="{{asset('image/logo/shop.png')}}" alt="Youthderma Aesthetic Clinic" title="Youthderma Aesthetic Clinic" />
                    </div>
                    </a>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                        @if (Auth::check()) 
                        <?php $p = DB::table('keranjangs')->where('user_id', Auth::user()->id)->count();?>
                    	<a href="{{url("carts")}}" class="site-header__cart" style="color: white">
                        	<i class="icon anm anm-bag-l"></i>
                            @if($p > 0)
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php echo $p; ?></span>
                            @endif
                            {{-- <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span> --}}
                        </a>
                        @else
                        <a href="{{url("check-out")}}" class="site-header__cart" title="Cart" style="color: white">
                        	<i class="icon anm anm-bag-l"></i>
                            {{-- <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span> --}}
                        </a>
                        @endif
                        @if (Auth::check()) 
                        <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                                <?php $c = DB::table('keranjangs')->where('user_id', Auth::user()->id)->get();?>
                                <?php $subtotal=0; foreach ($c as $item): ?>
                                <?php $p = DB::table('products')->where('id', $item->products_id)->get()?>
                                @foreach ($p as $i)
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="{{asset('image/product/'. $i->image)}}" alt="3/4 Sleeve Kimono Dress" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">{{$i->name}}</a>

                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="{{$item->qty}}" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money">{{ 'Rp.' . number_format($i->price * $item->qty) }}</span>
                                            </div>
                                         </div>
									     </div>
                                </li>
                                <?php
                                $total = $i->price * $item->qty;
                                $subtotal = $subtotal + $total;
                                 ?> 
                            
                                @endforeach
                                <?php endforeach; ?>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">{{ 'Rp.' . number_format($subtotal)}}</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="{{url("/carts")}}" class="btn btn-secondary btn--small">View Cart</a>
    
                                </div>
                            </div>
                        </div>
                        @endif
                        <!--End Minicart Popup-->
                    </div>
                    {{-- <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div> --}}
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
          <li class="lvl-2"><a href="{{url("")}}" class="site-nav lvl-2">Home </a></li>
          <li class="lvl-2"><a href="{{url("/products")}}" class="site-nav lvl-2">Produk </a></li>
          <li class="lvl-2"><a href="{{url("/gallery")}}" class="site-nav lvl-2">Gallery </a></li>
          <li class="lvl-2"><a href="{{url("/contact-us")}}" class="site-nav lvl-2">Kontak </a></li>
          @if(Auth::check())
          <li class="lvl-2"><a href="{{url("/carts")}}" class="site-nav lvl-2">Cart</a></li>
          <li class="lvl-2"><a href="{{url("/order")}}" class="site-nav lvl-2" style="color: white">Order</a></li>
          @endif
        </ul>
	</div>

    @yield('content')

    <a href="https://wa.me/6282112100020?text=Hallo Youthderma Aesthetic Clinic" class="float" target="_blank">						
        <i class="fa fa-whatsapp my-float"></i></a>
   
 


<footer id="footer" class="footer-2">
    
  <div class="newsletter-section">
      <div class="container">
          <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                      <div class="display-table">
                          <div class="display-table-cell footer-newsletter">
                              {{-- <div class="section-header text-center">
                                  <label class="h2"><span>sign up for </span>newsletter</label>
                              </div> --}}
                              {{-- <form action="#" method="post">
                                  <div class="input-group">
                                      <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                      <span class="input-group__btn">
                                          <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                      </span>
                                  </div>
                              </form> --}}
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                      <div class="footer-social">
                          <ul class="list--inline site-footer__social-icons social-icons">
                              {{-- <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                              <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                              <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li> --}}
                              <li><a class="social-icons__link" href="https://www.instagram.com/youthderma_id/" target="_blank" title="Youthderma Skincare on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                              Oficial Account Instagram :<a class="social-icons__link" href="https://www.instagram.com/youthderma_id/" target="_blank" title="Youthderma Skincare on Instagram"> @youthderma_id</a>
                              {{-- <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                              <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                              <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li> --}}
                          </ul>
                      </div>
                  </div>
              </div>
      </div>    
  </div>
        
    @include('include.footer')   
  
    <div class="site-footer">
    <hr>
            <div class="footer-bottom">
                <div class="row">
                    <!--Footer Copyright-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-center"><span></span> &copy; 2021 . All Rights Reserved. <a href="{{url("/")}}" target="_blank">Youthderma SkinCare</a></div>
                    <!--End Footer Copyright-->
                </div>
            </div>
  </div>
</footer>
<!--End Footer-->
<!--Scoll Top-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>

</div>
<!-- End Newsletter Popup -->

<!-- Including Jquery -->
<script src="{{asset('shop-new/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('shop-new/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('shop-new/assets/js/vendor/jquery.cookie.js')}}"></script>
<script src="{{asset('shop-new/assets/js/vendor/wow.min.js')}}"></script>
<!-- Including Javascript -->
<script src="{{asset('shop-new/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('shop-new/assets/js/plugins.js')}}"></script>
<script src="{{asset('shop-new/assets/js/popper.min.js')}}"></script>
<script src="{{asset('shop-new/assets/js/lazysizes.js')}}"></script>
<script src="{{asset('shop-new/assets/js/main.js')}}"></script>

<script src="{{asset('shop-new/assets/js/vendor/photoswipe.min.js')}}"></script>
<script src="{{asset('shop-new/assets/js/vendor/photoswipe-ui-default.min.js')}}"></script>


{{-- cek --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(Session::has('add-to'))
<script>
    Swal.fire(
  'Good job!',
  'Product Add in Carts',
  'success')
</script>
@endif

@if(Auth::check())

@if(Auth::user()->email_verified_at==null)
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Anda belum verifikasi Email',
            text: 'Silahkan Verifikasi email anda terlebih dahulu',
            // text: 'Silahkan Login atau Register untuk melanjutkan !!',
        })
    </script>
@endif
@endif

<!--For Newsletter Popup-->
<script>

if(Cookies.get('promotion') != 'true') {   
 $(".notification-bar").show();         
}
$(".close-announcement").on('click',function() {
$(".notification-bar").slideUp();  
Cookies.set('promotion', 'true', { expires: 1});  
return false;
});
</script>

@yield('script-shop')
<!--End For Newsletter Popup-->
</div>
</body>

<!-- belle/home2-default.html   11 Nov 2019 12:23:42 GMT -->
</html>