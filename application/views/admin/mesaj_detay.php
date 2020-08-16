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
                            <h1 class="page-header">Mesaj Yönetimi</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

  <div class="row">

 
                                    <div class="col-lg-9">
                                        
                                    </div>
                                    <div class="col-lg-3 ">
                                        
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


		
		<div class="table-content">


		

				<table class="table">
					<thead>
						<tr>
							<tr> 
								<th><i class=""></i>Adı</th>
								<td><?=$veri[0]->adsoy?></td>  
							</tr>
							<tr> 
								<th><i class=""></i>Soyadı</th>
								<td><?=$veri[0]->soyad?></td>  
							</tr>
							<tr>
								<th><i class=""></i>Email</th>
								<td><?=$veri[0]->email?></td>
							</tr>
						
							
							<tr>  
								<th>Tarih</th>
								<td><?=$veri[0]->tarih?></td>
							</tr>
							<tr>  
								<th><i class=""></i>Mesaj</th>
								<td>
									<textarea name="mesaj" rows="10" cols="52"><?=$veri[0]->mesaj?></textarea>
</td>
							</tr>
						

							
							
							
						</tr>  


					</tr>
				</thead>









				<!--  end paging................ -->
		
			<tr>



			</tr>
			

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

