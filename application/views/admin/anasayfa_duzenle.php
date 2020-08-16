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
                            <h1 class="page-header">Anasayfa Yönetimi</h1>
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
                                   Anasayfa Düzenle
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div><br>
                                          </div>
                                            <form method="post"  enctype="multipart/form-data" autocomplete="off" action="<?=base_url()?>admin/home/anasayfa_guncelle/<?=$anasayfa[0]->id?>" role="form">
                                               
                                         
                                              
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Başlık</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" value="<?=$anasayfa[0]->title?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim" value="<?=$anasayfa[0]->resim?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$anasayfa[0]->resim?>
                                         
                                      </div>
                                       <div class="form-group row">
                                        <br>
                                        <div>
                                          <br>
                                        </div>


                                        <br>
                                      </div>
                                      <div class="col-sm-12">
                                         <center><img class="rounded-circle" height="250px" width="650px" src="<?=base_url()?>uploads/<?=$anasayfa[0]->resim?>"></center> 
                                         
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

