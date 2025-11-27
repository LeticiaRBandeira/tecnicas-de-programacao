<h1>Editar Roupas</h1>
<?php
    $sql = "SELECT * FROM roupa WHERE id_roupa=".$_REQUEST['id_roupa'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-roupas" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_roupa" value="<?php echo $row->id_roupa; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_roupa" class="form-control" value="<?php print $row->nome_roupa; ?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>Tipo
            <input type="text" name="tipo_roupa" class="form-control" value="<?php print $row->tipo_roupa; ?>">
        </label>
    </div>
  
  	<div class="mb-3">
        <label>Tamanho
            <input type="text" name="tamanho_roupa" class="form-control" value="<?php print $row->tamanho_roupa; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Cor
            <input type="text" name="cor_roupa" class="form-control" value="<?php print $row->cor_roupa; ?>">
        </label>
    </div>

	<div class="mb-3">
        <label>Estação
            <input type="text" name="estacao_roupa" class="form-control" value="<?php print $row->estacao_roupa; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Foto
            <input type="text" name="foto_roupa" class="form-control" value="<?php print $row->foto_roupa; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Editar roupa
        </button>
        <a href="?page=listar-roupas" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</form>