@extends('pages.admin.header_footer.headeradmin')
@section('title','Đơn hàng')
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
                            Thêm đơn hàng
                        </header>
                        <div class="panel-body">
	                      
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/saveOrder')}}" method="post">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên món ăn</label>
                                    <input type="text" name="ordertname" class="form-control" id="exampleInputEmail1" placeholder="Tên món ăn">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá</label>
                                    <input type="text" name="ordergia" class="form-control" id="exampleInputEmail1" placeholder="Giá món ăn">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                    <input type="text" name="ordersoluong" class="form-control" id="exampleInputEmail1" placeholder="Số lượng">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Tổng tiền</label>
                                    <input type="text" name="ordertongtien" class="form-control" id="exampleInputEmail1" placeholder="Số lượng">
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="addDone">Thêm món ăn</button>
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