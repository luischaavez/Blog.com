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

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<div class="container">
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to Blog.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <?php echo form_open(base_url().'Login/entrada_login') ?>
                              <div class="form-group">
                                  <label for="email" class="control-label">Email</label>
                                  <input type="email" class="form-control" name="email" value="<?php echo set_value('email')?>" placeholder="example@example.com">
                                  <p><?php echo form_error('email')?></p>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" name="pass" placeholder="********">
                                  <p><?php echo form_error('pass')?></p>
                                  <span class="help-block"></span>
                              </div>
                              <input type="hidden" name="token" value="<?php echo $token?>" />
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>

                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="#" class="btn btn-default btn-block">Help to login</a>
                          <?php  echo form_close() ?>

                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your posts</li>
                          <li><span class="fa fa-check text-success"></span> All the things that you need</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get points</li>
                      </ul>
                      <p><a href="<?php base_url()?>/Reg/index" class="btn btn-info btn-block">Register now!</a></p>
                  </div>
              </div>
          </div>
          </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
