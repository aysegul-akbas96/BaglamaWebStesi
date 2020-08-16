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
                            <h1 class="page-header">Blog Yönetimi</h1>
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
                                   Blog Düzenle
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div><br>
                                          </div>
                                            <form method="post"  enctype="multipart/form-data" autocomplete="off" action="<?=base_url()?>admin/blog/guncelle/<?=$blog[0]->id?>" role="form">
                                               
                                         
                                              
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Başlık</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="blog_baslik" value="<?=$blog[0]->blog_baslik?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="blog_resim" value="<?=$blog[0]->blog_resim?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$blog[0]->blog_resim?>
                                         
                                      </div>
                                      <div class="col-sm-3">
                                          <img class="rounded-circle" height="150px" width="150px" src="<?=base_url()?>uploads/<?=$blog[0]->blog_resim?>">
                                         
                                      </div>
                              
                                                </div>






                                   <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Blog Yazı</label>
                                    <div class="col-sm-9">
                                       <textarea name="blog_yazi" class="ckeditor" id=""><?=$blog[0]->blog_yazi?></textarea>
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

