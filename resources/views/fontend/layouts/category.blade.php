<div class="col-lg-5 category vice">
    <div class="title-section" style="line-height: 40px;">Danh mục chính <b></b></div>
        <ul>
            @foreach($categorymenu as $ctg)
            <li class="active">
                <div class="thumb">
                    <a href=""><img src="upload/about/{{$ctg['images']}}" alt="abc"/></a>
                </div>
                <div class="content">
                    <h3><a href="">{{$ctg->name_categoryMenu}}</a></h3>
                    {{-- <p>Giới thiệu chung</p> --}}
                </div>
            </li>
            @endforeach    
        </ul>
    </div>        </div>
    </div>