<br>
<br>
  <body>

   
    <div class="site-blocks-cover overlay" style="background-image: url(<?=base_url()?>uploads/<?=$ana[0]->resim?>" >
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1></h1>
                <p class="mb-5"></p>
               
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  
<br>
<br>

<div class="container">
<div class="row">
<div class="col-md-6" style="background-color:  #f5f5dc;">
 <h3> Güncel Yazılar</h3>
<?php foreach ($v as $rs) {
          # code...
         ?>
     
        <ul>
          
        
     <a href="<?=base_url()?>blog/blog_detay/<?=$rs->id?>"><?=$rs->blog_baslik?></a>
 

</ul>
   
<?php } ?>





</div>
<div class="col-md-6" style="background-color:  #f5f5dc;">
  <h3>Güncel Etkinlikler</h3>
  

  <?php foreach ($ve as $as) {
          # code...
         ?>

  <img src="<?=base_url()?>uploads/<?=$as->resim_adi?>" alt="" style="width: 150px; height: 150px;">



<?php } ?>


</div>
</div>
</div>


   

    <br>
    <br>
    <br>
   
