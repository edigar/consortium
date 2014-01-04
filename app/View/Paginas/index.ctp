<html>
<body>
	
	<h1>Páginas do site</h1><br />
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Título</th>
				<th>Conteúdo</th>
				<th>Apagar</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($principal as $pagina) { ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><a href="paginas/alterar/<?php echo $pagina["Page"]["id"]; ?>"><?php echo $pagina["Page"]["titulo"]; ?></a></td>
					<td><?php echo substr_replace($pagina["Page"]["conteudo"], '...', 100); ?></td>
					<td><center><a id="xApagar" href="paginas/apagar/<?php echo $pagina["Page"]["id"]; ?>">&#10008;</a><center></td>
				</tr>
				<?php $i++; ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="paginas/adicionar"><input type="button" class="btn btn-info" value="Adicioar página"></a>
</body>
</html>