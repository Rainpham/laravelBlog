<div class="col-lg-5 category vice">
<div class="title-section" style="line-height: 40px;">Danh mục chính <b></b></div>
    <ul>
        @foreach($about as $ab)
        <li class="active">
            <div class="thumb">
                <a href="Gioi-Thieu/{{$ab->slug}}"><img src="upload/about/{{$ab->images}}" alt="abc"/></a>
            </div>
            <div class="content">
                <h3><a href="Gioi-Thieu/{{$ab->slug}}">{{$ab->name_company}}</a></h3>
                <p>Giới thiệu chung</p>
            </div>
        </li>
        @endforeach
            
    </ul>
</div>        </div>
</div>