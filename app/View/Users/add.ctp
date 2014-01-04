<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo 'Criar usuário'; ?></legend>
        <?php echo $this->Form->input('name', array('label' => 'Nome'));
        echo $this->Form->input('email', array('label' => 'E-mail'));
        echo $this->Form->input('password', array('label' => 'Senha'));
    ?>
    </fieldset>
<?php 
	echo $this->Form->submit('Adicionar', array('class' => 'btn btn-info'));
	echo $this->Form->end();
?>
<a href="../users">&#8617; Voltar</a>
</div>