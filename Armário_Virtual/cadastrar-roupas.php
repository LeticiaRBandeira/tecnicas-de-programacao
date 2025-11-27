<h1>Cadastrar roupass</h1>
<form action= "?page=salvar-roupass" method="POST">
	<input type="hidden" name="acao" value="cadastrar">

	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_roupas" class="form-control">
		</label>
	</div>	

	<div class="mb-3">
		<label>categorias
			<select name="categorias_id_categorias" class="form-control">
				<option value="">Selecione a categorias
				
                <?php
                    $sql = "SELECT * FROM categorias";
                    $res = $conn->query($sql);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_object()){
                            print "<option value='{$row->id_categorias}'>{$row->nome_categorias}</option>";
                        }
                    }
                    else{
                        print "<option value=''>Nenhuma categorias encontrada</option>";
                    }
                ?>
				</option>
			</select>
		</label>
	</div>

	<div class="mb-3">
		<label>tipo
			<input type="text" name="tipo_roupas" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Tamanho
			<input type="text" name="tamanho_roupas" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Cor
			<input type="text" name="cor_roupas" class="form-control">
		</label>
	</div>

	<div class="mb-3">
        <label for="estacaoroupas" class="form-label">Estação</label>
        <select name="estacao_roupas" id="estacaoroupas" class="form-control" required>
            <option value="" disabled selected>Selecione o Clima/Estação</option>
            <option value="quente">Quente (Verão)</option>
            <option value="ameno">Ameno (Primavera/Outono)</option>
            <option value="frio">Frio (Inverno)</option>
        </select>
    </div>

	<div class="mb-3">
		<label>Foto
			<input type="url" name="foto_roupas" class="form-control">
		</label>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Cadastrar roupas</button>
		<a href="?page=index.php" class="btn btn-secondary">Voltar</a>
	</div>
</form>