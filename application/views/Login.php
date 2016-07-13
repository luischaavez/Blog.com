<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<form class="form-sigin">
<h2 class"form-signin-heading">¡Inicia Sesión!</h2>
<input type="email" id="Email" class="form-control" placeholder="Correo"  autofocus required>
        <input type="password" id="Password" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recuerdame
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
</form>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>