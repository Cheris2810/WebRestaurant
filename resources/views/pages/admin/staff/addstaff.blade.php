@extends('pages.admin.header_footer.headeradmin')
@section('title','Nhân viên')
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
                            Thêm nhân viên
                        </header>
                        <div class="panel-body">
	                      
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/saveStaff')}}" method="post">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhân viên</label>
                                    <input type="text" name="staffname" class="form-control" id="exampleInputEmail1" placeholder="Tên nhân viên">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày sinh</label>
                                    <input type="text" name="staffbirth" class="form-control" id="exampleInputEmail1" placeholder="Ngày sinh">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giới tính</label>
                                       <select class="form-control input-sm m-bot15" name="staffgioitinh">
                                                <option value="Nữ">Nữ</option>
                                                <option value="Nam">Nam</option> 
                                        </select>
                                </div>
                               <div class="form-group">
                                    <label for="exampleInputEmail1">Mã bộ phận</label>
                                    <input type="text" name="staffdepartment" class="form-control" id="exampleInputEmail1" placeholder="mã bộ phận">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Căn cước</label>
                                    <input type="text" name="staffcccd" class="form-control" id="exampleInputEmail1" placeholder="Căn cước">
                                </div>
                                <div class="form-group">
                                	<label for="exampleInputPassword1">Hiển thị</label>
	                                   <select class="form-control input-sm m-bot15" name="departmentview">
				                                <option value="0">Ẩn</option>
				                                <option value="1">Hiển thị</option> 
	                            		</select>
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="addStaff">Thêm nhân viên</button>
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