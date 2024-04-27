@extends('pages.header')
@section('title','Món Khai Vị')
@extends('pages.footer')
@section('header')


	<link rel="icon" type="image/x-icon/" href="{{asset('public/frontend/img/icon logo.png')}}">

<br><br><br><br><br>
<div class="ndc">
    <a href="{{URL::to('/menu')}}">
      <div class="btn btn-light ms-4 mt-4 go-back" style="background:#FFDAB9" ><p style=" color: black; font-weight: bold;">Trở Lại</p><i class="fa-solid fa-arrow-right fa-rotate-180" style="background:#FFDAB9;"></i></div>
    </a>
          <div class="container d-flex justify-content-center pt-5"><h1 style="font-weight: bold;">MÓN KHAI VỊ</h1></div>
      <table>
        <tr class="h1">
            <td class="ngang1">
                <div class="o1" style="margin-right:8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi1.png')}}" alt="">
                    </section>
                    <div>
                        <p>Bruschetta bánh mì nướng</p>
                        <p>Bruschetta kết hợp giữa cà chua với bánh mì nướng thêm chút salad<br>100.000 VND</br></p>
                    </div>
                    <span class="sl1">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o2" style="margin-left:-8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi2.png')}}">
                    </section>
                    <div>
                        <p>Salad cồi sò điệp</p>
                        <p>Sò điệp áp chảo vàng ươm với các loại rau tươi<br>628.000 VND</br></p>
                    </div>
                    <span class="sl2">
                        <p style="margin-right:8rem">Số Lượng: <input type="number" name="soluong" min="0" max="100" style="margin-right:-8rem;">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                    <!-- <div class="o3">
                        <section class="hinh">
                            <img src="../hinhanhmonnhat/ca-trich-ca-hoi-bach-tuoc-song-va-com-sushi-tong-hop-a.jpg">
                        </section>
                        <div>
                            <p>Set sushi tổng hợp cở nhỏ (A)</p>
                            <p>Bao gồm các loại cá trích, cá hồi, bạch tuột và cơm sushi tổng hợp<br>508.000 VND</br></p>
                        </div>
                        <span class="sl1">
                            <p>Số Lượng:<input type="number" name="soluong" min="0" max="100">
                            <button type="submit">Chọn món</button></p>
                        </span>
                    </div> -->
            </td>
            <td class="ngang2">
                <div class="o4" style="margin-right:8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi3.png')}}">
                    </section>
                    <div>
                        <p> Foie gras / Gan ngỗng béo</p>
                        <p> Gan ngỗng cắt thành những miếng vuông nhỏ,áo một lớp bột mỏng<br>200.000 VND</br></p>
                    </div>
                    <span class="sl4">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o5" style="margin-left:-8rem">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi4.png')}}">
                    </section>
                    <div>
                        <p>Huître / Hàu sống</p>
                        <p> Hàu sau khi khui vỏ vắt vài giọt nước cốt quýt, ớt bột<br>300.000 VND</br></p>
                    </div>
                    <span class="sl5">
                        <p style="margin-right:9rem">Số Lượng: <input type="number" name="soluong" min="0" max="100" style="margin-right:-10rem;">
                        <button type="submit" >Chọn món</button></p>
                    </span>
                </div>

               <!--  <div class="o6">
                    <section class="hinh">
                        <img src="../hinhanhmonnhat/nam-ca-ngu-ca-hoi-ca-ngu-bam--dat-len-bat-com-sushi-phuc-vu-kem-sup-miso.jpg">
                    </section>
                    <div>
                        <p>Sashimi tổng hợp trên bát cơm sushi(có kèm súp miso)</p>
                        <p>Bao gồm các loại nạm cá ngừ, cá hồi ăn kèm với súp miso, trứng cá hồi<br>280.000 VND</br></p>
                    </div>
                    <span class="sl6">
                        <p>Số Lượng:<input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div> -->
            </td>

            <td class="ngang3">
                <div class="o7">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi5.png')}}" style="margin-top:-1rem">
                    </section>
                    <div>
                        <p>Croque Monsieur/ Bánh mì nướng</p>
                        <p>Sandwich, thịt nguội, trứng, phô mai và nước sốt bơ sữa<br>150.000 VND</br></p>
                    </div>
                    <span class="sl7">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <div class="o8">
                    <section class="hinh">
                        <img src="{{asset('public/frontend/img/hinhcacmonan/khaivi6.png')}}" style="margin-top:-1rem">
                    </section>
                    <div>
                        <p>Coq au vin / Gà sốt vang</p>
                        <p>om thịt gà với rượu vang, bơ, thịt xông khói, hành tây và tỏi<br>400.000 VND</br></p>
                    </div>
                    <span class="sl8">
                        <p>Số Lượng: <input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div>

                <!-- <div class="o9">
                    <section class="hinh">
                        <img src="../hinhanhmonnhat/bach-tuoc-nho.jpg">
                    </section>
                    <div>
                        <p>Bạch tuột nhỏ</p>
                        <p>Bao gồm 200g bạch tuột tươi ăn cùng với sốt tương đậu Nhật<br>280.000 VND</br></p>
                    </div>
                    <span class="sl9">
                        <p>Số Lượng:<input type="number" name="soluong" min="0" max="100">
                        <button type="submit">Chọn món</button></p>
                    </span>
                </div> -->
            </td>
        </tr>
        
    </table>
<br><br><br>
@section('footer')


@endsection