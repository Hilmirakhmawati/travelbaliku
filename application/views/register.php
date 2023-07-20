<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrasi</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('login/assets/css/login.css')?>">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo base_url('login/assets/images/destination-8.jpg')?>" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?php echo base_url('login/assets/images/Travel.png')?>" alt="logo" class="logo" style="width: 80px; height: auto;">
              </div>
              <h1 style="margin-left : 70px; margin-top : -60px;">TRAVELBALIKU</h1>
              <p class="login-card-description" style=" font-size: 25px;">Registrasi Akun</p>
              <form action="<?php echo base_url('c_travelbaliku/register')?>" method = "POST">
                  <div class="form-group">
                    <label for="text" class="sr-only">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="text" class="sr-only">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="text" class="sr-only">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="text" class="sr-only">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder=" Alamat">
                  </div>
                  <input type="submit" class="btn btn-block login-btn mb-4" type="button" value="Register">
                </form>
                <p class="login-card-footer-text">Sudah punya akun ? <a href="<?php echo base_url('c_travelbaliku/logintravel')?>" class="text-reset">Log in</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
