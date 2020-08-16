<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

      

        <!-- Bootstrap Core CSS -->
        <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?=base_url()?>assets/admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?=base_url()?>assets/admin/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?=base_url()?>assets/admin/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?=base_url()?>assets/admin/css/morris.css" rel="stylesheet">


        <link href="<?=base_url()?>assets/admin/css/icons/font-awesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">

        <link href="<?=base_url()?>assets/admin/css/icons/font-awesome/css/fontawesome.css" rel="stylesheet" type="text/css">

        <link href="<?=base_url()?>assets/admin/css/icons/font-awesome/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/admin/css/icons/font-awesome/css/fontawesome-all.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="<?=base_url()?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

         <script type="text/javascript" src="<?=base_url()?>assets/admin/js/ckeditor/ckeditor.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=base_url()?>admin/home">Yönetim PANELİ |</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="<?=base_url()?>admin/home"><i class="fa fa-home fa-fw"></i> Anasayfa</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                 

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            
                            <li><a href="<?=base_url()?>admin/ayar"><i class="fa fa-gear fa-fw"></i> Ayarlar</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?=base_url()?>admin/login/login_out"><i class="fa fa-sign-out fa-fw"></i> Çıkış Yap</a>
                            </li>
                        </ul>
                    </li>
                </ul>