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
        
        


        <li class="treeview">
          <a href="#"><i class="fa fa-object-group"></i> <span>KHU VỰC/ SẢNH</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('khuvuc.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Khu Vực</a></li>
            <li><a href="{{route('khuvuc.create')}}"><i class="fa fa-plus"></i>Thêm Khu Vực</a></li>
          </ul>


          
        </li>

        <li class="treeview">
          <a href="#"><i class="fa  fa-sitemap"></i> <span>BÀN</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('ban.index')}}"> <i class="fa fa-list"></i>Danh Sách Bàn</a></li>
            <li><a href="{{route('ban.create')}}"><i class="fa fa-plus"></i>Thêm Bàn</a></li>
          </ul>


          
        </li>



        <li class="treeview">
          <a href="#"><i class="fa fa-tasks"></i> <span>LOẠI MÓN ĂN</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('loaimonan.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Loại Món Ăn</a></li>
            <li><a href="{{route('loaimonan.create')}}"><i class="fa fa-plus"></i>Thêm Loại Món Ăn</a></li>
          </ul>


          
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-coffee"></i> <span>MÓN ĂN</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('monan.index')}}"> <i class="fa fa-list"></i>Danh Sách Các Món Ăn</a></li>
            <li><a href="{{route('monan.create')}}"><i class="fa fa-plus"></i>Thêm Món Ăn</a></li>
            <li><a href="{{route('monanpdf')}}" target="_blank"><i class="fa fa-plus"></i>In Menu</a></li>
          </ul>


          
        </li>

        <li class="treeview">
          <a href="#"><i class="fa  fa-money"></i> <span>QUẢN LÍ HÓA ĐƠN</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('quanlihoadon.index')}}"> <i class="fa fa-list"></i>Danh Sách Hóa Đơn</a></li>
            <li><a href="{{route('hoadon.index')}}"><i class="fa fa-plus"></i>Nhập Hóa Đơn</a></li>
          </ul>


          
        </li>

        <li class="treeview">
          <a href="#"><i class="fa  fa-bar-chart"></i> <span>THỐNG KÊ BÁO CÁO</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('thongkemonantheongay')}}"> <i class="fa fa-list"></i>Thống kê số lượng món ăn trong ngày</a></li>
            <li><a href="{{route('thongkemonanall')}}"><i class="fa fa-plus"></i>Thống kê số lượng món ăn đã bán</a></li>
            <li><a href="{{route('hoadonthang')}}"><i class="fa fa-plus"></i>Thống kê hóa đơn trong tháng</a></li>
          </ul>


          
        </li>



        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>