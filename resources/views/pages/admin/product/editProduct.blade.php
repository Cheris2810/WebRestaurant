@extends('pages.admin.header_footer.headeradmin')
@section('title','Món ăn')
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
                            Cập nhật món ăn
                        </header>
                        @if(isset($editproduct)) 
                         @foreach ($editproduct as $Editproduct)
                        <div class="panel-body">
                        
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/updateproduct/'.$Editproduct->id)}}" method="post">
                                  {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên món ăn</label>
                                    <input type="text" value="{{$Editproduct->tenma}}" name="productname" class="form-control" id="exampleInputEmail1" placeholder="Tên món ăn">
                                </div>
                               <form action="{{URL::to('/updateproduct/'.$Editproduct->id)}}" class="col-md-5" enctype="multipart/form-data">
                                      <!-- <label for="exampleInputEmail1">Hình ảnh</label> -->
                                      <!-- <input type="file" name="fileToUpload" id="fileToUpload"> -->
                                     <label for="photo">Hình ảnh</label>
                                     <input type="file" value="{{$Editproduct->img}}" name="productimg" id="photo" accept="image/*" class="form-control-file">
                                      <!-- <input type="submit" value="Upload Image" name="submit"> -->
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá</label>
                                    <input type="text" value="{{$Editproduct->gia}}" name="productmoney" class="form-control" id="exampleInputEmail1" placeholder="Giá món ăn">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại thực đơn</label>
                                       <select class="form-control input-sm m-bot15" name="productidthucdon">
                                                <option value="2">2</option>
                                                <option value="3">3</option> 
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                </div>
                                
                                <button type="submit" class="btn btn-info"  name="updateproduct">Cập nhật món ăn</button>
                            </form>
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