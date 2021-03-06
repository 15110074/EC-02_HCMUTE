<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng Nhập</title>

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet"  href="../css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="./Css/Login.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="{{route('postdangnhap')}}" method="post"value="{{ csrf_token() }}" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="text-center mb-4">
        <img class="mb-4" src="./images/logo.jpg" alt="" width="150" height="120">
        <h1 class="h3 mb-3 font-weight-normal">Đăng Nhập</h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" name="username" placeholder="Email address" required="" autofocus="">
        <label for="inputEmail">Địa chỉ Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
        <label for="inputPassword">Mật khẩu</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lưu mật khẩu
        </label>
        <br>
<!--         <p style="color: red"> {{Session::get('error')}}<!--  {{$error or ''}} --> 
          @if(Session::has('error'))
            <div class="alert alert-danger">{{Session::get('error')}}</div>
          @endif
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
      <p class="mt-5 mb-3 text-muted text-center">© EC-02</p>
    </form>
  </body>
</html>