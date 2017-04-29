<!DOCTYPE html>
<html>
<head>
    <base href="{{ asset('/') }}"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Administrator</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <a href="admin/login"><b>tintuc</b>.com</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in</p>

        <form action="administrator/login" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback {{ $errors->has('txtUsername') ? ' has-error' : '' }}">
                <input type="text" id="txtUsername" name="txtUsername" class="form-control" placeholder="Nhập vào username"
                       value="{{ old('txtUsername') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('txtUsername'))
                    <span class="help-block">
              <strong>{{ $errors->first('txtUsername') }}</strong>
          </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('txtPassword') ? ' has-error' : '' }}">
                <input type="password" id="txtPassword" name="txtPassword" class="form-control"
                       placeholder="Nhập vào password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('txtPassword'))
                    <span class="help-block">
              <strong>{{ $errors->first('txtPassword') }}</strong>
          </span>
                @endif
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- jQuery 2.2.3 -->
<script src="adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="adminlte/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

