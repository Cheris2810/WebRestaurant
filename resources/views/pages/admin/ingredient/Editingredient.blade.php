@extends('pages.admin.header_footer.headeradmin')
@section('title','Nguyên liệu')
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
                            Thêm nguyên liệu
                        </header>
                         @if(isset($editIngredient)) 
                             @foreach ($editIngredient as $EditIngredient)
                        <div class="panel-body">
	                      
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/editIngredient/'.$EditIngredient->id)}}" method="post">
                                    @method('GET')
                                	{{csrf_field()}}
                                    {{method('GET')}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nguyên liệu</label>
                                    <input type="text" value="{{$EditIngredient->tennguyenlieu}}" name="ingredientname" class="form-control" id="exampleInputEmail1" placeholder="Tên nguyên liệu">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                    <input type="text" value="{{$EditIngredient->soluong}}" name="ingredientnumber" class="form-control" id="exampleInputEmail1" placeholder="số lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã món ăn tương ứng</label>
                                    <input type="text" value="{{$EditIngredient->idma}}" name="ingredientproduct" class="form-control" id="exampleInputEmail1" placeholder="món ăn tương ứng">
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="updateIngredient">Cập nhật nguyên liệu</button>
                           {{method('GET,HEAD')}}
                                </form>
                            </div>

                        </div>
                             @endforeach
                          @endif 
                    </section>

            </div>
            
        </section>

       
            </div>
        </div>


        <!-- page end-->
        </div>
</section>
 
@endsection