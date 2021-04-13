
<body class="hold-transition login-page">



<div class="login-box">
  <div class="login-logo">
   <b>Aplikasi Bantuan Sosial</b>
    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="login-logo" align="center">

  <?php
          echo $this->session->flashdata('msg');
          ?>
  
    </div>

    <p class="login-box-msg">Silahkan login di bawah ini.</p>

    <form action="<?php echo base_url();?>web/Login/ceklogin" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nama_pengguna" placeholder="Username" autofocus required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="pass" class="form-control" placeholder="password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
     
      <div align="center" class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="kirim" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>


    </form>
    <!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
     /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
