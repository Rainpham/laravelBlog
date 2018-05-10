
<aside class="main-sidebar">
  <section class="sidebar">
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">TÙY CHỌN</li>

      <li class=" treeview">
          <a href="#">
            <i class="fa fa-list-ol"></i> <span>CATEGORY</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistCate')!!}"><i class="fa fa-list-ul"></i>SANH SÁCH</a></li>
            <li><a href="{!!route('getAdd')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li>  
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>NEWS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistNews')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAddNews')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li>  
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-windows"></i> <span>PRODUCS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistProduct')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAddProduct')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li>  
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>USERS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistUser')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAddUser')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li>  
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-play-circle"></i> <span>SLIDER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistSlider')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAddSlider')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li>  
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-address-card"></i> <span>ABOUTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistCate')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAdd')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li>  
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>CONTACT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistContact')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAddContact')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li> 
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-facebook"></i> <span>COMMENT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistCate')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAdd')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li> 
          </ul>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-rebel"></i> <span>PARTNER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!route('getlistPartner')!!}"><i class="fa fa-list-ul"></i>DANH SÁCH</a></li>
            <li><a href="{!!route('getAddPartner')!!}"><i class="fa fa-plus-square"></i>THÊM</a></li> 
          </ul>
        </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
