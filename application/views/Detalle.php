<br><br><br><br>
<!--Cargar los posts-->
<div class="container">
<div class="col-md-12">

    <h1><?php echo $detalle->Nombre_articulo; ?></h1>
    <p><?php echo $detalle->Contenido; ?></p>
    <div>
<span class="badge">Fecha: <?php echo $detalle->Fecha ?></span>
<div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span></div>
     </div>
    <hr>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
