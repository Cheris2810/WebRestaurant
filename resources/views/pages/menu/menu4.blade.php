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
          <div class="container d-flex justify-content-center pt-5"><h1 style="font-weight: bold;">RƯỢU</h1></div>
      <table>
        <tr class="h1">
            <td class="ngang1">
                <div class="o1" style="margin-left:2rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/ruou1.png')}}" alt="">
                    </section>
                    <div>
                        <p>Bourbon whiskey</p>
                        <p>Chứa ít nhất 51% lúa mì,hỗn hợp ngũ cốc nguyên chất.<br>1000.000 VND</br></p>
                    </div>
                    <span class="sl1">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o2" style="margin-left:0rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/ruou2.png')}}">
                    </section>
                    <div>
                        <p>Rượu Cognac</p>
                        <p>Rượu Cognac VSOP hay VS hòa quyện trong một ly cocktail.<br>1000.000 VND</br></p>
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
                        <img src="{{asset('public/frontend/img/hinhcacmonan/ruou3.png')}}">
                    </section>
                    <div>
                        <p>Rượu Hendrick’s Gin</p>
                        <p>Hendrick’s Gin là loại rượu được ủ trong các tĩnh bằng đồng.<br>800.000 VND</br></p>
                    </div>
                    <span class="sl4">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o5" style="margin-left:8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/ruou4.png')}}">
                    </section>
                    <div>
                        <p>Rượu Vodka Absolut Raspberri (Dâu)</p>
                        <p>Rượu vodka Absolut của Thụy Điển.<br>400.000 VND</br></p>
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
                        <img src="{{asset('public/frontend/img/hinhcacmonan/ruou5.png')}}" style="margin-top:-1rem">
                    </section>
                    <div>
                        <p>Rhum Bacardi Vàng</p>
                        <p>Bacardi Vàng là dòng rượu pha chế.<br>350.000 VND</br></p>
                    </div>
                    <span class="sl7">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o8">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/ruou6.png')}}" style="margin-left:8rem">
                    </section>
                    <div style="margin-left:8rem">
                        <p>Rượu Tequila Jose Cuervo</p>
                        <p>Jose Cuervo là dòng tequila bán chạy nhất thế giới.<br>400.000 VND</br></p>
                    </div>
                    <span class="sl8" >
                        <p style="margin-left:8rem">Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit" >Chọn món</button></p>
                    </span>
                </div>

                
            </td>
        </tr>
        
    </table>
  <br><br><br>
@section('footer')


@endsection