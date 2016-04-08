<?php

use Cake\Core\Configure;
use Cake\I18n\I18n;

$this->layout = 'bare';
$languages = Configure::read('Languages');
?>
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h1 class="text-center login-title"><?php echo __('Sign up'); ?></h1>
        <div class="account-wall">
            <?= $this->element('site_logo'); ?>
            <?= $this->Flash->render(); ?>
            <?= $this->Form->create('Users', [
                'url' => ['action' => 'signup'],
                'templates' => ['submitContainer' => '<div class="submit form-group">{{content}}</div>'],
                'class' => 'form-signin form-horizontal',
                'id' => 'UserSignupForm'
            ]); ?>
            <?= $this->Form->input('username', [
                'class' => 'form-control',
                'placeholder' => __('Username'),
                'id' => 'signup-first',
                'required'
            ]); ?>
            <?= $this->Form->input('email', [
                'class' => 'form-control',
                'placeholder' => __('Email'),
                'id' => 'signup-email',
                'required'
            ]); ?>
            <?= $this->Form->input('password', [
                'type' => 'password',
                'class' => 'form-control',
                'placeholder' => __('Password'),
                'id' => 'signup-password',
                'required'
            ]); ?>
            <?= $this->Form->submit(__('Sign up'), [
                'class' => 'btn btn-lg btn-primary btn-block'
            ]); ?>
            <?= $this->Form->end(); ?>
        </div>
        <p class="text-center">
            <?= $this->Html->link(
                __('Already have an account?'),
                ['action' => 'signin'],
                ['escape' => false, 'class' => 'text-center new-account']
            ); ?>
        </p>
        <?php if ($languages !== false) : ?>
            <p class="text-center">
                <i class="fa fa-language text-muted"></i>
                <?= $this->Html->link(
                    __('Languages'),
                    ['#' => 'languages'],
                    [
                        'data-toggle' => 'collapse',
                        'escape' => false
                    ]
                ) ?>
            </p>
            <div class="collapse" id="languages">
                <div class="list-group">
                    <?php
                    foreach ($languages as $value => $language) {
                        $classes = ['list-group-item'];
                        if ($value == I18n::locale()) {
                            $classes[] = 'active';
                        }
                        echo $this->Html->link(
                            $language,
                            ['lang' => $value],
                            [
                                'class' => $classes
                            ]
                        );
                    } ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
