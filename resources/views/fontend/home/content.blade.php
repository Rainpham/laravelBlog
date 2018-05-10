<section id="section-aboutus">
    <div class="container">
        <div class="side2side hidden-sm hidden-xs">
            <div class="aboutus-img">
                <img src="images/img-vegabuilding.png" alt=""/>
            </div>
        </div>
        <div class="side2side">
            <div id="aboutus-content">
                <h4>VỀ CHÚNG TÔI</h4>
                <h3><span style="color: #111">{{$about->name_company}}</h3>
                <div class="aboutus-img visible-sm-block visible-xs-block">
                    <img src="images/img-vegabuilding02.png" alt=""/>
                </div>
                <p>{{$about->description}}<br>
                
                <p class="para-hightlight">{{$about->content}}</p>
                <div align="center"><a href="Gioi-Thieu" class="button-vega button">Tìm hiểu</a></div>
            </div>
        </div>
    </div>
</section>
<section id="section-product">
    <canvas id="myCanvas02" width="2000" height="69"></canvas>
    <div class="container">
        <div class="title-section">Sản phẩm & Dịch vụ</div>
        <div class="row">
            @foreach($product as $pr)
            <div class="col-lg-3 col-md-3 col-sm-6 product">
                <div class="icon">
                    <a  href="San-Pham/{{$pr['slug']}}" style="background: url(upload/product/{{$pr['images']}}) no-repeat;">VAS</a>
                </div>
                <h3><a  href="San-Pham/{{$pr['slug']}}">{{$pr['name']}}</a></h3>
                <p>{{$pr['description']}}</p>
            </div>
            @endforeach
        </div>
    </div>

</section><section id="section-contactus">
    <div class="container">
        <div class="contactus">
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                <div class="title-section"><b style="font-weight: 400;color: #111;">Liên hệ</b> Vega</div>
            </div>
            <div class="col-lg-3 col-md-3 address">
            <h3>Trụ sở chính</h3>
<!--                <p class="content">Tầng 8, Toà V.E.T, Số 98 đường Hoàng Quốc Việt, NGhĩa Đô, Cầu Giấy, HN</p>-->
<!--                <p class="phone">Điện thoại: (84-4) 3 755 4190<br>Fax: (84-4) 3 755 7831</p>-->
            <p class="content"><h3><strong>H&agrave; Nội</strong></h3>

                <p><strong>Địa chỉ</strong>: Tầng 8, T&ograve;a nh&agrave; V.E.T, Số&nbsp;98 Đường&nbsp;Ho&agrave;ng Quốc Việt, Phường Nghĩa Đ&ocirc;, Quận Cầu Giấy, TP.&nbsp;H&agrave; Nội</p>

                <p><strong>Điện thoại</strong>: (84-24) 3 755 4190</p>

                <p><strong>Fax</strong>: (84-24) 3 755 7831&nbsp;</p>

                <p><strong>Website</strong>: <a href="http://www.vega.com.vn">http://www.vega.com.vn</a></p>

                <p><strong>Email</strong>: info@vega.com.vn&nbsp;</p>
                </p>
        </div>
        <div class="col-lg-3 col-md-3 address">
            <h3>Chi nhánh</h3>
<!--                <p class="content">C2/A7 Tiền Giang, Phường 2, Quận Tân Bình, TP.HCM</p>-->
<!--                <p class="phone">Điện thoại: (84-8) 35 435 123</p>-->
            <p class="content"><h3 style="color:rgb(51, 51, 51); font-style:normal"><strong>TP.&nbsp;Hồ Ch&iacute; Minh</strong></h3>

            <p><strong>Địa chỉ</strong>: 29 Tiền Giang, Phường 2, Quận T&acirc;n B&igrave;nh, TP. Hồ Ch&iacute; Minh</p>

            <p><strong>Điện thoại</strong>: (84-28) 3 547 2123</p>

            <h3>&nbsp;</h3>
            </p>
        </div>
        <div class="col-lg-4 col-md-4 address email">
            <h3>Liên hệ nhanh</h3>
<!--                <p class="content">H.tác Kinh doanh: biz@vega.com.vn<br>H.tác truyền thông: marketing@vega.com.vn<br>Tuyển dụng: tuyendung@vega.com.vn</p>-->
            <p class="content"><p><strong>Hợp t&aacute;c kinh doanh:</strong> biz@vega.com.vn</p>

            <p>&nbsp;</p>

            <p><strong>Hợp t&aacute;c truyền th&ocirc;ng:</strong> marketing@vega.com.vn</p>

            <p>&nbsp;</p>

            <p><strong>Tuyển dụng:</strong> tuyendung@vega.com.vn | tuyendungsg@vega.com.vn</p>
            </p>
        </div>
    </div>
</div>
</section>