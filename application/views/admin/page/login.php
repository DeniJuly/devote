<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url() ?>login/login_admin"><b>Login Admin</b></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk Untuk Mengelola Data</p>

      <form action="" method="post" name="form_login" id="form_login">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn-log" id="btn-log">Masuk</button>
          </div>
        </div><br>
      </form>
    </div>
  </div>
</div>

<script src="<?= base_url() ?>public/admin/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>public/sweetalert/sweetalert2.all.min.js"></script>
<script>
$(document).ready(function(){
  $('#form_login').submit(function(e){
    $('#btn-log').addClass('disabled');
        e.preventDefault(); 
        $.ajax({
            url:'<?= base_url() ?>index.php/Login/proses_login_admin',
            type:"post",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(response){
              if (response == 1) {
                Swal.fire({
                    type: 'success',
                    title: 'selamat!',
                    text: 'Berhasil Login',
                  }).then((result) => {
                    location.href = "<?= base_url() ?>index.php/admin";
                  });
              }else if (response == 2) {
                Swal.fire({
                    type: 'error',
                    title: 'Gagal!',
                    text: 'Username Atau Password Salah !!',
                  });
                $('#btn-log').removeClass('disabled');
              }
            }
        });
    });
});
</script>
</body>
</html>
