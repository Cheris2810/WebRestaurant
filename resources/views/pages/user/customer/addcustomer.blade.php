@extends('pages.admin.header_footer.headeradmin')
@section('title','Tài khoản khách hàng')
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
                                Quản lý tài khoản
                        </header>
                        <div class="panel-body">
	                      
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/saveCustomer')}}" method="post">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên tài khoản</label>
                                    <input type="text" name="createtenkhach" class="form-control" id="exampleInputEmail1" placeholder="Tên khách hàng">
                                </div>
                                                               
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email tài khoản</label>
                                    <input type="text" name="createtidnv" class="form-control" id="exampleInputEmail1" placeholder="Email tài khoản">
                                </div>
                                
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                       <select class="form-control input-sm m-bot15" name="createview">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiển thị</option> 
                                        </select>
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="addCustomer">Tạo tài khoản</button>
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