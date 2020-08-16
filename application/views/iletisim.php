<head> 
     <title><?=$sayfa?><?=$veri[0]->title?></title>
</head>
<br>
<br>
    <br>
    <br>



       <section class="ftco-section contact-section ftco-no-pb " id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            
            <h2 class="mb-4">İletişim Bilgileri</h2>
            
          </div>
        </div>



  <div class="row col-12">  
           <div class="col-xs-6 col-md-6">
           <iframe src="<?=$veri[0]->maps?>" width="650" height="400" frameborder="3" style="border:0;" allowfullscreen=""></iframe>
           </div>

           <div class="col-xs-2 col-md-2">

           </div>

        <div class="col-xs-4 col-md-4" data-aos="fade" >
                <form  method="post" action="<?=base_url()?>home/mesaj_kaydet">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                    <input type="text" name="adsoy" class="form-control" required="required" placeholder="Adınız">
                 
                </div>
                <div class="col-md-6">
                  <input type="text" name="soyad" class="form-control" required="required" placeholder="Soyadınız">
               
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                     <input type="text" name="email" class="form-control" required="required" placeholder="Email Adresiniz">
                 
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="mesaj" id="" class="form-control" placeholder="Mesajınızı Yazınız." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Gönder">
                </div>
              </div>
            </form>
             
           
          </div>
        </div>




























      <hr>
      <br>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Adres</h3>
                <p><?=$veri[0]->adres?></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Telefon</h3>
                <p><a href="tel://1234567920"><?=$veri[0]->telefon?></a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Addres</h3>
                <p><a href=""><?=$veri[0]->email?></a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">Google</h3>
                <p><a href="#"><?=$veri[0]->google?></a></p>
              </div>
          </div>
        </div>
  
      </div>
    </section>
      
    


















<br>
<br>























  

   
    


       