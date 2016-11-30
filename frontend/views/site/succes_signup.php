<?php
use yii\helpers\Html;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Terimakasih telah bergabung bersama Bursajateng.Com, Media Iklan Jawa Tengah.</p>
     Kami telah Mengirimkan email aktivasi ke <?= $model->email ?>.
</div>
