 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 
<head> 
  <title><?=$sayfa?><?=$me?></title>
</head>

                             

  <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Menu Yönetimi</h1>
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
                                   Menu Düzenle
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div><br>
                                          </div>
                                            <form method="post" action="<?=base_url()?>admin/menu/guncelle/<?=$menu[0]->id?>" role="form">
                                               
                                         
                                              
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Menü Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="menu_adi" value="<?=$menu[0]->menu_adi?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>




                                    <div class="row form-group">
                                        <div class="col col-md-3 text-right control-label col-form-label"><label for="select" class=" form-control-label">Menu Durum</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="menu_durum"  id="select" class="form-control">
                                              <option value="<?=$menu[0]->menu_durum?>"><?=$menu[0]->menu_durum?></option>
                                                <option value="Pasif">Pasif</option>
                                                <option value="Aktif">Aktif</option>
                                             
                                            </select>
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

