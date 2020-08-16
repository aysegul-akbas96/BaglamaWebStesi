 <h3> Güncel Yazılar</h3>
<?php foreach ($v as $rs) {
          # code...
         ?>
      <div class="row col-md-4" style="background-color:  #f5f5dc;">
        
         <ul>
  <h5><b><a href="<?=base_url()?>blog/blog_detay/<?=$rs->id?>"><?=$rs->blog_baslik?></a></b></h>
</ul>
 


    </div>
<?php } ?>

