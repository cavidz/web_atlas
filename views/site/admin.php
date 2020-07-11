<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Atlas</b> Engineering</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

     

      <?php $form = ActiveForm::begin([
                    'id' => 'admin-form',
                ]); ?>
        <div class="form-group has-feedback">
          <?= $form->field($model, 'username', ['options' => [
                      'tag' => 'div',
                      'class' => 'form-group field-loginform-username has-feedback required'
                      ],
                      'template' => '<div class="input-group mb-3">{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-user form-control-feedback"></span></div></div></div>
                                      {error}{hint}'
              ])->textInput(['placeholder' => 'Username', 'style' => 'height: auto !important;'])->label(false); ?>
        </div>
        <div class="form-group has-feedback">
          <?= $form->field($model, 'password', ['options' => [
                      'tag' => 'div',
                      'class' => 'form-group field-loginform-password has-feedback required'
                      ],
                      'template' => '<div class="input-group mb-3">{input}<div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock form-control-feedback"></span></div></div></div>
                                      {error}{hint}'
                      ])->passwordInput(['placeholder' => 'Password', 'style' => 'height: auto !important;'])->label(false); ?>
        </div>
        <div class="row">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-block', 'name' => 'admin-button']) ?>

        </div>
      <?php ActiveForm::end(); ?>

      </div>
    <!-- /.login-card-body -->
  </div>
</div>