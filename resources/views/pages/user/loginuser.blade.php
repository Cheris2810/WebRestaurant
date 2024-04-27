<!DOCTYPE html>
<head>
<title>Restaurant Cheris Login</title>
<link rel="icon" type="image/x-icon/" href="{{asset('public/frontend/img/icon logo.png')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<style>
	 body{background: url(public/backend/img/bglogin.png);	background-size:cover;}
</style>

<body>
	<br><br>
<div class="log-w3">
<div class="w3layouts-main" style="border-radius: 5rem; background:#2F4F4F; opacity: 0.7;">
	<h2 style="color:white; font-weight: bolder;">ĐĂNG NHẬP</h2>
	<?php
	$message = Session::get('message');
	if($message){
		echo '<span class="text_message">'.$message.'</span>';
		Session::put('message',null);
	}
	?>
		<form action="{{URL::to('/homeuser')}}" method="post">
			{{csrf_field()}}
			<input type="email" class="ggg" name="Email" placeholder="Điền email" required="" style="border-radius:2rem">
			<input type="password" class="ggg" name="Password" placeholder="Điền mật khẩu" required="" style="border-radius:2rem">
			<span><input type="checkbox" /> Ghi nhớ</span>
			<h6><a href="#">Quên mật khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập"  style="border-radius:1rem">
		</form>
		<p>Bạn chưa có tài khoản ?<a href="{{URL::to('/registerUser')}}">Tạo tài khoản</a></p>
</div>
<br><br><br><br><br><br><br><br><br>
</div>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
