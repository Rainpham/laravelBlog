@extends('home.index')
@section('content')
<link href="asset/css/style-detail.css?v=0.002" rel="stylesheet">

@foreach($slide as $sl)
<header id="header" style="background-image: url(upload/slide/{{$sl['images']}});">
    <div class="content" id="head-slider">
        <h3> </h3>
    </div>
    <canvas id="myCanvas01" width="2000" height="69"></canvas>
</header>
@endforeach

<!-- CONTENT -->

<section id="section-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 category" id="abc">
                <div class="title-section">Những dịch vụ của <b>VEGA</b></div>
                    <ul>
                    @foreach($product as $prd)
                        <li id="idcategory">
                            <div class="thumb" style="background-color: #fff !important;">
                                <a href="San-Pham/{{$prd->slug}}">
                                    <img src="http://static.vega.vn/product/78.png?v=2&w=145&h=213" alt="Waka - Nghe & Đọc sách online mọi lúc, mọi nơi"/>
                                </a>
                            </div>
                            
                            <div class="content">
                                <h3><a href="San-Pham/{{$prd->slug}}">{{$prd->name}} </a></h3>
                                <p>{{$prd->description}}</p>
                                <p class="web-link-product"><b>Website:&nbsp;</b> <a href="datailproduct" target="_blank">{{$prd->website_address}}</a></p>
                            </div>
                        </li>
                    @endforeach
                        
                    </ul>
                </div>   


<!-- include category product -->
@include('layouts.category')

</section>

{{--  include file contact  --}}
@include('contact.contact')

@endsection
