@extends('pages.admin.header_footer.headeradmin')
@section('title','Nhân viên')
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
      Liệt kê nhân viên
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <!-- <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select> -->
        <!-- <button class="btn btn-sm btn-default">Apply</button>                 -->
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
         <!--  <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span> -->
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
            <th>Tên nhân viên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Mã bộ phận</th>
            <th>Căn cước</th>
            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

        	@foreach($allStaff as $allStaff)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$allStaff->tennhanvien}}</td>
            <td>{{$allStaff->ngaysinh}}</td>
             <td><span class="text-ellipsis">
              <!-- giới tính -->
              <?php
                if($allStaff->gioitinh == 'Nữ'){
                    echo 'Nữ';
                }else{
                    echo 'Nam';
                }
              ?>
            </span></td>
            <td>{{$allStaff->idbp}}</td>
            <td><span class="text-ellipsis">{{$allStaff->cccd}}</span></td>
            <td><span class="text-ellipsis">
            	<!-- active: hiển thị -->
            	<?php
            		if($allStaff->view == 0){
            	?>
            		<a href="{{URL::to('/unactiveStaff/'.$allStaff->id)}}"><span class="fathumbstyleup fa fa-thumbs-up"></span></a>
            	<?php
            		}else{
            		
            	?>
            		<a href="{{URL::to('/activeStaff/'.$allStaff->id)}}"><span class="fathumbstyledown fa fa-thumbs-down"></span></a>
            	<?php
            		}
            	?>
            </span></td>
            <td>
              <a href="#" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc chắn xóa nội dung này không?')" href="{{URL::to('/deleteStaff/'.$allStaff->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i>
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