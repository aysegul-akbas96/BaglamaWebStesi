<footer class="site-footer">
      <div class="container">
    
          
        
        <div class="row">
              <center>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Adres</h2>
                <p><?=$veri[0]->adres?></p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Hızlı Menüler</h2>
                <ul class="list-unstyled">
                  <li><a href="<?=base_url()?>hakkimda">Hakkımda</a></li>
                  <li><a href="<?=base_url()?>album">Resimler</a></li>
                  <li><a href="<?=base_url()?>videolar">Videolar</a></li>
                  <li><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Bizi Takip Edin</h2>
                <a href="<?=$veri[0]->face?>" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="<?=$veri[0]->twitter?>" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="<?=$veri[0]->instagram?>" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                
              </div>
            </div>
          </div>
           </center>
        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm hakları saklıdır. <a href="https://nedimmedya.net/" target="_blank" >nedimmedya.net</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
  <script src="<?=base_url()?>assets/js/popper.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.countdown.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>assets/js/aos.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.fancybox.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.sticky.js"></script>

  
  <script src="<?=base_url()?>assets/js/main.js"></script>
    
  </body>
</html>