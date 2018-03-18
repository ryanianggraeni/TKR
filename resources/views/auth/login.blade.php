<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


  
      <link rel="stylesheet" href="{{asset('daftar/css/style.css')}}">

  
</head>

<body>

  <div class="container">
  <div class="login">
    <h1 class="login-heading">
      <strong>Silankan Login Terlebih Dahulu:)</strong></h1>
      <form method="post" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
        <input type="text" name="email" placeholder="Email" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             
          <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Masuk
                                </button>

                               <!--  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
    
          </div>
      </form>
  </div>
</div>
  
  

    <script  src="{{asset('daftar/js/index.js')}}"></script>




</body>

</html>
