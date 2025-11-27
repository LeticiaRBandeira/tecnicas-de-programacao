<h1>Cadastrar usuario</h1>
<form action= "?page=salvar-usuario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">

	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_usuario" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>E-mail
			<input type="email" name="email_usuario" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Telefone
			<input type="text" name="telefone_usuario" class="form-control">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Cadastrar usuario</button>
		<a href="?page=index.php" class="btn btn-secondary">Voltar</a>
	</div>
</form>