<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Bootstrap/css/Styles.css" rel="stylesheet">

	
</head>
<body>



<form class="form-horizontal BoxReg" method="POST">
  <fieldset>
    <legend align="center"><b>Sign Up</b></legend>
    <div class="form-group">
      <label for="Name" class="col-lg-2 control-label">Name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="Name" placeholder="Juan" required autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="Email" placeholder="example@example.com" required>
      </div>
    </div>
     <div class="form-group">
      <label for="User" class="col-lg-2 control-label">User name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="User" placeholder="Juan_197" required>
      </div>
    </div>
    <div class="form-group">
      <label for="Password" class="col-lg-2 control-label">Password:</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="Password" placeholder="********" required>
      </div>
    </div>
     <div class="checkbox col-lg-10">
          <label>
            <input type="checkbox"> I accept the Terms & Conditions
          </label>
        </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </fieldset>
</form>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>