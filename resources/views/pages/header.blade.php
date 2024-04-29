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
    <link rel="stylesheet" href="{{asset('public/frontend/css/menu.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Paytone+One&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css">
 
    <title>Restaurant Cheris @yield('title')</title>
    
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

                  <a href="{{URL::to('/menu1')}}" class="">
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
  
  
                  <a href="{{URL::to('/menu1')}}" class="">
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
  
  
  
                  <a href="{{URL::to('/menu1')}}" class="">
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
 <!--  <a href="{{URL::to('/')}}">
      <div class="btn btn-light ms-4 mt-4 go-back"><p>Trở Lại</p><i class="fa-solid fa-arrow-right fa-rotate-180" style="color: #d75079;"></i></div>
    </a> -->
<!-- -------------------------header---------------------------- -->


    <script src="{{asset('public/frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/timkiem.js')}}"></script>
    <script src="{{asset('public/frontend/js/header.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.chongiohang').click(function(){
              swal("Here's the title!", "...and here's the text!");
          });
      });
    </script>
  @yield('header')