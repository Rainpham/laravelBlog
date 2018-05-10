@extends('home.index')
@section('content')
<link href="asset/css/style-detail.css?v=0.002" rel="stylesheet">
<header id="header" style="background-image: url(http://static.vega.vn/adv/26.jpg);">
    <div class="content" id="head-slider">
        <h3> </h3>
    </div>
    <canvas id="myCanvas01" width="2000" height="69"></canvas>
</header>

<!-- CONTENT -->
<section id="section-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 category">
    <div class="title-section">VEGA <b>Tin tức</b></div>
            <ul>
                @foreach($newsmodel as $n)
                <li>
                    <div class="thumb">
                        <a href="Tin-Tuc/{{$n->slug}}.html">
                            <img src="http://static.vega.vn/news/0/0/68/68.jpg?v=2&w=145&h=213" alt="[ICT News] Ứng dụng sách điện tử Waka đã có hàng triệu tài khoản người dùng"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="Tin-Tuc/{{$n->slug}}.html">{{$n->title}}</a></h3>
                        <p>{{$n->description}}</p>{{$n->created_at}}                    </div>
                </li>
                @endforeach
           </ul>

           {!! $newsmodel->links() !!}
    </div>           

<!-- include file category news -->
@include('layouts.category')

</section>

{{--  include file contact  --}}
@include('contact.contact')


@endsection