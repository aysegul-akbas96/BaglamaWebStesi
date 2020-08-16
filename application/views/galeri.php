<head>
   
 
 <title><?=$sayfa?><?=$veri[0]->title?></title>
 </head>
<br>
<br>
<br>

<div class="row">
    <?php 
    foreach ($resim as $rs) {
         # code...
    ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" >
            <div class="h-entry" >
                <center>
                <a href="<?=base_url()?>album/res_getir/<?=$rs->album_id?>"><?=$rs->adi?>
                <br>
                            <img src="<?=base_url()?>uploads/<?=$rs->resim_adi?>" alt=""  style="width: 300px; height: 200px;" ></a>
              </center>
          </div>
          
        </div>
        <?php 
        } ?>
    </div>

        <br>
        <br>
        <br>