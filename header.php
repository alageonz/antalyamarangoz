<?php 
include "nedmin/netting/baglan.php";

session_start();
ob_start();




$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC); 

$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC); 







?>














<!DOCTYPE html>
<html lang="en">
<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title><?php echo $ayarcek["ayar_title"]; ?></title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <link rel="shortcut icon" href="<?php echo $ayarcek["ayar_logo"]; ?>" type="image/png" />
   <link rel="apple-touch-icon" href="<?php echo $ayarcek["ayar_logo"]; ?>" />
   <!-- owl stylesheets --> 
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
   <div class="mobile_menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item"><a class="nav-link" href="index.php">Anasayfa</a></li>
               <?php
               $menusor=$db->prepare("SELECT * FROM menu ORDER BY menu_sira DESC");
               $menusor->execute();
               while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { ?>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo $menucek['menu_url']; ?>"><?php echo $menucek['menu_ad']; ?></a>
                  </li>

               <?php } ?>
            </ul>

         </div>
      </nav>
   </div>
   <div class="container-fluid">
     
      <div class="menu_main">
         <ul>
            <li class="active"><a href="index.php">Anasayfa</a></li>
            <?php
            $menusor=$db->prepare("SELECT * FROM menu ORDER BY menu_sira DESC LIMIT 6");
            $menusor->execute();
            while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { ?>
               <li><a href="<?php echo $menucek['menu_url']; ?>"><?php echo $menucek['menu_ad']; ?></a></li>
            <?php } ?>
         </ul>
      </div>
   </div>
</div>