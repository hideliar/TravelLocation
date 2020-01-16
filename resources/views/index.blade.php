@extends('layouts.appindex')
@section('content')
    <div class="general" >
    <div id="menu-top" class="row" style="top:0px">
      <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
          <a class="navbar-brand logo-main" href="#"><img src="public/home/img/logo.png"></a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Support</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                  </li>
              </ul>
              <div class="dropdown text-center">

                    @if (Auth::guest())
                    <a href="{{ route('login') }}"><button class="btn btn-secondary " type="button">Login</button></a>
                    <a href="{{ route('register') }}"><button class="btn btn-secondary " type="button">Register</button></a>
                    @else
                     <!--  <a href="#"><button class="btn btn-secondary " type="button">{{ Auth::user()->name }} </button></a> -->
                      <li class="dropdown ">
                                <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" style="background-color:#3d3c35; ">
                                    <li>
                                        <a href="informaion" style="text-decoration: none;">Informaion</a><br>
                                        <a href="about" style="text-decoration: none;">About</a><br>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="text-decoration: none;">
                                           Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @endif
              </div>
            </div>
      </nav>
    </div>
    
    <div class="body">
     <div class="container">
      <div class="row justify-content-md-center">
        
          <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
              <div class="search-back rounded">
                  <h1>Tìm Địa Điểm Bạn Muốn Tới</h1>
                  <div class="search-form">
                    <form action="/template/search.php" method="GET">
                      <div class="row justify-content-md-center m-0">
                       
                         <div class="col-lg-3 col-sm-10 col-md-3 col-xl-3 form-group p-0">
                         <div class="select-option-location-citys">
                            <select class="form-control form-control-lg rounded-0" id="stage" name="value"></select>
                         </div>
                         </div>

                       <div class="col-lg-4 col-sm-10 col-md-4 col-xl-4 form-group p-0">
                       <div class="search">
                           <input class="form-control form-control-lg rounded-0" type="text" maxlength="128" placeholder="Bạn muốn đi đâu?" name="keyword">
                       </div>
                       </div>

                       <div class="col-lg-2 col-sm-4 col-md-2 col-xl-2 text-center p-0">
                       <div class="search-button">                       
                           <button type="submit" class="btn btn-light rounded-0">Tìm Kiếm  </button>
                       </div>
                       </div>
                     </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
            
    </div>
  </div>
</div>


<!--        <div class="row w-100" id="map-box">
        <div class="col-md-12 text-center" id="map-box-title">
            <h1>Nền tảng Map4D</h1>
        </div>
        <div class="row container mx-auto" id="map-box-content">
            <div class="col-8 col-sm-6 col-md-3 col-lg-3 mx-auto">
                <a href="javascript:;" id="visual" class="">
                    <div class="col-md-12 mx-auto text-center map-box-item">
                        <img src="img/icon_0007_3d-Icon.png" alt="" class="img-responsive">
                        <h5>3D trực quan</h5>
                    </div>
                </a>
            </div>
            <div class="col-8 col-sm-6 col-md-3 col-lg-3 mx-auto">
                <a href="#" id="multi-platform" class="">
                    <div class="col-md-12 mx-auto text-center map-box-item">
                        <img src="img/icon_0005_website--copy-2.png" alt="" class="img-responsive">
                        <h5>Đa nền tảng</h5>
                    </div>
                </a>
            </div>
            <div class="col-8 col-sm-6 col-md-3 col-lg-3 mx-auto">
                <a href="#sroll-direct" id="direct" class="">
                    <div class="col-md-12 mx-auto text-center map-box-item">
                        <img src="img/icon_0003_location.png" alt="" class="img-responsive">
                        <h5>Chỉ đường</h5>
                    </div>
                </a>
            </div>
            <div class="col-8 col-sm-6 col-md-3 col-lg-3 mx-auto">
                <a href="#web-app-relity" id="utilities" class="">
                    <div class="col-md-12 mx-auto text-center map-box-item">
                        <img src="img/icon_0001_Tiện-ích-địa-điểm.png" alt="" class="img-responsive">
                        <h5>Tiện ích địa điểm</h5>
                    </div>
                </a>
            </div>
        </div>


    </div>  -->

    <!-- ////////////////////////////  Gioi thieu dia diem-->
    <div class="container">
      <div class="text" style="text-align: center; padding: 0px 50px;padding-top: 60px;">
        <h2>Những Điểm Đến Nổi Tiếng</h2>
        <span>&nbsp;</span>
      </div>
      <div class="row justify-content-md-center">
            <div class="news">
                <div class="card-deck">
                  <div class="col-lg-3 col-md-6">
                    <div class="card m-0">
                      <img class="card-img-top" src="public/home/img/dest.373x181.01.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Văn Miếu Quốc Tử Giám</h5>
                        <p class="card-text">Là quần thể di tích về trường đại học đầu tiên của nước ta, Văn Miếu không chỉ là di tích lịch sử văn hóa mà còn là nơi được rất nhiều sĩ tử, học trò tới đây để cầu may mắn trong thi cử, học hành.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="card m-0">
                      <img class="card-img-top" src="public/home/img/dest.181x181.01.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Cầu Rồng Đà Nẵng</h5>
                        <p class="card-text">Đà Nẵng được mệnh danh là thành phố của những cây cầu, sở dĩ vì cứ đi vài cây số người ta lại được nhìn thấy một cây cầu ở thành phố này, mà đó không phải là những cây cầu đơn thuần mà chúng có những nét riêng biệt và sự độc đáo khác lạ chưa từng có ở bất cứ nơi đâu ở Việt Nam. </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
                    <div class="col-lg-3 col-md-6">
                    <div class="card m-0">
                      <img class="card-img-top" src="public/home/img/dest.373x181.02.png" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nhà thờ Đức Bà</h5>
                        <p class="card-text">Là một trong những công trình kiến trúc độc đáo nhất tại Sài Gòn, luôn thu hút sự quan tâm của du khách trong và ngoài nước. Toà thánh đường có chu vi 91 x 35,5 m, cao 21 m. Đây là một công trình kiến trúc thật sự có giá trị rất lớn về mặt lịch sử và nghệ thuật kiến trúc xây dựng. </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="card m-0">
                      <img class="card-img-top" style="height: 130px;" src="public/home/img/phuquoc.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Phú Quốc</h5>
                        <p class="card-text">Vẻ đẹp của Phú Quốc chính là những bãi biển cát trắng trải dài. Bên cạnh đó, du khách có thể khám phá rừng nhiệt đới, lặn biển ngắm san hô, tham quan vườn thú Vinpearl Safari Phú Quốc.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>  
                  </div>
                </div>  
            </div>
      </div>
  </div>
  <!-- ////////////////////////////  Gioi thieu dia diem-->


  <!-- ////////////////////////////  Gioi thieu member-->
  <div class="our-team">
  <section class="our-webcoderskull padding-lg">
      <div class="container">
        <div class="row heading heading-icon">
            <h2>Thành Viên</h2>
        </div>
        <ul class="row">
          <li class="col-12 col-md-6 col-lg-3">
              <div class="cnt-block equal-hight" style="height: 349px;">
                <figure><img src="public/home/img/vantruc.jpg" class="img-responsive" alt=""></figure>
                <h3><a href="#">Văn Trúc</a></h3>
                <p>Leader</p>
                <ul class="follow-us clearfix">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
          </li>
          <li class="col-12 col-md-6 col-lg-3">
              <div class="cnt-block equal-hight" style="height: 349px;">
                <figure><img src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.0-9/24991217_1031938726967354_2550275940324776379_n.jpg?_nc_cat=108&_nc_oc=AQnciN0YI2PNiam9FBM-ufilysMHvkrg6pv_reHAYheSYPtzTOYCNs8GKfNVtaRiFVU&_nc_ht=scontent.fdad3-3.fna&oh=2cf3c0656adeb9841a22d65045e25d7f&oe=5DB68E6B" class="img-responsive" alt=""></figure>
                <h3><a href="#">Phan Thản</a></h3>
                <p>Freelance Web Developer</p>
                <ul class="follow-us clearfix">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
          </li>
          <li class="col-12 col-md-6 col-lg-3">
              <div class="cnt-block equal-hight" style="height: 349px;">
                <figure><img src="public/home/img/quy.jpg" class="img-responsive" alt=""></figure>
                <h3><a href="#">Văn Quý</a></h3>
                <p>Freelance Web Developer</p>
                <ul class="follow-us clearfix">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
           </li>
          <li class="col-12 col-md-6 col-lg-3">
              <div class="cnt-block equal-hight" style="height: 349px;">
                <figure><img src="public/home/img/ngoctoan.jpg" class="img-responsive" alt=""></figure>
                <h3><a href="#">Ngọc Toàn</a></h3>
                <p>Freelance Web Developer</p>
                <ul class="follow-us clearfix">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
          </li>
        </ul>
      </div>
    </section>
  </div>

  <!-- //////////////////////////// Gioi thieu member-->


  <footer class="p-5 bg-theme text-small footer">
      <div class="container">
          <div class="row">
              <div class="col-12 col-sm-12 col-md-3 text-white">
                <a class="footer-logo" href="#">
                  <img src="public/home/img/logo.png" class=" mb-5" alt=""></a>
                  <h5 class="text-white">Downloads</h5>
                  <ul class="list-unstyled list-inline">
                      <li class="list-inline-item">
                          <a href="#" target="_blank"><img src="https://www.vectorvest.com/wp-content/themes/vectorvest/images/social-appstore-white.png" class=" mb-3" alt=""></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#" target="_blank"><img src="https://www.vectorvest.com/wp-content/themes/vectorvest/images/social-googleplay-white.png" class=" mb-3" alt=""></a>
                      </li>
                  </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-9">
                  <div class="row">
                      <div class="col-12 col-sm-4">
                          <h5 class="text-white">TravelLocation</h5>
                          <ul class="list-unstyled">
                              <li><a href="#" target="_blank">What Is TravelLocation?</a></li>
                              <li><a href="#" target="_blank">How it Works</a></li>
                              <li><a href="#" target="_blank">Naveed Ul Hassan</a></li>
                              <li><a href="#" target="_blank">Testimonials</a></li>
                          </ul>
                          
                          
                      </div>         
                  </div>
              </div>
          </div>
          <hr>
          <ul class="list-unstyled list-inline mb-0 text-center">
              <li class="list-inline-item">
                  <a href="#" target="_blank">
                      <img src="https://www.vectorvest.com/wp-content/themes/vectorvest/images/social-facebook-white.png" alt="">
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="#" target="_blank">
                      <img src="https://www.vectorvest.com/wp-content/themes/vectorvest/images/social-twitter-white.png" alt="">
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="#" target="_blank">
                      <img src="https://www.vectorvest.com/wp-content/themes/vectorvest/images/social-googleplus-white.png" alt="">
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="#" target="_blank">
                      <img src="https://www.vectorvest.com/wp-content/themes/vectorvest/images/social-linkdin-white.png" alt="">
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="#" target="_blank">
                      <img src="https://www.vectorvest.com/wp-content/themes/vectorvest/images/social-youtube-white.png" alt="">
                  </a>
              </li>
          </ul>
          <hr>
          <div class="col-12 text-center text-white">
              <p>© 2019 TravelLocation ®. All Rights Reserved.</p>
          </div>
      </div>
  </footer>
@endsection
