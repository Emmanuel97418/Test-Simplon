<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Visiteurs */

$this->title = 'Update Visiteurs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Visiteurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visiteurs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
