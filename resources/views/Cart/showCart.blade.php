@extends('pages.header')
@section('title','Giỏ hàng')
@extends('pages.footer')
@section('header')

<style>
	
	}
</style>
	<link rel="icon" type="image/x-icon/" href="{{asset('public/frontend/img/icon logo.png')}}">

<br><br><br><br><br>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<!-- <ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol> -->
			</div>
			<div class="table-responsive cart_info" >
				<table class="table table-condensed" >
					<thead>
						<tr class="cart_menu">
							<td class="image" style="background-color:#7FFF00;font-weight: bolder;">Hình ảnh</td>
							<td class="description"style="background-color:#7FFF00;font-weight: bolder;">Món ăn</td>
							<td class="price"style="background-color:#7FFF00;font-weight: bolder;">Giá tiền</td>
							<td class="quantity"style="background-color:#7FFF00;font-weight: bolder;">Số lượng</td>
							<td class="total"style="background-color:#7FFF00;font-weight: bolder;">Tổng tiền</td>
							<td style="background-color:#7FFF00;font-weight: bolder;"></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							
							<!-- <td class="cart_product">
								<a href=""><img src="{{asset('public/frontend/img/hinhcacmonan/khaivi6.png')}}" style="width: 150px;" alt=""></a>
							</td> -->

							<td class="cart_description">
								<h4>Coq au vin Gà sốt vang</h4>
								<!-- <p>Web ID: 1089772</p> -->
							</td>
							<td class="cart_price">
								<p>400000</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">400000</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
							<td></td>
							
						</tr>

						
					</tbody>
				</table>
				 <input type="button" id="btn" value="Đặt hàng" style="background-color:#66FF00; padding-left:3rem; padding-right:3rem; padding-top:0.5rem; padding-bottom: 0.5rem; font-weight: bolder;" />
			        <script language="javascript">
			            var button = document.getElementById("btn");
			            button.onclick = function(){
			                alert("Đã đặt hàng.");
			            }
			        </script>
			</div>
		</div>
	</section> <!--/#cart_items-->

@section('footer')


@endsection