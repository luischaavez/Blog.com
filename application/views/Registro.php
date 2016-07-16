<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $titulo?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<link href="Bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="Bootstrap/css/Styles.css" type="text/css" rel="stylesheet">

	
</head>
<body>


<?php echo form_open(base_url().'Reg/registro_bcrypt') ?>
<div class="form-horizontal BoxReg">
  <fieldset>
    <legend align="center"><b>Sign Up</b></legend>
    <div class="form-group">
      <label for="nameu" class="col-lg-2 control-label">Name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nameu" placeholder="Juan">
        <p><?php echo form_error('nameu')?></p>
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Email:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="email" placeholder="example@example.com">
        <p><?php echo form_error('email')?></p>
      </div>
    </div>
     <div class="form-group">
      <label for="user" class="col-lg-2 control-label">User name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="user" placeholder="Juan_197">
        <p><?php echo form_error('user')?></p>
      </div>
    </div>
    <div class="form-group">
      <label for="pass" class="col-lg-2 control-label">Password:</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="pass" placeholder="********">
        <p><?php echo form_error('pass')?></p>
        <input type="hidden" name="token" value="<?php echo $token?>" />
      </div>
    </div>
     <div class="checkbox col-lg-10">
          <label>
            <input type="checkbox"> Acepto los términos y condiciones
          </label>
        </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-success" value="Guardar">Submit</button>
      </div>
    </div>
  </fieldset>
</div>
<?php form_close()?>
<?anchor('Reg/index', 'Registro')?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>