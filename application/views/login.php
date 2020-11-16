<!doctype html>
<html lang="en">

<head>
  <title>Aplikasi Bansos Sederhana</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.theme.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/toastr.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dropzone.css');?>">

  <link rel=" icon" href="<?php echo base_url('assets/img/images.jpeg');?>">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <style>
    .act-btn{
            background:green;
            display: block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: white;
            font-size: 30px;
            font-weight: bold;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            text-decoration: none;
            transition: ease all 0.3s;
            position: fixed;
            right: 30px;
            bottom:30px;
      z-index:100;
        }
    .act-btn:hover{background: blue}

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 250px;
        margin: 6rem auto 8.1rem auto;
        width: 330px;
}

#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}


    </style>
</head>

<body>
  <div align="center">
              <h1 class="heading">Aplikasi Bansos Sederhana</h1>
            
            </div>
            <div class="header">
           

          <div id="card">
            <div id="card-content">

  <div id="card-title">

  
              <?php echo form_open('dashboard/login'); ?>
       
              
                <div class="form-group">
               <label for="signin-password" class="control-label sr-only" id="id">Username</label>
               <input type="username" name="username" required="">
                </div>
                <br>
                <div class="form-group">
                  <label for="signin-password" class="control-label sr-only" id="username">Password</label>
                   <br>
        <input type="password" name="password">
                </div>
                <br>
             
      <br>
                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                
            <?php echo form_close() ?>
      
  </div>
</div>  
<div id="card-content" align="center">
                  <a href="https://caramengatasimasalahmu.blogspot.com/2020/11/aplikasi-bansos-sederhana.html" target="_blank">© 2020 Developer</a>
                </div>      </div>
          
         