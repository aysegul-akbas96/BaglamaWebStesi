 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 


<head> 
  <title><?=$sayfa?><?=$menu?></title>
</head>

                             

  <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Site Ayarları Yönetimi</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">

                              <?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>İşlem:</strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>


                                <div class="panel-heading">
                                   Ayar Düzenle
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div><br>
                                          </div>
                                            <form method="post" action="<?=base_url()?>admin/ayar/ayarlar_guncelle/<?=$veri[0]->id?>"  autocomplete="off"  role="form">
                                               
                                         
                                              
                                     <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Site Tittle</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" value="<?=$veri[0]->title?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Site Meta</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="meta" value="<?=$veri[0]->meta?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" value="<?=$veri[0]->description?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>



                                  <hr> 

   


                                   <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Telefon</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="telefon" value="<?=$veri[0]->telefon?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>

                                   <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Fax</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="fax" value="<?=$veri[0]->fax?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>

                                   <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="email" value="<?=$veri[0]->email?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
                                   <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Adres</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="adres" value="<?=$veri[0]->adres?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
<hr>
                                <div class="form-group row">
                         <label class="col-sm-3 text-right control-label col-form-label">Google Maps</label>
                             <div class="col-sm-9">
                 <textarea name="maps" class="" cols="67" rows="6"><?=$veri[0]->maps?></textarea>
           </div>
                   </div>
<hr>

                                   <div class="form-group row">
                            
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Facebook Sayfa URL
                                           </label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="face" value="<?=$veri[0]->face?>"class="form-control" id="email1" placeholder="">
                                        </div>



                                            
                                </div>
                             
                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Twitter Sayfa URL
</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="twitter" value="<?=$veri[0]->twitter?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Google Sayfa URL</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="google" value="<?=$veri[0]->google?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>
                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Instagram Sayfa URL
</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="instagram" value="<?=$veri[0]->instagram?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                </div>

                   

                                     <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Youtube</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="youtube" value="<?=$veri[0]->youtube?>"class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>



                                



                                                
                                                
                                            


                                                <div class="border-top">
                                <div class="card-body">
                                  <br>
                                  <br>
                                    <button type="submit" style="margin-left: 850px;" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>
                                              
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            
                                      
                                          
                                           
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>









    


<?php
$this->load->view('admin/_footer');
?>

