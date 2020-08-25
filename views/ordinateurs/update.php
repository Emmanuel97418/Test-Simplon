<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordinateurs */

$this->title = 'Update Ordinateurs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ordinateurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordinateurs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
