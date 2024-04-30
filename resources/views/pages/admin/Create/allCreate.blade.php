@extends('pages.admin.header_footer.headeradmin')
@section('title','Phiếu đặt tiệc')
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
  table{
    justify-content: center;
    justify-items: center;
    margin-left:17rem;
  }

</style>

<section id="main-content" style="margin-left:25rem;margin-right:25rem ">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default" style="color:#FF3E96">
    <div class="panel-heading" style="font-weight: bolder;">
      Phiếu đặt tiệc
    </div>
    <div class="row w3-res-tb">
      <!-- <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div> -->
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
<table width="990px" style="padding-left:4rem; justify-content: center;" >
    <tr>
        <td width="180px" ><b style="color:blue;font-size:20px; margin-right:-2rem" >Thông tin </b><br><br> </td>
        <td width="810px" align="right" >
            &nbsp;
        </td>
    </tr>
  @if(isset($allcreate))
    @foreach($allcreate as $allcreate)
      <tr height="30px" >
          <td >Tên khách hàng : </td>
          <td >
               {{$allcreate->tenkhach}}
          </td>
      </tr>
      <tr height="30px" >
          <td >Số điện thoại : </td>
          <td >
                    {{$allcreate->sodienthoai}}
          </td>
      </tr>       
      <tr height="30px" >
          <td >Ngày diễn ra : </td>
          <td >
                    {{$allcreate->ngaydienra}}
          </td>
      </tr>
      <tr height="30px" >
          <td >Giờ diễn ra : </td>
          <td >
                    {{$allcreate->giodienra}}
          </td>
      </tr>
      <tr height="30px" >
          <td >Mã nhân viên : </td>
          <td >
                     {{$allcreate->idnv}}
          </td>
      </tr>
      <tr height="50px" >
          <td >Mã thực đơn : </td>
          <td >
                      {{$allcreate->idtd}}
          </td>
      </tr>
      <tr height="30px" >
          <td valign="top" >Đặc cọc : </td>
          <td >
                       {{$allcreate->idtd}}
          </td>
      </tr>
      <tr height="30px" >
          <td valign="top" >Phương thức thanh toán : </td>
          <td >
                       {{$allcreate->phuongthucthanhtoan}}
          </td>
      </tr>
     
      <tr height="30px" >
          <td>&nbsp;</td>
          <td>
              
              <!-- // xuất liên kết xóa ra (biến $link_xoa) -->
          </td>
      </tr>
      <td>
            
             <a onclick="return confirm('Bạn có chắc chắn xóa nội dung này không?')" href="{{URL::to('/deletecreate/'.$allcreate->stt)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i>
              </a>
      </td>
      @endforeach
    @endif
</table>
    </div>
    <!-- <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
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
        </div>
      </div>
    </footer> -->
  </div>
</div>
</section>
@endsection