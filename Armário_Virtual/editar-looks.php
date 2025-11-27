<h1>Editar Looks</h1>
<?php
    $sql = "SELECT * FROM look WHERE id_look=".$_REQUEST['id_look'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-looks" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_look" value="<?php echo $row->id_look; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_look" class="form-control" value="<?php print $row->nome_look; ?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>Ocasião
            <input type="text" name="ocisao_look" class="form-control" value="<?php print $row->ocasiao_look; ?>">
        </label>
    </div>
  
	<div class="mb-3">
        <label>Clima
            <input type="text" name="clima_look" class="form-control" value="<?php print $row->clima_look; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Editar look
        </button>
        <a href="?page=listar-looks" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</form>