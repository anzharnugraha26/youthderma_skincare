<div class="site-footer" style="background: #8AA385">
    <div class="container">

<div class="footer-top" style="background: #8AA385">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-links">
            <h4 class="h4" style="color: white">PRODUK</h4>
            <ul>
                <?php $p = DB::table('products')->get(); ?>
                @foreach ($p as $item)
                    <li><a href="{{'product-detail/' . $item->id}}" style="color: white">{{$item->name}}</a></li>
                @endforeach
            </ul>
        </div>
        
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-links">
            <h4 class="h4" style="color: white">TERHUBUNG DENGAN KAMI</h4>
            <ul class="list--inline site-footer__social-icons social-icons">
                <img src="{{asset('image/iconig.png')}}" style="margin-left: 5px">
                <img src="{{asset('image/iconwa.png')}}" style="margin-left: 5px">
                <img src="{{asset('image/icontelp.png')}}" style="margin-left: 5px">
                <img src="{{asset('image/shopee.png')}}" style="margin-left: 5px" >
            </ul>
        </div>
        {{-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-links">
            <h4 class="h4">Customer Services</h4>
            <ul>
                <li><a href="#">Request Personal Data</a></li>
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Orders and Returns</a></li>
                <li><a href="#">Support Center</a></li>
            </ul>
        </div> --}}
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 contact-box">
            <h4 class="h4" style="color: white">ALAMAT</h4>
            <ul class="addressFooter">
                <p style="color: white">Emerald Avenue II EB/B Sektor 9,
                    Bintaro Jaya. Tangerang Selatan</p>
 
            </ul>
        </div>
    </div>
</div>

</div>
</div>