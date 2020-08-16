 <head>
   
 
 <title><?=$sayfa?><?=$veri[0]->title?></title>
 </head>

 <br>
 <br>
 <br>

 <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
           
            <h2 class="mb-4">Video Galeri</h2>
            
          </div>
        </div>
        <div class="row d-flex">
           <?php foreach ($verim as $rs)
        {

       

          ?>   
          <div class="col-md-6 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <h3 class="heading"><a href=""><?=$rs->video_adi?></a></h3>
              </div>
              
              <iframe width="500" height="250" src=" <?=$rs->video_link?>" ></iframe>
              
            </div>
          </div>
          <br>
          <br>
        <?php } ?>
          
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>























