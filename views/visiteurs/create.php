<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Visiteurs */

$this->title = 'Create Visiteurs';
$this->params['breadcrumbs'][] = ['label' => 'Visiteurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visiteurs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
