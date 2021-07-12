@extends('layouts.shop')
@section('content')

<link rel="stylesheet" href="{{  }}assets/css/plugins.css">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<div class="tabs-listing">
    <ul class="product-tabs">
        <li rel="tab1"><a class="tablink">Product Details</a></li>
        <li rel="tab2"><a class="tablink">Product Reviews</a></li>
        <li rel="tab3"><a class="tablink">Size Chart</a></li>
        <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>
    </ul>
    <div class="tab-container">
        <div id="tab1" class="tab-content">
            <div class="product-description rte">
                <h3>1</h3>
            </div>
        </div>
    </div>
    <div class="tab-container">
        <div id="tab2" class="tab-content">
            <div class="product-description rte">
                <h3>2</h3>
            </div>
        </div>
    </div>
    <div class="tab-container">
        <div id="tab3" class="tab-content">
            <div class="product-description rte">
                <h3>3</h3>
            </div>
        </div>
    </div>
</div>
@endsection