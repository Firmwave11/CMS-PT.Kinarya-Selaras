<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="aset/fa/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="aset/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>{{ config('app.name', 'Laravel') }}</b>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <b><p class="login-box-msg">Login Form</p></b>
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
        <form action="{{ url ('/loginPost') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="text" name="email" class="form-control" placeholder="Email" maxlength="30" value="{{ old('email') }}" />
            
            <span class="help-block">
              @if ($errors->has('email'))

            <strong>{{ $errors->first('email') }}</strong>            
          </span>
          </div>
          @endif

          <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" name="password" class="form-control" placeholder="Password" maxlength="255" />
            <span class="help-block">
            @if ($errors->has('password'))

            <strong>{{ $errors->first('password') }}</strong>
           
            </span>
          </div>
           @endif
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary">Sign In <i class="fa fa-sign-in"></i></button>
            </div><!-- /.col -->
          </div>
        </form>
		
		
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>