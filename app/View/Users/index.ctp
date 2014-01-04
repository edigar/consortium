
<html>
<body>
	<h1>Usuários</h1><br />
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th colspan="2"><center>Ações</center></th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($users as $user) { ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $user["User"]["name"]; ?></td>
					<td><?php echo $user["User"]["email"]; ?></td>
					<td width="50px">
						<a href="users/edit/<?php echo $user["User"]["id"]; ?>">
							<input type="button" class="btn btn-warning" value="Editar">
						</a>
  					</td>
  					<td width="50px">						
						<form class="form" method="POST" action="users/delete/<?php echo $user["User"]["id"]; ?>">
  							<input type="hidden" id="id" value="<?php echo $user["User"]["id"]; ?>" >
  							<input type="submit" class="btn btn-danger" value="Deletar">
  						</form>
					</td>
				</tr>
				<?php $i++; ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="users/add"><input type="button" class="btn btn-info" value="Adicioar usuário"></a>
</body>
</html>

