<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$sayfa?><?=$veri[0]->title?></title>
   
    <meta charset="utf-8">
    <meta name="description" content="<?=$veri[0]->description?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">




   
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-3 text-left">
            <ul class="social-media">
              <li><a href="<?=$veri[0]->face?>" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="<?=$veri[0]->twitter?>" class="p-2"><span class="icon-twitter"></span></a></li>

              <li><a href="<?=$veri[0]->instagram?>" class="p-2"><span class="icon-instagram"></span></a></li>
             
             

            </ul>

   
          </div>


          <div class="col-9">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2"></span><span class="d-none d-lg-inline-block"><?=$veri[0]->telefon?></span></a></span>
              <span><a href="<?=$veri[0]->email?>"><span class="icon-envelope mr-2"></span><span class="d-none d-lg-inline-block"><?=$veri[0]->email?></span></a></span>
            </p>
           
          </div>
        </div>
      </div>
    </div>


    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
 
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
           <h1><a href="<?=base_url()?>home" class="">
            <?=$ana[0]->title?> </a></h1>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
         <?php
                            $anasayfa=null;
                            $hakkimda=null;
                            $blog=null;
                            $resimler=null;
                            $videolar=null;
                            $iletisim=null;
                         
                            if($menuac=="anasayfa")
                                $anasayfa="active";
                             if($menuac=="hakkimda")
                                $hakkimda="active";
                                if($menuac=="blog")
                                $blog="active";

                                if($menuac=="resimler")
                                $resimler="active";

                                if($menuac=="videolar")
                                $videolar="active";

                                 if($menuac=="iletisim")
                                $iletisim="active";
                             
                             
                         
                         

                            ?>
                             <?php
                        foreach ($menu as $rs) {





                         

                        if($rs->id==1){


                        ?>

        <li class="nav-item active">
          <a class="<?=$anasayfa?>" href="<?=base_url()?>home"><?=$rs->menu_adi?>&nbsp;&nbsp;
                <span class="sr-only">(current)</span>
              </a>
        </li>

        <?php
                      }

                        if($rs->id==2){
                        ?>
        <li class="nav-item">
          <a class="<?=$hakkimda?>" href="<?=base_url()?>hakkimda"><?=$rs->menu_adi?> &nbsp;&nbsp;</a>
        </li>
         <?php
                       }
                       if($rs->id==3){
                        ?>
        <li class="nav-item">
          <a class="<?=$blog?>" href="<?=base_url()?>blog"><?=$rs->menu_adi?>&nbsp;&nbsp;</a>
        </li>
         <?php
                       }
                       if($rs->id==4){
                        ?>
        <li class="nav-item">
          <a class="<?=$resimler?>" href="<?=base_url()?>album"><?=$rs->menu_adi?>&nbsp;&nbsp;</a>
        </li>


                         <?php
                       }
                       if($rs->id==5){
                        ?>
        <li class="nav-item">
          <a class="<?=$videolar?>" href="<?=base_url()?>videolar"><?=$rs->menu_adi?>&nbsp;&nbsp;</a>
        </li>

                         <?php
                       }
                       if($rs->id==6){
                        ?>

        <li class="nav-item">
          <a class="<?=$iletisim?>" href="<?=base_url()?>home/iletisim"><?=$rs->menu_adi?>&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <?php
}}
?>

<div class="">

         <audio id="myAudio" autoplay="">

  <source src="<?=base_url()?>uploads/saz.mp3" type="audio/mpeg">

</audio>



<button onclick="pauseAudio()" type="button">Müzik Durdur</button> 

<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 


function pauseAudio() { 
  x.pause(); 
} 
</script>


</div>
      </ul>
    </div>
  </div>
</nav>



     
    </header>
<br>
<br>