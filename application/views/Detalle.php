<br><br><br><br>
<!--Cargar los posts-->
<div class="container">
<div class="col-md-12">
    <h1><?php echo $detalle->Nombre_articulo; ?></h1>
    <p><?php echo $detalle->Contenido_total; ?></p>
    <div>
<span class="badge">Date: <?php echo $detalle->Fecha ?></span>
<div class="pull-right">
   <span class="label label-warning">Author: <?php echo $detalle->Autor ?></span>
</div>
     </div>
    <hr>

    <div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="page-header">Comments</h2>
        <section class="comment-list">
          <!--Comments -->
          <?php if(!empty($comments)){
            foreach ($comments as $comm):

             ?>
          <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center"><?php echo $comm->User; ?></figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i><b><?php echo $comm->User; ?></b></div>
                    <time class="badge" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo $comm->Fecha; ?></time>
                  </header>
                  <div class="comment-post">
                    <p>
                      <?php echo $comm->Comment; ?>
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach; } ?>

          <?php if ($this->session->userdata('logueado')){?>
    <div class="container">
      <div class="dropdown">
        <ul>
          <?php echo form_open(base_url().'Home/insert_comment')?>
        <input type="hidden" name="id_post" value="<?php echo $id?>"/>
          <li><textarea name="comment" rows="5" class="col-md-10" style="resize:none; border-radius: 3px;">

          </textarea></li>
          <br><br><br><br>
          <li><button style="width: 100px;"class="btn btn-success btn-block">Comment..</button></li>

        </div>
        </div>


        <?php
        echo form_close();

      }else
          {

            echo "<h4>Solo los usuarios logueados pueden comentar.
            Inicia sesión <a class='btn btn-primary btn block'>aqui.</a></h4>";

          }?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
