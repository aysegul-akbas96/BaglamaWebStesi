 <head>
   
 
 <title><?=$sayfa?><?=$veri[0]->title?></title>
 </head>
 <br>
 <br>
 <br>


  <div id="about" class="section wb">
        <div class="container">

            <div class="row">
                <div class="col-md-4">

                    <div class="post-media wow fadeIn">
                       <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h4>Albümlerimiz</h4>



                        </div>

                        <ul class="footer-links hov">

                             <ul>

                                    <?php 

                                    foreach ($album as $rs) {
            
                                    ?>
                                      <li><a href="<?=base_url()?>album/res_getir/<?=$rs->id?>"><?=$rs->adi?><span class="icon icon-arrow-right2"></span></a></li>


                            <?php
                        }
                        ?>



                         
                          

                             </ul>


                          
                        </ul><!-- end links -->


                    </div><!-- end clearfix -->
                </div><!-- end col -->
                    </div><!-- end media -->


                </div><!-- end col -->
              </div>









               <div id="portfolio" >
       
        <div class="container-fluid">
           
 

            <div id="da-thumbs" class="da-thumbs portfolio">

                <?php



                foreach ($resim as $rs) {
                    # code...
              

                ?>

                <div class="post-media pitem item-w1 item-h1 ">
                    <a href="<?=base_url()?>resimler/<?=$rs->resim_adi?>" data-rel="">
                        <img src="<?=base_url()?>resimler/<?=$rs->resim_adi?>" alt="" class="img-responsive">
                        <div>
                            
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

                <?php
  }


                ?>
               
            </div><!-- end portfolio -->
        </div><!-- end container -->
    </div><!-- end section -->
            </div>
          </div>
<br>
<br>