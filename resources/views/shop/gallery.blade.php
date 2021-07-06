@extends('layouts.shop')
@section('content')
<div id="page-content">
    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{asset('image/shop-slider/1.jpg')}}" src="{{asset('image/shop-slider/1.jpg')}}" alt="Youthderma SkinCare" title="Youthderma SkinCare" />
                    {{-- <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="wrap-caption right">
                                <h2 class="h1 mega-title slideshow__title">Youthderma SkinCare</h2>
                                <span class="mega-subtitle slideshow__subtitle">SALE up to 30% off</span>
                                <span class="btn">Shop now</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{asset('image/shop-slider/4.jpg')}}" src="{{asset('image/shop-slider/4.jpg')}}" alt="SumYouthderma SkinCare" title="SumYouthderma SkinCare" />
                    {{-- <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="wrap-caption left">
                                <h2 class="h1 mega-title slideshow__title">Mid Season SAle</h2>
                                <span class="mega-subtitle slideshow__subtitle">Up to 70% off on selected item.</span>
                                <span class="btn">Shop now</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!--End Home slider-->
    
    <!--Image Banners-->
    <div class="section imgBanners pb-0">
        <div class="imgBnrOuter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Gallery BY Youthderma Skincare </h2>
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
                                            Youthderma SkinCare <h5>Sun Glasses, Shoes and more</h5>
                                        </div> --}}
                                    </a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row img-grid-banner2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="inner topleft">
                            <a href="#">	
                                <img data-src="{{asset('image/gallery/1e.jpg')}}" src="{{asset('image/gallery/1f.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                {{-- <div class="ttl">
                                    All the Shiniest <h5>Shop Jewelry</h5>
                                </div> --}}
                            </a>
                         </div>
                     
                        <div class="inner topright">
                            <a href="#">	
                                <img data-src="{{asset('image/gallery/1f.jpg')}}" src="{{asset('image/gallery/1f.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                {{-- <div class="ttl">
                                    Every Little Things <h5>Shop Cosmetics</h5>
                                </div> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 image-banner-2">
                        <div class="inner topleft">
                            <a href="#">	
                                <img data-src="{{asset('image/gallery/1g.jpg')}}" src="{{asset('image/gallery/1g.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                {{-- <div class="ttl">
                                    Elevate Every Look <h5>Shop Men's Clothing</h5>
                                </div> --}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row img-grid-banner3">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 image-banner-2">
                        <div class="inner center">
                            <a href="#">	
                                <img data-src="{{asset('image/gallery/1h.jpg')}}" src="{{asset('image/gallery/1h.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                {{-- <div class="ttl text-center">
                                    Shape Your look <h5>Shop Now</h5>
                                </div> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="inner center">
                            <a href="#">	
                                <img data-src="{{asset('image/gallery/1i.jpg')}}" src="{{asset('image/gallery/1i.jpg')}}" alt="Shop Jewelry" title="Shop Jewelry" class="blur-up lazyload" />
                                {{-- <div class="ttl">Shop Kids</div> --}}
                            </a>
                         </div>
                     
                        <div class="inner topright">
                            <a href="#">	
                                <img data-src="{{asset('image/gallery/1j.jpg')}}" src="{{asset('image/gallery/1j.jpg')}}" alt="Gallery" title="Gallery" class="blur-up lazyload" />
                                {{-- <div class="ttl">
                                    Shop <h5>Kids Accessories</h5>
                                </div> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Image Banners-->
    

</div>
@endsection
