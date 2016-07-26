<br><br>

<style type="text/css">



.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%;
}

@media (max-width:768px)
{

.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%;
}
}
</style>

<div class="container">
    <div class="fb-profile">
       <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
        <img align="left"  class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1><?php echo $this->session->userdata('username') ?></h1>
            <p>Oi nomas ese cumbión prro! :V</p>
        </div>
    </div>
</div> <br><br>

<?php foreach ($post as $item):?>

<form class="form-horizontal">
<div class="container" style="width: 1200px; text-align: left;">
	<div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
               <section class="post-heading">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object photo-profile glyphicon glyphicon-user" width="40" height="40" alt="...">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="#" class="anchor-username"><h4 class="media-heading"><?php echo $this->session->userdata('username') ?></h4></a>
                                <a href="#" class="anchor-time">Recent</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-md-1">
                             <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                         </div>
                    </div>
               </section>
               <section class="post-body">
                 <a href="#" class="anchor-username"><h4 class="media-heading"><?php echo $item->Nombre_articulo; ?></h4></a>
                   <p><?php echo $item->Contenido; ?></p>
               </section>
               <section class="post-footer">
                   <hr>
                   <div class="post-footer-option container">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Comment</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                        </ul>
                   </div>
                   <div class="post-footer-comment-wrapper">
                       <div class="comment-form">
                         </form>
                       <?php endforeach; ?>

                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                       <!-- Include all compiled plugins (below), or include individual files as needed -->
                       <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
                     </body>
                     </html>
