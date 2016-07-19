<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $titulo ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php  echo base_url()?>/Bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php  echo base_url()?>/Bootstrap/css/Styles.css" type="text/css" rel="stylesheet">


</head>
<body>

  <div class="container" style="margin-top:30px">
  <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><strong>Sign in </strong></h3>
        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
    </div>

    <div class="panel-body">
     <?php echo form_open(base_url().'Login/entrada_login') ?>

    <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo set_value('email')?>" placeholder="example@mail.com">
      </div>
        <p><?php echo form_error('email') ?></p>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="pass" type="password" class="form-control" name="pass" placeholder="*******">
      </div>
      <p><?php echo form_error('pass') ?></p>
    <input type="hidden" name="token" value="<?php echo $token?>" />
    <button type="submit" class="btn btn-success">Sign in</button>
    <hr style="margin-top:10px;margin-bottom:10px;" >
    <div class="form-group">
    <div style="font-size:85%">
      Don't have an account!
    <a href="<?php echo base_url()?>Reg/index">
    Sign Up Here</a>
    </div>
  </div>
  <?php echo form_close() ?>
    </div>
  </div>
  </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
