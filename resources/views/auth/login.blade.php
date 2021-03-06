<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>لوحة التحكم | تسجيل الدخول</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap-rtl 3.3.4 -->
    <link rel="stylesheet" href="assets/admin/bootstrap/css/bootstrap-rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admin/dist/css/fontawesome-4.4.0.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/admin/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/admin/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box ">
      <div class="login-logo">
        {{-- <a href="admin"><img src="assets/images/logo-5.png" alt=""></a> --}}
      </div><!-- /.login-logo -->
      <div class="login-box-body ">
        <p class="login-box-msg">تسجبل الدخول للوحة التحكم</p>
<!--        <div class="alert alert-danger alert-dismissable">-->
<!--                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>-->
<!--                   <i class="icon fa fa-ban"></i> البريد الإلكتروني أو كلمة المرور خاطئة-->
<!--                  </div>-->
        <form action="{{route('login')}}" method="post" >
            @csrf
          <div class="form-group has-feedback">
            <input type="text" class="form-control" id="email" name="email" placeholder="ايميل المستخدم">
            <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
          </div>
          @error('email')
          <p class="text-danger">{{ $message }}</p>
      @enderror
          <div class="form-group has-feedback">
            <input type="password" class="form-control"  placeholder="كلمة المرور" id="password" name="password">
            <i class="glyphicon glyphicon-lock form-control-feedback"></i>
          </div>
          @error('password')
          <p class="text-danger">{{ $message }}</p>
      @enderror
          <div class="row">
            
            <div class="col-xs-4">
              <input type="submit" id="Submit" class="btn btn-primary btn-block btn-flat" value="دخول">
            </div><!-- /.col -->
         
          </div>
        </form>
        
               
      </div><!-- /.login-box-body -->
      <div class="lockscreen-footer text-center">
     <strong>  &copy; </strong> جميع الحقوق محفوظة ل - مؤسسة أجيال للتدريب والتطوير  -
        </div>
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="assets/admin/plugins/iCheck/icheck.min.js"></script>
<!--    ValidationFormScript-->
   <script src="assets/admin/dist/js/ValidationFormScript.js"></script>
   <script src="assets/admin/dist/js/ValidationForm.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
