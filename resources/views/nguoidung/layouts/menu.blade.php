<!-- Menu -->
    <div class="site-navbar-wrap js-site-navbar bg-white ">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">One Night</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li id="lamthu" class="{{ Request::is('nguoidung/trangchu') ? 'active' : null}}">
                        <a href="nguoidung/trangchu">Trang chủ</a>
                      </li>
                      <li class="has-children">
                        <a href="rooms.html">Phòng</a>
                        <ul class="dropdown arrow-top">
                          @foreach($loaiphong as $lp)
                          <li><a href="#">{{$lp->tenloai}}</a></li>
                          @endforeach
                          <li class="has-children">
                            <a href="rooms.html">Dịch vụ</a>
                            <ul class="dropdown">
                              <li><a href="rooms.html">Phòng cao cấp</a></li>
                              <li><a href="rooms.html">Tắm hơi</a></li>
                              <li><a href="rooms.html">Ăn uống</a></li> 
                              
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li class="has-children ">
                        <a href="rooms.html">Sự kiện</a>
                        <ul class="dropdown arrow-top">
                          @foreach($loaibaiviet as $lbv)
                          <li class="{{ Request::is('nguoidung/lienhe') ? 'active' : null}}"><a href="#">{{$lbv->tenloai}}</a></li>
                          @endforeach
                        </ul>
                      </li>

                      <li><a href="about.html">Thông tin</a></li>
                      <li ><a href="nguoidung/lienhe">Liên hệ</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection