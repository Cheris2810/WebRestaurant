@extends('pages.admin.header_footer.headeradmin')
@section('title','Đơn hàng')
@section('headeradmin')
<style>

	.fathumbstyledown{
		color:#FF3E96;
		font-size: xx-large;
		}
	.fathumbstyleup{
		color:#7FFF00;
		font-size: xx-large;
	}

</style>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default" style="color:#FF3E96">
    <div class="panel-heading" style="font-weight: bolder;">
      Liệt kê món ăn
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
                     
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
         
        </div>
      </div>
    </div>
    <div class="table-responsive">
    	<?php
			$message = Session::get('message');
			if($message){
				echo '<span class="text_message">'.$message.'</span>';
				Session::put('message',null);
			}
		?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên món ăn</th>
            <!-- <th>Hình ảnh món ăn</th> -->
            <th>Giá</th>
            <th>Loại thực đơn</th>
            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

        	@foreach($allDone as $allDone)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$allDone->tenmonan}}</td>
        
            <td>{{$allDone->gia}}</td>
            <td>{{$allDone->soluong}}</td>
            <td>{{$allDone->tongtien}}</td>

          
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <!-- <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div> -->
      </div>
    </footer>
  </div>
</div>
</section>
@endsection