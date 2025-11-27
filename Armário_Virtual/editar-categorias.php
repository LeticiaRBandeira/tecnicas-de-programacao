<h1>Editar Categorias</h1>
<?php
    $sql = "SELECT * FROM categorias WHERE id_categorias=".$_REQUEST['id_categorias'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-categorias" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_categorias" value="<?php echo $row->id_categorias; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_categorias" class="form-control" value="<?php print $row->nome_categorias; ?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>descricao
            <input type="text" name="descricao_categorias" class="form-control" value="<?php print $row->descricao_categorias; ?>">
        </label>
    </div>
  
    <div>
        <button type="submit" class="btn btn-primary">
            Editar categorias
        </button>
        <a href="?page=listar-categorias" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</form>