<?php 

include 'header.php';

$hizmetsor=$db->prepare("SELECT * FROM hizmet");
$hizmetsor->execute();
?>




<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="page-title">


</div>

<div class="col-md-12">
<div class="title_right">
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">


</div>
</div>
</div>


<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<div align="left" class="col-md-6">
<h2 >hizmet İşlemleri <small>
<?php
echo $say." kayıt listelendi.";
if ($_GET['durum']=='ok') {?> 

  <b style="color:green;">İşlem başarılı...</b>

  <?php } elseif ($_GET['durum']=='no')  {?>

    <b style="color:red;">İşlem Başarısız...</b>

    <?php } ?></small></h2><br>
    </div>
    <div align="right" class="col-md-6">
    <a href="hizmet-ekle.php"><button  class="btn btn-danger "><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button></a>
    </div>
    <div class="clearfix"></div>
    </div>


    <div class="x_content">
    <div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
    <thead>
    <tr class="headings">

    <th width="160" class="column-title text-center">hizmet Foto</th>
    <th width="160"  class="column-title text-center ">hizmet Ad</th>
    
    <th width="80" class="column-title text-center">Düzenle</th>
    <th width="80" class="column-title text-center">Sil</th>


    </tr>
    </thead>

    <tbody>

    <?php 



    while($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC)) {
      ?>


      <tr>

      <td class="text-center"><img width="100" height="100" src="../../<?php echo $hizmetcek['hizmet_foto']; ?>"></td>
      <td ><?php echo $hizmetcek['hizmet_ad']; ?></td>
     
      

      


  <td class="text-center"><a href="hizmet-duzenle.php?hizmet_id=<?php echo $hizmetcek['hizmet_id']; ?>"><button style="width:80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>

  <td class="text-center"><a href="../netting/islem.php?hizmetsil=ok&hizmet_id=<?php echo $hizmetcek['hizmet_id']; ?>&hizmet_resimyol=<?php echo $hizmetcek['hizmet_resimyol']; ?>"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Sil</button></a></td>

</tr>

<?php } ?>

</tbody>
</table>
</div>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- /page content -->



<?php include 'footer.php'; ?>
