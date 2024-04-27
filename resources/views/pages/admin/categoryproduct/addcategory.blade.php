@extends('pages.admin.header_footer.headeradmin')

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
                        <header class="panel-heading">
                            Thêm danh mục sản phẩm
                        </header>
                        <div class="panel-body">
	                      
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/savecategory')}}" method="post">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="categoryproductname" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none; rows=5" class="form-control" name="categoryproductdesc" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div>
                                <div class="form-group">
                                	<label for="exampleInputPassword1">Hiển thị</label>
	                                   <select class="form-control input-sm m-bot15" name="categorytinhtrang">
				                                <option value="0">Ẩn</option>
				                                <option value="1">Hiển thị</option> 
	                            		</select>
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="addcategoryproduct">Thêm danh mục</button>
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