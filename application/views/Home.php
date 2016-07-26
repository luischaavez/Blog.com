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
<span class="badge">Date: <?php echo $item->Fecha ?></span>

<div class="pull-right">
   <span class="label label-warning">Author: <?php echo $item->Autor ?></span>
</div>
     </div>
    <hr>

<?php endforeach; ?>
</article>
