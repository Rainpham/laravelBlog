<!DOCTYPE html>
<html>
<head>
  <title>vupham</title>
  @include('admin.layout.link')
  <!-- iCheck -->
</head>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{!!asset('vp-admin/img/logo.png') !!}" alt="logo" style="width:200px;">
    <a href=""><b>giaodienwebs.com</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @include('admin.block.erro')
    <form action="" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="#">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<script src="{!!asset('vp-admin/js/jquery.min.js') !!}"></script>
<script src="{!!asset('vp-admin/js/bootstrap.min.js') !!}"></script>
<script src="{!!asset('vp-admin/js/icheck.min.js') !!}"></script>
</body>
</html>
