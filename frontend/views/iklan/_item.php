<?php
use yii\helpers\Html;
?>  


<?=$model->id_produk;?> 
<?=$model->deskripsi;?>

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="..." alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
	<?=$model->nama_produk;?> 
  </div>
</div>
