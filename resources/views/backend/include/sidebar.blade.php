<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
     <!--  <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          Status
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="{{ route('index')}}" target="_blank"><i class="fa fa-home"></i> <span>Trang Chủ</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-mortar-board"></i> <span>Trường</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('truong.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Trường Đại Học</a></li>
            <li><a href="{{route('truong.create')}}"><i class="fa fa-plus"></i>Thêm Trường Đại Học</a></li>
          </ul>


          <a href="#"><i class="fa fa-list-alt"></i> <span>Loại Nhà Trọ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('loainhatro.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Loại Nhà Trọ</a></li>
            <li><a href="{{route('loainhatro.create')}}"><i class="fa fa-plus"></i>Thêm Loại Nhà Trọ</a></li>
          </ul>



          <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Loại Bài Đăng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('loaibaidang.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Loại Bài Đăng</a></li>
            <li><a href="{{route('loaibaidang.create')}}"><i class="fa fa-plus"></i>Thêm Loại Bài Đăng</a></li>
          </ul>


          



          <a href="#"><i class="fa fa-list-alt"></i> <span>Tiện Ích Nhà Trọ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('tienich.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Loại Tiện Ích Nhà Trọ</a></li>
            <li><a href="{{route('tienich.create')}}"><i class="fa fa-plus"></i>Thêm Tiện Ích Nhà Trọ</a></li>
          </ul>



          <a href="#"><i class="fa fa-users"></i> <span>Quản Trị Người Dùng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.index')}}"> <i class="fa fa-list"></i>Danh Sách User</a></li>
            <li><a href="{{route('dsadmin')}}"> <i class="fa fa-gg"></i>Danh Sách Admin</a></li>
            <li><a href="{{route('dsmem')}}"> <i class="fa  fa-user"></i>Danh Sách MemBer</a></li>
          </ul>



          <a href="#"><i class="fa fa-home"></i> <span>Quản Lí Nhà Trọ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('nhatro.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Nhà Trọ</a></li>
            <li><a href="{{route('nhatro.create')}}"> <i class="fa  fa-user"></i>Thêm Nhà Trọ</a></li>
          </ul>



          <a href="#"><i class="fa fa-align-justify"></i> <span>Quản Lí Bài Đăng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('baidang.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Bài Đăng</a></li>
            <li><a href="{{route('baidang.create')}}"> <i class="fa  fa-user"></i>Thêm Bài Đăng</a></li>
          </ul>


          <a href="#"><i class="fa fa-comments"></i> <span>Comments</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('binhluanadmin.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Comment</a></li>
            
          </ul>
        </li>



        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>