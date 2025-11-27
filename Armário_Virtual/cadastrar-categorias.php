<h1>Cadastrar Categorias</h1>
<form action= "?page=salvar-categorias" method="POST">
	<input type="hidden" name="acao" value="cadastrar">

	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_categorias" class="form-control" required placeholder="Ex: Camiseta, calças, sapatos, acessórios...">
		</label>
	</div>

	<div class="mb-3">
		<label>descricao
			<input type="text" name="descricao_categorias" class="form-control" required placeholder="Ex: Trabalho, festa, casual...">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Cadastrar categorias</button>
		<a href="?page=index.php" class="btn btn-secondary">Voltar</a>
	</div>
</form>