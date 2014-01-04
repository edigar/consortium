<html>
<body>
	<h1>Adicionar Página</h1>
	<?php echo $this->Form->create('../', array('enctype' => 'multipart/form-data'));
	echo $this->Form->input('titulo', array('label' => 'Título'));
	echo $this->Form->input('conteudo', array(
		'label' => 'Conteúdo',
		'type' => 'textarea',
		'style' => 'width:100%; height:250px')
	);
	echo $this->Form->input('imagem', array('type' => 'file', 'label' => 'Imagem', 'class' => 'spacebottom'));
	echo $this->Form->submit('Adicionar', array('class' => 'btn btn-info'));
	echo $this->Form->end();
	?>
	<a href="../paginas">&#8617; Voltar</a>
</body>
</html>