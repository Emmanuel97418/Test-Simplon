<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordinateurs */

$this->title = 'Create Ordinateurs';
$this->params['breadcrumbs'][] = ['label' => 'Ordinateurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordinateurs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
