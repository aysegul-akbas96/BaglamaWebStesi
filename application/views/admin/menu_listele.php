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
                            <h1 class="page-header">Menü Yönetimi</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                   
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
                                                     <th>Menü Adı</th>
                                                     <th>Durum</th>
                                                    <th>İşlemler</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                 <?php
  $sno=0;
          foreach($menu as $rs)
      { $sno++;   
    ?>
                                                <tr>
                                                   <td><?=$sno?></td>
                                 
                                  <td><?=$rs->menu_adi?></td>
                                  <td><?=$rs->menu_durum?></td>

    <td>

<a href="<?=base_url()?>admin/menu/duzenle/<?=$rs->id?>" class="btn btn-info btn-info"><i class=" fas fa-edit"></i></a> 



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

