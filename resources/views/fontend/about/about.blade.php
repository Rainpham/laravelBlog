@extends('home.index')
@section('content')
<link href="asset/css/style-detail.css?v=0.002" rel="stylesheet">
<header id="header" style="background-image: url(http://static.vega.vn/adv/23.jpg);">
    <div class="content" id="head-slider">
        <h3> </h3>
    </div>
    <canvas id="myCanvas01" width="2000" height="69"></canvas>
</header>

<section id="section-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 detail">
    <div class="title-section" style="line-height: 40px;"><b> Giới thiệu chung</b></div>
    @foreach($about as $ab)
    <div class="content">
        <p>{{$ab->description}}</p>
        <br>
        <p>{{$ab->content}}</p>
    </div>
    @endforeach
</div>            

<!-- include file category -->
@include('layouts.category')

</section>

{{--  include file contact  --}}
@include('contact.contact')

@endsection