<div class="col-lg-5 category vice">
    <div class="title-section">Dịch vụ chính của <b>VEGA</b></div>
            <ul>
                @foreach($category as $ct)
                <li class="content-category-product">
                    <div class="thumb" style="background: #fff !important;">
                        <a  href="/vi/san-pham/vas"><img src="http://static.vega.vn/productcate/22.jpg?v=1&w=145&h=213" alt=""/></a>
                    </div>
                    <div class="content">
                        <h3><a  href="Danh-Muc-San-Pham/{{$ct->id_category}}">{{$ct->name}}</a></h3>
                        <p>Vega là đối tác lớn của Viettel, Vinaphone, Mobifone, Metfone, Natcom, Unitel…trong việc triển khai các dịch vụ giá trị gia tăng trên các thiết bị số.</p>
                    </div>
                </li>
                @endforeach
            </ul>
    </div>        </div>
</div>