<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'action' => '/index.php?r=site%2Flogin',
        'fieldConfig' => [
            'template' => "<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>


    <h3 class="form-title font-green">Sign In</h3>

    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter any username and password. </span>
    </div>

    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
    <label class="control-label visible-ie8 visible-ie9">Username</label>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Username']) ?>

    <label class="control-label visible-ie8 visible-ie9">Password</label>
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>

    <div class="form-actions">
        <button type="submit" class="btn green uppercase">Login</button>

        <label class="rememberme check mt-checkbox mt-checkbox-outline pull-right">
            <input type="checkbox" name="remember" value="1"/>Remember
            <span></span>
        </label>
    </div>

    <?php ActiveForm::end(); ?>
    <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
</div>
