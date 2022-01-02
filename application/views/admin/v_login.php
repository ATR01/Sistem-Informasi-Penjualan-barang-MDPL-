<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko Amanah</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url().'assets/css/all.min.css'?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url().'assets/css/sb-admin.css'?>" rel="stylesheet">

  </head>

  <body class="bg-dark">
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container">
    
    <div class="page-content container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-wrapper">
                    <div class="box">
                        <div class="content-wrap">
                            <img width="310px" src="<?php echo base_url().'assets/img/amanah.png'?>"/>
                            <p><?php echo $this->session->flashdata('msg');?></p>
                            <hr/>
          <form action="<?php echo base_url().'administrator/cekuser'?>" method="post" >
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" required="required" autofocus="autofocus">
                <label for="username">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" required="required" autofocus="autofocus">
                <label for="inputPassword">Password</label>
              <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login </button>
            <br>
          </form>
        </div>
      </div>
    </div>
    <!-- <p class="login-box-msg">IP Kamu : <?php echo $ipaddres; ?></p> -->
    

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/jquerys/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.bundle.min.js'?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/jquery-easing/jquery.easing.min.js'?>"></script>

  </body>

</html>
