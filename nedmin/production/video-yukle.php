<?php 
include 'header.php';
include '../netting/baglan.php';

$videosor=$db->prepare("SELECT * from video where video_id=:video_id");
$videosor->execute(array(
  'video_id' => $_GET['video_id']
  ));
$videocek=$videosor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar </h3>
      </div>

    <!--  <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ara!</button>
            </span>
          </div>
        </div>
      </div>-->
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
           <div class="x_title">
             <div align="left" class="col-md-6">
              <h2 >Video İşlemleri <small>
                <?php 
                if ($_GET['durum']=='ok') {?> 
                
                <b style="color:green;">İşlem başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                <b style="color:red;">İşlem Başarısız...</b>

                <?php } ?></small></h2><br>
              </div>
              <div align="right" class="col-md-6">
                <a href="video.php"><button  class="btn btn-warning "><i class="fa fa-undo" aria-hidden="true"></i> Geri Dön</button></a>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">


              <?php


              if ($_GET['youtube']=="ok") {

                ?>

                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                  <input type="hidden" name="video_id" value="<?php echo $videocek['video_id']; ?>">
                  <input type="hidden" name="video_resimyol" value="<?php echo $videocek['video_resimyol']; ?>">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" name="video_ad" disabled="" value="<?php echo $videocek['video_ad']; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <img width="200" height="100" src="../../<?php echo $videocek['video_resimyol']; ?>">
                    </div>
                  </div>

                  

                  


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çekilen Video<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     <iframe width="400" height="225" src="https://www.youtube.com/embed/<?php echo $videocek['video_code']; ?>?list=PLZtkgIR0fgTHt1ZaDskLfv3WwVTdCYDIU&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>



                

                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                   <a class="btn btn-success" href="video-yukle.php">Yeni Ekle</a>
                </div>

              </form>

              <?php } else {   ?>



              <form action="../netting/video.php" method="POST"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video Code<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" name="video_code" placeholder="Youtube Video Kodu..." class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="videocek" class="btn btn-primary">Video Çek</button>
                </div>


                <?php } ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->



  <?php include 'footer.php'; ?>
