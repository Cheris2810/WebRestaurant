@extends('pages.header')
@section('title','Món Chính')
@extends('pages.footer')
@section('header')

<link rel="icon" type="image/x-icon/" href="{{asset('public/frontend/img/icon logo.png')}}">

<br><br><br><br><br>
<div class="ndc">
    <a href="{{URL::to('/')}}">
      <div class="btn btn-light ms-4 mt-4 go-back" style="background:#FFDAB9"><p style=" color: black; font-weight: bold;">Trở Lại</p><i class="fa-solid fa-arrow-right fa-rotate-180" ></i></div>
    </a>
          <div class="container d-flex justify-content-center pt-5"><h1 style="font-weight: bold;">MÓN CHÍNH</h1></div>
      <table>
        <tr class="h1">
            <td class="ngang1">
                <div class="o1" style="margin-left:2rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh1.png')}}" alt="">
                    </section>
                    <div>
                        <p>Sò điệp sốt kem chanh</p>
                        <p>Sò điệp áp chảo rưới thêm sốt kem chanh<br>300.000 VND</br></p>
                    </div>
                    <span class="sl1">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o2" style="margin-left:0rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh2.png')}}">
                    </section>
                    <div>
                        <p>Cá hồi sốt tiêu đen</p>
                        <p>Cá hồi áp chảo và Caprese salad rất hợp vị cho những ngày nắng nóng<br>250.000 VND</br></p>
                    </div>
                    <span class="sl2">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

            </td>
            <td class="ngang2">
                <div class="o4" style="margin-left:8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh3.png')}}">
                    </section>
                    <div>
                        <p>Thăn ngoại bò Úc nướng</p>
                        <p> Thăn bò áp chảo kèm các loại rau củ nướng<br>350.000 VND</br></p>
                    </div>
                    <span class="sl4">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o5" style="margin-left:8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh4.png')}}">
                    </section>
                    <div>
                        <p>Salad</p>
                        <p>Phô mai parmesan, xà lách roma, dầu ô liu và vụn bánh mì giòn tan.<br>100.000 VND</br></p>
                    </div>
                    <span class="sl5">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

            </td>

            <td class="ngang3">
                <div class="o7" style="margin-left:8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh5.png')}}" style="margin-top:-1rem">
                    </section>
                    <div>
                        <p>Cơm chiên hải sản</p>
                        <p>Cơm rang giòn tan, hải sản tươi sống. Sự kết hợp hoàn hảo.<br>200.000 VND</br></p>
                    </div>
                    <span class="sl7">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o8">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/monchinh6.png')}}" style="margin-left:8rem">
                    </section>
                    <div>
                        <p>Sườn cừu nướng</p>
                        <p>Sườn cừu dai, tươi rắc thêm tí tiêu, muối đậm hương vị<br>400.000 VND</br></p>
                    </div>
                    <span class="sl8">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                
            </td>
        </tr>
        
    </table>
  <br><br><br>
@section('footer')


@endsection