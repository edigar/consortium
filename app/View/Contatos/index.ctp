
<h1>Contatos</h1>
<?php foreach ($contatos as $contato) { ?>

<p><b>Data:</b> <?php echo $contato["Contato"]["created"]; ?></p>
<p><b>Nome:</b> <?php echo $contato["Contato"]["nome"]; ?></p>
<p><b>E-mail:</b> <?php echo $contato["Contato"]["email"]; ?></p>
<p><b>Telefone:</b> <?php echo $contato["Contato"]["telefone"]; ?></p>
<p><b>Mensagem:</b> <br /> <?php echo $contato["Contato"]["mensagem"]; ?></p><br />

<a href="contatos/delete/<?php echo $contato["Contato"]["id"]; ?>">
	<input type="button" class="btn btn-danger" value="Apagar contato" style="margin-left:800px;">
</a>
<hr />
<?php } ?>