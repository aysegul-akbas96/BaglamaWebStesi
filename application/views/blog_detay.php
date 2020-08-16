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

<img src="<?=base_url()?>uploads/<?=$rs->blog_resim?>" alt="" style="width: 350px; height: 350px;">
</div>
<br><br>

<div class="col-md-8">
  <h3><?=$rs->blog_baslik?></h3>
  <p><?=$rs->blog_yazi?></p>


            </div>
          </div>
        <?php } ?>
        </div>

           
       
        <br>
          
       