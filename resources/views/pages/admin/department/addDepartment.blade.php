@extends('pages.admin.header_footer.headeradmin')
@section('title','Bộ phận')
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
                            Thêm bộ phận
                        </header>
                        <div class="panel-body">
	                      
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/saveDepartment')}}" method="post">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên bộ phận</label>
                                    <input type="text" name="departmentname" class="form-control" id="exampleInputEmail1" placeholder="Tên bộ phận">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hệ số</label>
                                    <input type="text" name="departmentheso" class="form-control" id="exampleInputEmail1" placeholder="Hệ số">
                                </div>
                                <div class="form-group">
                                	<label for="exampleInputPassword1">Hiển thị</label>
	                                   <select class="form-control input-sm m-bot15" name="departmenthienthi">
				                                <option value="0">Ẩn</option>
				                                <option value="1">Hiển thị</option> 
	                            		</select>
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="addDepartment">Thêm bộ phận</button>
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