
<body>
	<h1>Alterar página</h1>
	<?php echo $this->Form->create('paginas', array('enctype' => 'multipart/form-data'));
	echo $this->Form->input('titulo', array(
		'label' => 'Título', 
		'value' => $pagina["Page"]["titulo"])
	);
	echo $this->Form->input('conteudo', array(
		'label' => 'Conteúdo',
		'type' => 'textarea',
		'style' => 'width:100%; height:250px',
		'value' => $pagina["Page"]["conteudo"])
	);
	echo $this->Form->input('imagem', array(
		'type' => 'file',
		'label' => 'Imagem',
		'class' => 'spacebottom')
	);
	echo $this->Form->submit('Alterar', array('class' => 'btn btn-info'));
	echo $this->Form->end();
	?>
	<a href="../../paginas">&#8617; Voltar</a>
</body>
