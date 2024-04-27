@extends('pages.header')
@section('title','Món Chính')
@extends('pages.footer')
@section('header')


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


@section('footer')


@endsection