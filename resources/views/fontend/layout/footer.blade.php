<footer class="hidden-xs">
    <div class="container">
        <p class="content">Cơ quan chủ quản: Công ty Cổ phần Bạch Minh (Vega Corporation).<br>
            Địa chỉ: P804, tầng 8, tòa nhà V.E.T, 98 Hoàng Quốc Việt, Nghĩa Đô, Cầu Giấy, Hà Nội.<br>
            Tel: 04.37554190 - Fax: 04.37557831    Email: info@vega.com.vn<br>
            ĐKKD: 0101380911 do Sở KHĐT Hà Nội cấp 20/6/2003</p>
    </div>
    <canvas id="myCanvas04" width="2000" height="200"></canvas>
</footer>
<footer class="visible-xs-block">
    <div class="container">
        <img src="images/logo-vega.png" alt=""/>
        <a href="javascript:void(0);" onclick="toTop()" class="button-top">TOP</a>
    </div>
</footer>
<div id="menu-footer" class="hidden-xs">
    <ul>
                @foreach($db as $tc)
                   <li><a href="{{$tc->slug}}">{{$tc->name}}</a></li>
                @endforeach
                <li><a href="javascript:void(0);" onclick="toTop()">TOP</a></li>
    </ul>
    <canvas id="myCanvas05" width="2000" height="69"></canvas>
</div>