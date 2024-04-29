@extends('pages.admin.header_footer.headeradmin')
@section('title','Món ăn')
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
        <!-- <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>      -->           
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <!-- <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div> -->
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

        	@foreach($Allproduct as $Allproduct)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$Allproduct->tenma}}</td>
            <!-- <td><span class="text-ellipsis">{{$Allproduct->img}}</span></td> -->
            <td>{{$Allproduct->gia}}</td>

            <td><span class="text-ellipsis">
              <!-- active: loại thực đơn -->
              <?php
                if($Allproduct->idtd == 2){
                  echo 'Món khai vị';
                }else if($Allproduct->idtd == 3){
                  echo 'Món chính';
                }else if($Allproduct->idtd == 4){
                  echo 'Món tráng miệng';
                }else{
                  echo 'Đồ uống';
                }
              ?>
            </span></td>
            
            <td><span class="text-ellipsis">
            	<!-- active: hiển thị -->
            	<?php
            		if($Allproduct->view == 0){
            	?>
            		<a href="{{URL::to('/unactiveproduct/'.$Allproduct->id)}}"><span class="fathumbstyleup fa fa-thumbs-up"></span></a>
            	<?php
            		}else{

            	?>
            		<a href="{{URL::to('/activeproduct/'.$Allproduct->id)}}"><span class="fathumbstyledown fa fa-thumbs-down"></span></a>
            	<?php
            		}
            	?>
            </span></td>
           
            <td>
              <a href="{{URL::to('/editproduct/'.$Allproduct->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc chắn xóa nội dung này không?')" href="{{URL::to('/deleteproduct/'.$Allproduct->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i>
              </a>
              
            </td>
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