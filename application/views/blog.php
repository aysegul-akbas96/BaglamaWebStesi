 <head>
   
 
 <title><?=$sayfa?><?=$veri[0]->title?></title>
 </head>
 <br>
 <br>
 <br>
 <div class="container">
     <?php 
foreach ($verim as $rs) {
  # code...

   ?>
<div class="row">
 

<div class="row col-md-4">

<img src="<?=base_url()?>uploads/<?=$rs->blog_resim?>" alt="" style="width: 150px; height: 150px;">
</div>
<br><br>

<div class="col-md-8">
  <h3><?=$rs->blog_baslik?></h3>

<?php
                        $yazi =$rs->blog_yazi;

                        $uzunluk = strlen($yazi); 
                        $sinir = 100; 

                        if ($uzunluk > $sinir) { 

                            $icerik = substr($yazi,0,$sinir); 



?>





                      

                        <p> <?=$icerik?>.. </p>

                   
            <?php
            }else{


   

            ?>    



            <p> <?=$rs->blog_yazi?> </p>     

 <?php
            }

                
       
            ?>           






                        <a href="<?=base_url()?>blog/blog_detay/<?=$rs->id?>" class="btn btn-light btn-radius btn-brd grd1">Devamı</a>
 
</div>



</div>
<br>
<br>
  


<?php } ?>









</div>



<br>
<br>        
          
       