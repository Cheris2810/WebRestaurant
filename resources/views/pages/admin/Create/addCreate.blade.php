@extends('pages.admin.header_footer.headeradmin')
@section('title','Phiếu đặt tiệc')
@section('headeradmin')

<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                    	 <?php
							$message = Session::get('message');
							if($message){
								echo '<span class="text_message">'.$message.'</span>';
								Session::put('message',null);
							}
							?>
                        <header class="panel-heading" style="color:#FF3E96; font-weight: bold;">
                                Lập phiếu
                        </header>
                        <div class="panel-body">
	                      
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/savecreate')}}" method="post">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách hàng</label>
                                    <input type="text" name="createtenkhach" class="form-control" id="exampleInputEmail1" placeholder="Tên khách hàng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" name="createdienthoai" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày diễn ra</label>
                                    <input type="text" name="createngay" class="form-control" id="exampleInputEmail1" placeholder="Ngày diễn ra">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giờ diễn ra</label>
                                    <input type="text" name="creategio" class="form-control" id="exampleInputEmail1" placeholder="Giờ diễn ra">
                                </div>
                               
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Mã nhân viên</label>
                                    <input type="text" name="createtidnv" class="form-control" id="exampleInputEmail1" placeholder="Mã nhân viên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã thực đơn</label>
                                    <input type="text" name="createidtd" class="form-control" id="exampleInputEmail1" placeholder="Mã thực đơn">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Đặc cọc</label>
                                    <input type="text" name="createiddc" class="form-control" id="exampleInputEmail1" placeholder="Đặc cọc">
                                </div>
                               
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phương thức thanh toán</label>
                                    <input type="text" name="createphuongthuc" class="form-control" id="exampleInputEmail1" placeholder="Phương thức thanh toán">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                       <select class="form-control input-sm m-bot15" name="createview">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiển thị</option> 
                                        </select>
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="addcreate">Lập phiếu</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </section>

       
            </div>
        </div>


        <!-- page end-->
        </div>
</section>
 
@endsection