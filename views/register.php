<?php

use app\core\form\Form;

?>
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5">

            <!-- <h3 class="text-center mb-4">Have an account?</h3> -->
            <?php $form = Form::begin('', 'post') ?>
            <div class="text-center mb-5">
                <h2 class="heading-section">Register</h2>
                <p class="text-center mb-4">Have an account? <a href="/login">Login</a></p>
            </div>
            <?php $form->field($model, 'firstname') ?>
            <?= $form->field($model, 'lastname') ?>
            <?= $form->field($model, 'email')->emailField() ?>
            <?= $form->field($model, 'password')->passwordField() ?>
            <?= $form->field($model, 'password_confirmation')->passwordField() ?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit px-3 my-2">Register</button>
            </div>

            <?php Form::end() ?>
        </div>
    </div>
</div>