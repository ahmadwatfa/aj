@extends('admin.layout.admin')


@section('main')
            </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
          <ol class="breadcrumb">
           <li><a href="admin"><i class="fa fa-home"></i> الرئيسية </a></li>
            <li><a href="admin/user-table">قائمة المستخدمين</a></li>
           <li class="active">تعديل بيانات المستخدم </li>
          
          
            
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> تعديل بيانات <small>المستخدم</small> </h3>
                  <i class="pull-left header fa fa-th"></i>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                <form role="form" action="{{route('user.update', $user->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="box-body col-md-12">
                  <div class="col-md-8">
                 
                  <div class="col-md-12">
                     <div class="form-group">
                      <label class="col-sm-3 control-label">اسم المستخدم :</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" placeholder="" value="{{old('name' , $user->name)}}" data-fv-field="">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                      <label class="col-sm-3 control-label">الإيميل  :</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="{{old('email' , $user->email)}}" placeholder="" data-fv-field="">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>

                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">نوع المستخدم :</label>
                        <div class="col-sm-9">
                          
                              
                          
                          <div class="form-group">
                            <label class="">
                              <div class=" checked" aria-checked="true" aria-disabled="false" style="position: relative; margin-right: 15px"><input type="radio" value="1" name="r1" class="minimal"  style="position: absolute; opacity: 0;" @if(old('r1' , 'super_admin') == $user->role ) checked @endif><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins> مدير </div>

                            </label>
                            <label class="">
                              <div class="checked" aria-checked="true" aria-disabled="false" style="position: relative; margin-right: 15px"><input value="2" type="radio" name="r1"  class="minimal" style="position: absolute; opacity: 0;" @if(old('r1' , 'admin') == $user->role ) checked @endif><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>  مشرف موقع   </div>

                            </label>

                          </div>

                          @error('r1')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                         
                        </div>
                      </div>

                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                       <label class="col-sm-3 control-label">كلمة المرور :</label>
                       <div class="col-sm-9">
                         <input type="password" class="form-control" id="password" name="password" placeholder="" data-fv-field="">
                         @error('password')
                         <p class="text-danger">{{ $message }}</p>
                         @enderror
                       </div>
                     </div>
 
                   </div>
                     <div class="col-md-12">
                      <div class="form-group">
                       <label class="col-sm-3 control-label"> تأكيد كلمة المرور :</label>
                       <div class="col-sm-9">
                         <input type="password" class="form-control"  name="password_confirmation" placeholder="" data-fv-field="">
                         @error('password_confirmation')
                         <p class="text-danger">{{ $message }}</p>
                         @enderror
                       </div>
                     </div>
 
                   
 

                  </div>

               

                  </div>
                  
            
                  
             
                  
                 
              </div><!-- /.box-body -->
                  <div class="box-footer"><!-- .box-footer -->
                    <button type="submit" class="btn  btn-primary">تخزين</button>
                    <button type="reset"  class="btn  btn-default">تفريغ الحقول</button>
                  </div><!-- /.box-footer -->
                </form>
                <!-- form end -->
              </div><!-- /.box -->

       
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
   @endsection