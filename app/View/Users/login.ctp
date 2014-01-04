<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Entre com seu login e senha'); ?></legend>
        <?php echo $this->Form->input('email', array('label' => 'E-mail'));
        echo $this->Form->input('password', array('label' => 'Senha'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login', array('class' => 'btn btn-info'))); ?>
</div>