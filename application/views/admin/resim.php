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
                            <h1 class="page-header">Resim Yönetimi</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->



                          <div class="row">

 
                                    <div class="col-lg-9">
                                        
                                    </div>
                                    <div class="col-lg-3 ">
                                         <a href="<?=base_url()?>admin/resim/ekle" class="btn btn-success"><i class="fas fa-plus" aria-hidden="true" title="Copy to use plus"></i> Yeni resim ekle</a> 
                                         <br>
                                    </div>
                                    <br>
                                      <div class="col-lg-12">
                           <br>
                        </div>
                               
                              </div>


                   
                    <div class="row">
                       
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="panel panel-default">




                              <?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>İşlem:</strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>






                               
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">







                                         <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                     <th>Albüm Adı</th>
                                                     <th>Resim</th>
                                                    <th>İşlemler</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                 <?php
  $sno=0;
          foreach($resim as $rs)
      { $sno++;   
    ?>
                                                <tr>
                                                   <td><?=$sno?></td>
                                 
                                  <td><?=$rs->adi?></td>
                                 

                                    <td>
                                   
                                      <img class="rounded-circle" height="100px" width="150px" src="<?=base_url()?>uploads/<?=$rs->resim_adi?>"></a>
                                               
                                  </td>

    <td>

<a href="<?=base_url()?>admin/resim/duzenle/<?=$rs->id?>" class="btn btn-info btn-info"><i class=" fa fa-edit fa-fw"></i></a> 

 <a href="<?=base_url()?>admin/resim/sil/<?=$rs->id?>" class="btn btn-danger btn-danger"   onclick="return confirm('Silinsin mi?');" role="button"><i class="fas fa-trash-alt"></i></a>

  </td>
                                </tr>

 <?php
      }
      ?>






                                         


                                             
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
            
                  
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->













    


<?php
$this->load->view('admin/_footer');
?>

