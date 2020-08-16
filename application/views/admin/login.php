<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


       <link href="<?=base_url()?>assets/admin/css/log.css" rel="stylesheet">

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form ">
                     <div class="logo mb-3">
                         <div class="col-md-12 text-center">
                            <h1>Admin Panel</h1>
                         </div>
                    </div>
                   <form name="login" autocomplete="off"  action="<?=base_url()?>admin/login/login_ol" method="post">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Kullanıcı Adı</label>
                              <input type="text" name="admin_adi"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Kullanıcı Adı">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Şifre</label>
                              <input type="password" name="admin_sifre" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                             <br>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Giriş Yap</button>
                           </div>
                          
                          <?php if($this->session->flashdata("mesaj"))
        { ?>

<br>

<div class="alert alert-danger" role="alert">
                                   <?=$this->session->flashdata("mesaj")?>    

             </div>
        
    <?php   }?>

                        
                     </form>
                 
                </div>
            </div>
         
        </div>
      </div>   
      
       <script src="<?=base_url()?>assets/admin/js/log.js"></script>
   
</body>