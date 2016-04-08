<?php
use Cake\Core\Configure;
use Cake\I18n\I18n;

$this->layout = 'bare';
$languages = Configure::read('Languages');
Configure::read('Auth')
?>
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1 class="text-center login-title">
            <?php echo __('Sign in to continue'); ?>
        </h1>
        <div class="account-wall">
            <?= $this->element('site_logo'); ?>
            <?= $this->Flash->render(); ?>
            <?= $this->Form->create('Users', [
                'inputdefaults' => [
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ],
                'templates' => [
                    'submitContainer' => '<div class="submit form-group">{{content}}</div>'
                ],
                'class' => 'form-signin form-horizontal',
                'id' => 'UserLoginForm',
                'novalidate' => 'novalidate'
            ]) ?>
            <p class="text-center form-group">
                <?= $this->Html->link(
                    __('Create an account'),
                    ['action' => 'signup'],
                    [
                        'class' => 'text-center new-account',
                        'style' => 'display:inline-block'
                    ]
                ) ?>
            </p>
            <?= $this->Form->input($this->Users->getField('username'), [
                'label' => false,
                'placeholder' => $this->Users->getPlaceholder('username'),
                'required',
                'autofocus'
            ]) ?>
            <?= $this->Form->input($this->Users->getField('password'), [
                'label' => false,
                'placeholder' => $this->Users->getPlaceholder('password'),
                'required'
            ]) ?>
            <?= $this->Form->submit(__('Sign in'), [
                'class' => 'btn btn-lg btn-primary btn-block'
            ]) ?>
            <p class="checkbox form-group">
                <label>
                    <input name="remember" type="checkbox" value="remember-me">
                    <?= __('Remember me') ?>
                </label>
            </p>
            <div class="clearfix"></div>
            <?= $this->Form->end(); ?>
        </div>
        <p class="text-center">
            <br>
            <?= $this->Html->link(
                __('Forgot your password?'),
                ['action' => 'sendRecovery'],
                ['escape' => false]
            ) ?>
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
