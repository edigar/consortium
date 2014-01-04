
	<h1>Alterar usuário</h1>
	<?php echo $this->Form->create('User');
	echo $this->Form->input('name', array(
		'label' => 'Name:', 
		'value' => $this->request->data["User"]["name"])
	);
	echo $this->Form->input('email', array(
		'label' => 'E-mail:',
		'value' => $this->request->data["User"]["email"])
	);
	echo $this->Form->input('password', array(
		'label' => 'Nova senha:',
		'type' => 'password')
	);
	echo $this->Form->submit('Alterar', array('class' => 'btn btn-info'));
	echo $this->Form->end();
	?>
	<a href="../../users">&#8617; Voltar</a>