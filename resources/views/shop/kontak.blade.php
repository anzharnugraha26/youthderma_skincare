@extends('layouts.shop')
@section('content')
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Contact Us</h1></div>
          </div>
    </div>
    <!--End Page Title-->
    <div class="map-section map">
        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Youthderma%20Clinic+(Youthderma%20Clinic)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" height="350" allowfullscreen></iframe>
        {{-- <div class="container">
            <div class="row">
                <div class="map-section__overlay-wrapper">
                    <div class="map-section__overlay">
                        <h3 class="h4">Our store</h3>
                        <div class="rte-setting">
                            <p>123 Fake St.<br>Toronto, Canada</p>
                            <p>Mon - Fri, 10am - 9pm<br>Saturday, 11am - 9pm<br>Sunday, 11am - 5pm</p>
                        </div>
                        <p><a href="https://maps.google.com/?daddr=80%20Spadina%20Ave,%20Toronto" class="btn btn--secondary btn--small" target="_blank">Get directions</a></p>
                    </div>
                   </div>
            </div>
        </div> --}}
    </div>
    <div class="bredcrumbWrap">
        <div class="container breadcrumbs">
            <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Contact Us</span>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                <h2>Drop Us A Line</h2>
                <div class="formFeilds contact-form form-vertical">
                  <form action="{{ url("sendkontak") }}" method="post">
                    @csrf	
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            @if(Auth::check())
                          <input type="text" id="ContactFormName" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required="">
                          @else
                          <input type="text" id="ContactFormName" name="name" placeholder="Name" value="" required="">
                          @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            @if(Auth::check())
                        <input type="email" id="ContactFormEmail" name="email" placeholder="Email" required="" value="{{ Auth::user()->email }}">                        	
                            @else
                        <input type="email" id="ContactFormEmail" name="email" placeholder="Email" required="" value="">                        	
                            @endif
                    </div>
                        
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                        <input required="" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                        <input required="" type="text" id="ContactSubject" name="subject" placeholder="Subject" value="">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                        <textarea required="" rows="10" id="ContactFormMessage" name="msg" placeholder="Your Message"></textarea>
                        </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" class="btn" value="Send Message">
                    </div>
                 </div>
                 </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="open-hours">
                    <strong>Opening Hours</strong><br>
                    Mon - Sat : 9am - 11pm<br>
                    Sunday: 11am - 5pm
                </div>
                <hr />
                <ul class="addressFooter">
                    <p>
                        Emerald Avenue II EB/B-07 Sektor 9, Bintaro Jaya. Tangerang Selatan</p>
                    <p>(021) 74866669</p>
                    <p>info.youthderma@gmail.com</p>
                </ul>
                <hr />
                <ul class="list--inline site-footer__social-icons social-icons">
                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    
</div>
@endsection
