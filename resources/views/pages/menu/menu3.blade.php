@extends('pages.header')
@section('title','Món Chính')
@extends('pages.footer')
@section('header')

<link rel="icon" type="image/x-icon/" href="{{asset('public/frontend/img/icon logo.png')}}">

<br><br><br><br><br>
<div class="ndc">
    <a href="{{URL::to('/menu')}}">
      <div class="btn btn-light ms-4 mt-4 go-back" style="background:#FFDAB9"><p style=" color: black; font-weight: bold;">Trở Lại</p><i class="fa-solid fa-arrow-right fa-rotate-180" ></i></div>
    </a>
          <div class="container d-flex justify-content-center pt-5"><h1 style="font-weight: bold;">MÓN TRÁNG MIỆNG</h1></div>
      <table>
        <tr class="h1">
            <td class="ngang1">
                <div class="o1" style="margin-left:2rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/trangmieng1.png')}}" alt="">
                    </section>
                    <div>
                        <p>Mont-blanc</p>
                        <p>Bánh hạt dẻ mang đậm hương vị Pháp.<br>100.000 VND</br></p>
                    </div>
                    <span class="sl1">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o2" style="margin-left:0rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/trangmieng2.png')}}">
                    </section>
                    <div>
                        <p>Bánh crepes</p>
                        <p>Chỉ cần tráng một lớp bánh mỏng rồi thêm vào đó bất thứ cứ gì.<br>100.000 VND</br></p>
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
                        <img src="{{asset('public/frontend/img/hinhcacmonan/trangmieng3.png')}}">
                    </section>
                    <div>
                        <p>Bánh Madeleines</p>
                        <p>Lớp bơ ngậy tan trên đầu lưỡi cùng vị ngọt thanh theo một cách riêng<br>100.000 VND</br></p>
                    </div>
                    <span class="sl4">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o5" style="margin-left:8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/trangmieng4.png')}}">
                    </section>
                    <div>
                        <p>Petit Fours</p>
                        <p>Bánh Petit fours cao từ 1,5-2 inch, có hình chữ nhật rộng 01 inch.<br>150.000 VND</br></p>
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
                        <img src="{{asset('public/frontend/img/hinhcacmonan/trangmieng5.png')}}" style="margin-top:-1rem">
                    </section>
                    <div>
                        <p>Pain au chocolat</p>
                        <p>Bánh mỳ nhiều lớp cùng nhân chocolate sánh mịn.<br>150.000 VND</br></p>
                    </div>
                    <span class="sl7">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o8">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/trangmieng6.png')}}" style="margin-left:8rem">
                    </section>
                    <div>
                        <p>Bánh crepes dâu tây</p>
                        <p>Bánh tráng lớp mỏng kết hợp dâu tây thêm nhiều màu sắc.<br>200.000 VND</br></p>
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