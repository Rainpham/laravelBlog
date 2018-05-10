@extends('home.index')
@section('content')
    <link href="asset/css/style-detail.css?v=0.002" rel="stylesheet">
   <header id="header" style="background-image: url(asset/images/img-slider01.jpg);">
        <div class="content" id="head-slider">
            <h3><b>vega</b> </h3>
<!--            <p>Auctor platea a a ipsum nascetur mattis eu suspendisse a facilisis vestibulum adipiscing fermentum in a parturient vulputate hendrerit parturient phasel hendrerit lus volutpat.</p>-->
        </div>
        <canvas id="myCanvas01" width="2000" height="69"></canvas>
    </header>
<!-- / HEADER -->

<!-- CONTENT -->
<section id="section-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 detail">
    <div class="title-section"><b><span style="color: #000">dịch vụ</span>{{$product->name}}</b></div>
    <p>{{$product->description}}</p>
    <div class="content">
        <p>{{$product->detail}}</p>
    </div>
</div>            

<!-- include category product -->
@include('layouts.category')

</section>

{{--  include file contact  --}}
@include('contact.contact')

@endsection