<?php include "header.php"; 


$hizmetsor=$db->prepare("select * from hizmet order by hizmet_id ASC limit 8");
$hizmetsor->execute(array(1)); 

?>
<!-- banner section start -->
<div class="banner_section layout_padding">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="banner_taital">Antalya Marangoz</h1>
               <p class="banner_text"><?php echo $ayarcek["ayar_description"]; ?></p>
               <div class="read_bt"><a href="tel:<?php echo $ayarcek["ayar_gsm"]; ?>">Bize Ulaşın</a></div>
            </div>
         </div>

         <div class="carousel-item">
            <div class="container">
               <h1 class="banner_taital">Antalya Marangoz</h1>
               <p class="banner_text">30 Yıllık Tecrübe</p>
               <div class="read_bt"><a href="tel:<?php echo $ayarcek["ayar_gsm"]; ?>">Bize Ulaşın</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- banner section end -->
</div>
<!-- header section end -->
<!-- services section start -->

<div class="services_section layout_padding">
   <div class="container">
      <h1 class="services_taital">Hizmetlerimiz </h1>
      <p class="services_text">Hayallerinizi Gerçeğe Dönüştürmek için Buradayız
      </p>
      <div class="services_section_2">
         <div class="row">
          <?php  while($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC)) {?>
            <div class="col-md-4">
               <div><img src="<?php echo $hizmetcek["hizmet_foto"]; ?>" style="width: 700px !important; height: 500px !important;" class="services_img">

               </div>
               <div class="btn_main"><a href="#"><?php echo $hizmetcek["hizmet_ad"]; ?></a></div>
            </div>

         <?php } ?>
      </div>
   </div>
</div>
</div>
<!-- services section end -->

<!-- about section start -->
<div id="about" class="about_section layout_padding">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <div class="about_taital_main">
               <h1 class="about_taital">Hakkımızda</h1>
               <p class="about_text"><?php echo $hakkimizdacek["hakkimizda_icerik"] ?></p>
               <div class="readmore_bt"><a href="tel:<?php echo $ayarcek["ayar_gsm"]; ?>"><img src="images/call-icon.png">Bize ulaşın</a></div>
            </div>
         </div>
         <div class="col-md-6 padding_right_0">
            <div><img src="<?php echo $hakkimizdacek["hakkimizda_foto"]; ?>" class="about_img"></div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
<!-- blog section start -->
<div class="blog_section layout_padding">
   <div class="container">
      <h1 class="blog_taital">Bize ulaşın</h1>
      <div class="location_main">
         <div class="call_text"><a href="tel:<?php echo $ayarcek["ayar_gsm"]; ?>"><img src="images/call-icon.png"></a></div>
         <div class="call_text"><a href="tel:<?php echo $ayarcek["ayar_gsm"]; ?>"><?php echo $ayarcek["ayar_gsm"]; ?></a></div>


      </div>
   </div>
</div>
<!-- blog section end -->
<!-- client section start -->
<!--<div class="client_section layout_padding">
   <div class="container">
      <h1 class="client_taital">Testimonial</h1>
      <div class="client_section_2">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="client_main">
                     <div class="box_left">
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                     </div>
                     <div class="box_right">
                        <div class="client_taital_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                           <div class="quick_icon"><img src="images/quick-icon.png"></div>
                        </div>
                        <div class="client_taital_right">
                           <h4 class="client_name">Dame</h4>
                           <p class="customer_text">Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="client_main">
                     <div class="box_left">
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                     </div>
                     <div class="box_right">
                        <div class="client_taital_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                           <div class="quick_icon"><img src="images/quick-icon.png"></div>
                        </div>
                        <div class="client_taital_right">
                           <h4 class="client_name">Dame</h4>
                           <p class="customer_text">Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="client_main">
                     <div class="box_left">
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                     </div>
                     <div class="box_right">
                        <div class="client_taital_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                           <div class="quick_icon"><img src="images/quick-icon.png"></div>
                        </div>
                        <div class="client_taital_right">
                           <h4 class="client_name">Dame</h4>
                           <p class="customer_text">Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>-->
<!-- client section start -->
<!-- choose section start -->
<div class="choose_section layout_padding">
   <div class="container">
      <h1 class="choose_taital">Neden bizi seçmelisiniz?</h1>
      <p class="choose_text"><?php echo $ayarcek["ayar_bizisecin"]; ?></p>
      <div class="read_bt_1"><a href="islerimiz.php">İşlerimiz</a></div>
      <div class="newsletter_box">
         <h1 class="let_text">Bize ulaşın</h1>
         <div class="getquote_bt"><a href="tel:<?php echo $ayarcek["ayar_gsm"]; ?>">İletişim</a></div>
      </div>
   </div>
</div>
<!-- choose section end -->
<?php include "footer.php"; ?>