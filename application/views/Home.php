<article>
<br><br><br><br>
<!--Cargar los posts-->
<div class="container">
<div class="col-md-8">
  <?php foreach ($post as $item) :
    $url = 'post/'.$item->Id_articulo.'/';
    $url .= url_title(convert_accented_characters($item->Nombre_articulo),'-',TRUE);
            ?>
    <h1><?php echo anchor ($url,$item->Nombre_articulo); ?></h1>
    <p><?php echo $item->Contenido; ?></p>
    <div>
<span class="badge">Fecha: <?php echo $item->Fecha ?></span>
<div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span></div>
     </div>
    <hr>

<?php endforeach; ?>
</article>

<aside class="col-md-4 col-offset-3">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</aside>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
