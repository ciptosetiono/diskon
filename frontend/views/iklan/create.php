<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Produk */

$this->title = 'Pasang Karya';
//$this->params['breadcrumbs'][] = ['label' => 'Karya', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row row-content">
    <?= $this->render('_form', [
        'model' => $model,
	'kategori'=>$kategori,

    ]) ?>
</div>
