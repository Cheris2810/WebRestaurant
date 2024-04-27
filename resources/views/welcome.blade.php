<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon/" href="{{asset('public/frontend/img/icon logo.png')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/footer.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Paytone+One&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <title>Restaurant Cheris</title>
    
  </head>
  <body>
   <!-- Đầu Trang -->
   <header id="site-header" class="fixed-top ">

    <!--Thanh điều hướng-->
    <nav class="navbar navbar-expand-lg  ">

      <!--Logo-->
      <div class="w-25  d-flex justify-content-center">
        <a href="{{URL::to('/home')}}"><img src="{{asset('public/frontend/img/logo restaurant.png')}}" alt class="logo "></a>
      </div>
       <!--Phần responsive thành hamberger menu và các option trong thanh điều huớg-->
     
      <button class="navbar-toggler outline " type="button"
        data-bs-toggle="collapse"
        data-bs-target="#thanh-dieu-huong"
        aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--Thanh tìm kiếm-->
      <div
        class="collapse navbar-collapse text-nowrap  container-looking-nav p-3 "
        id="thanh-dieu-huong">
        <div class="d-flex  justify-content-center search-box flex-column position-relative searchInput">
          <div id="search-bar" class="d-flex w-100 ">
                <input class=" form-control me-2 thanh-tim-kiem " type="search"
                  placeholder="Tìm kiếm sản phẩm..."
                  aria-label="Search" 
                  id="search-input"
                  >
                  <a href="#" style="color: black;"><button class=" ps-0 looking-icon " type="submit" ><i
                    class="fa fa-search border-0" ></i></button></a>
            </div>


            <div class=" d-flex position-absolute flex-column  w-100 searching-result overflow-y-scroll overflow-x-hidden hide " >
              
                <div class="products  d-flex flex-column justify-content-center row-gap-2  w-100">

                  <a href="{{URL::to('/menu-1')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi1.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Bruschetta bánh mì nướng</h5>
                        <p>100.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
                  <a href="{{URL::to('/menu-2')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh2.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Cá hồi sốt tiêu đen</h5>
                        <p>250.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
                  <a href="{{URL::to('/menu-2')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh1.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Sò điệp sốt kem chanh</h5>
                        <p>300.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
                  <a href="{{URL::to('/menu-2')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh3.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Thăn ngoại bò Úc nướng</h5>
                        <p>350.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
                  <a href="{{URL::to('/menu-2')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh5.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Cơm chiên hải sản</h5>
                        <p>200.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
                  <a href="{{URL::to('/menu-1')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi3.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Foie Gras (gan ngỗng)</h5>
                        <p>138.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
                  <a href="{{URL::to('/menu-2')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh6.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Sườn cừu nướng</h5>
                        <p>400.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
  
                  <a href="{{URL::to('/menu-3')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/trangmieng1.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Mont-blanc – bánh hạt dẻ</h5>
                        <p>100.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
  
                  <a href="{{URL::to('/menu-1')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi4.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>Hàu Cancale</h5>
                        <p>300.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
  
  
                  <a href="{{URL::to('/menu-4')}}" class="">
                    <div class="product d-flex ">
                    
                      <img src="{{asset('public/frontend/img/hinhcacmonan/ruou1.png')}}" alt="" class=" ">  
                      
                      <div class="d-flex flex-column justify-content-center align-items-center text-center w-100 text-wrap" >
                        <h5>American Whiskey</h5>
                        <p>500.000 VND</p>
                      </div>
                   
                    </div>
                  </a>
  
                  
              

              



            
              </div>
            
       </div>
            


        </div>

        <ul class="navbar-nav p-1 column-gap-1 w-75 justify-content-center ">
          <li class="nav-item" >
            <a class="nav-link"  aria-current="page" href="{{URL::to('/home')}}"> <i
                class="fa-solid fa-house"></i> Trang Chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/menu')}}"> <i class="fa-solid fa-list"></i>
              Thực Đơn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Order.html"> <i class="fa-solid fa-cart-shopping"></i>
              Giỏ Hàng</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user"></i> Tài Khoản
            </a>
            <ul class="dropdown-menu "  aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="user-info.html">Thông Tin Cá Nhân</a></li>

              <li><a class="dropdown-item" href="{{URL::to('/loginadmin')}}"> Đăng Xuất</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gioithieu.html"><i class="far fa-address-card"></i>
              Về Chúng Tôi</a>
          </li>
        </ul>
      </div>

    </nav>
  </header>


    <!-- Banner -->
    <section class="banner-page  ">
      <!-- Carousel -->
      <div id="banner" class="carousel slide h-100" data-bs-ride="carousel">

        <!-- chấm chuyển -->
        <div class="carousel-indicators ">
          <button type="button-carousel" data-bs-target="#banner" data-bs-slide-to="0"
            class="active button-carousel"></button>
          <button class="button-carousel" type="button" data-bs-target="#banner"
            data-bs-slide-to="1"></button>
          <button class="button-carousel" type="button" data-bs-target="#banner"
            data-bs-slide-to="2"></button>
        </div>

        <!--  hình banner -->
        <div class="carousel-inner  ">
          <div class="carousel-item active ">
            <img src="{{asset('public/frontend/img/banner1.png')}}" alt="Basic Shushi "
              class="d-block w-100 h-100 banner-img">
          </div>
          <div class="carousel-item ">
            <img src="{{asset('public/frontend/img/banner2.png')}}"
              alt="Special Shushi" class="d-block w-100 h-100 banner-img">
          </div>
          <div class="carousel-item">
            <img src="{{asset('public/frontend/img/banner3.png')}}"
              alt="Avocado Salmon Sushi" class="d-block  w-100 h-100 banner-img">
          </div>
        </div>

        <!-- nút chuyển trái phải -->
        <button class="carousel-control-prev " type="button"
          data-bs-target="#banner" data-bs-slide="prev">
          <span class="carousel-control-prev-icon button-previous-carousel">
          </span>
        </button>
        <button class="carousel-control-next" type="button"
          data-bs-target="#banner" data-bs-slide="next">
          <span class="carousel-control-next-icon button-next-carousel"></span>
        </button>
      </div>
    </section>


    <!--Phần main-->
    <main>

      <!--Phần giới thiệu -->
      <div class="container-fluid d-flex justify-content-center introduce py-5">
        <div class="content-tenshi container">
          <div class="d-flex justify-content-center ">
            <h1 class="restaurant-name">RESTAURENT CHERIS</h1>
          </div>
          <h2 class="slogan">KHÔNG GIAN ĐỘC ĐÁO - ẨM THỰC SÁNG TẠO - BẾP TRƯỞNG
            TÀI HOA</h2>
          <p class="discription d-flex justify-content-center">Nhà hàng Cheris là nhà hàng Châu Âu uy tín dành cho người dân
            thủ đô và du khách yêu thích ẩm thực mang đậm phong cách Châu Âu.<br>
            Thực đơn 500 món tại Restaurant Cheris là sự kết hợp giữa các hương vị Châu Âu của bếp trưởng người Pháp.<br>
            Hãy đến Restaurant Cheris để trải nghiệm và cảm nhận những hương vị kì
            diệu từ Châu Âu!</p>
        </div>
      </div>




      
<!--Ảnh giới thiệu-->

          <div class="d-flex signature justify-content-center "><h2 style="color: #FFDAB9; display: block; letter-spacing: 1px;"> <hr style="color: black;">Thực đơn</h2></div>
          
          <div class="container">
          <div class="row my-5 row-gap-5 justify-content-between align-items-center text-center ">
            <div class="col-md-6 col-lg-3 ">
              <h2 class="note text-nowrap" style="color:#FFDAB9">Món khai vị</h2>
              <a href="{{URL::to('/menu-1')}}" >
                
                <img src="{{asset('public/frontend/img/khaivi.png')}}" alt="" class="d-block intro-img w-100 ">
              </a>
                
            </div>
            <div class="col-md-6 col-lg-3">
              <h2 class="note text-nowrap" style="color:#FFDAB9">Món chính</h2>
              <a href="{{URL::to('/menu-2')}}"><img src="{{asset('public/frontend/img/monchinh.png')}}" alt="" class="d-block intro-img w-100">
              </a>
              
            </div>
            <div class=" col-md-6 col-lg-3">
              <h2 class="note text-nowrap"  style="color:#FFDAB9">Món tráng miệng</h2>
              <a href="{{URL::to('/menu-3')}}"><img src="{{asset('public/frontend/img/trangmieng.png')}}" alt="" class="d-block  intro-img w-100">
              </a>
              
            </div>
            <div class="col-md-6 col-lg-3">
              <h2 class="note text-nowrap"  style="color:#FFDAB9">Đồ uống</h2>
              <a href="{{URL::to('/menu-4')}}"><img src="{{asset('public/frontend/img/douong.png')}}" alt="" class="d-block  intro-img w-100">
              </a>
              
            </div>
          </div>
        </div>

           <!--nút chuyển đến menu-->
           <div class="container d-flex justify-content-center">
            <a href="{{URL::to('/home')}}">
            <div class="btn btn-danger button-menu mb-5">Xem Menu</div>
          </a>
           </div>
          
     









 <!--Hình không gian quán-->
      <div class="  text-center position-relative overflow-auto about-us-container ">
        <img src="../image/—Pngtree—an empty diner with tables_3023205.jpg" alt="" class=" about-us-img">

        <div class="d-flex flex-column position-absolute content-in-img justify-content-center" style="color:white">
        <h2>TENSHI</h2>
       <a href="gioithieu.html"> <button class="btn rounded-0 buttonInsideImage  ">Câu Chuyện Của Chúng Tôi</button></a>
      </div>

      </div>
    

     
      </main>


      <a href="#top" class="to-top d-flex"><i
          class="fa-solid fa-chevron-up m-auto " id="footer-header"></i></a>

      <!--Chân trang-->
      <footer style="background: black;">
        <section class="footer">
          <div class="container-fluid ps-5">

            <div class="row text-nowrap">
              <div class="col-sm-6 col-md-6 col-lg-3 ">
                <h3 class="footer-info">Về Chúng Tôi</h3>
                <ul>
                  <li><a href="index.html">Trang chủ</a></li>
                  <li><a href="gioithieu.html">Giới thiệu</a></li>
                  <li><a href="menutong.html">Sản phẩm</a></li>

                </ul>
              </div>

              <div class="col-md-6 col-lg-3 ">
                <h3 class="footer-info">Chăm Sóc Khách Hàng</h3>
                <ul class="row">
                  <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                  <li><a href="#">Quản Lý Tài Khoản</a></li>
                  <li><a href="#">Chính Sách Đặt Hàng</a></li>

                </ul>
              </div>
              <div class="col-md-6 col-lg-3 ">
                <h3 class="footer-info">Thanh Toán</h3>
                <img src="../image/icon-mastercard-3.svg" alt>
                <img src="../image/icon-momo-2.svg" alt>
                <img src="../image/icon-visa-3.svg" alt>
              </div>
              <div class="col-md-6 col-lg-3 conection ">
                <h3 class="footer-info">Kết Nối Với Chúng Tôi</h3>
                <a href="">
                <img src="../image/icon-facebook-3.svg" alt>
              </a>
              <a href="">
                <img src="../image/icon-youtube-3.svg" alt>
              </a>
              <a href="">
                <img src="../image/icon-tiktok-3.svg" alt>
              </a>
              </div>
            </div>

          
          
        

            <div class="col-md-3 contact p-0 text-nowrap mt-4 ">
              <h2>Liên Hệ</h2>
            </div>

              <div class="col-md-9 justify-content-between p-0 mt-4">
                <div class="row row-gap-3">
                      <div class="col-md-6 text-nowrap contact-method">
                        <i class="fa-solid fa-location-dot" style="color: #85b1ff;"></i>
                        123 Ninh Kieu Can Tho
                      </div>

                      <div class="col-md-6 text-nowrap contact-method">
                        <i class="fa-solid fa-envelope" style="color: #7aabff;"></i>
                        RestaurantCheris@gmail.com
                      </div>

                      <div class="col-md-6 text-nowrap contact-method">
                        <i class="fa-solid fa-phone" style="color: #5794ff;"></i>
                        028 7100 6789
                     </div>

                     
                     <div class="col-md-6 text-nowrap contact-method">
                      <i class="fa-solid fa-clock" style="color: #75a8ff;"></i>
                      8:00 - 21:00
                   </div>
                     
                </div>
            </div>
          
          

        </div>
        </section>

      </footer>

    

    </body>
    <script src="{{asset('public/frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/timkiem.js')}}"></script>
    <script src="{{asset('public/frontend/js/header.js')}}"></script>
  </html>