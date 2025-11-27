<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-usuario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value="<?php echo $row->id_usuario; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_usuario" class="form-control" value="<?php echo $row->nome_usuario; ?>">
        </label>
    </div>
    
    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_usuario" class="form-control" value="<?php echo $row->email_usuario; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Telefone
            <input type="text" name="telefone_usuario" class="form-control" value="<?php echo $row->telefone_usuario; ?>">
        </label>
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">
            Editar usuario
        </button>
        <a href="?page=listar-usuario" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</form>