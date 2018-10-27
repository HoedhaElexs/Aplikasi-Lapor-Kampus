
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGIN</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>     
      
         <?php echo form_open_multipart('login/ceklogin'); ?>
  
<body id="mimin" class="dashboard form-signin-wrapper">
<div class="container">
        <div class="form-signin">
          <div class="panel periodic-login">

              <div class="panel-body text-center">
                  <p class="atomic-mass">Proyek Tingkat 3</p>
                  <p class="element-name">Login</p>
                  <p class="element-name">Politeknik Negeri Malang</p>
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="username" class="form-text" id="username" required>
                    <span class="bar"></span>
                    <label>Username</label>
                    <?php echo form_error('username'); ?>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="password" class="form-text" id="password" required>
                    <span class="bar"></span>
                    <label>Password</label>
                    <?php echo form_error('password'); ?>
                  </div>
<!-- 
                  <div class="form-control">
                    
                    <img src="images/Captcha.png" alt="">
                    <input type="text" name="captcha" class="form-element" placeholder="Enter Captcha">
                    <label>Captcha</label>
                  </div> -->

                  <input type="submit" class="btn col-md-12" value="Sign In"/>
                  
              </div>
                 
          </div>
        </div>
        <?php echo form_close();?>

      </div>
    </div>
     
    <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/jquery.ui.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

      <script src="<?php echo base_url()?>assets/js/plugins/moment.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="<?php echo base_url()?>assets/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>