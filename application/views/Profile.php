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
      <picture>
        <source
		media="(min-width: 1024px)">
        <img align="left" sizes="(min-width: 640px) 60vw, 100vw" class="fb-image-lg" src="<?php base_url()?>/Images/Espacio.jpg" alt="Profile image example"/>

      </picture>
        <img align="left"  class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1><?php echo $this->session->userdata('username') ?></h1>
            <p>Girls just wanna go fun.</p>
        </div>
    </div>
</div> <!-- /container -->
