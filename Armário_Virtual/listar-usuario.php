<h1>Listar Usuário</h1>

<?php

    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);
    
    $qtd = $res -> num_rows;

    if ($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<thead>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Telefone</th>";     
        print "<th>Ações</th>";           
        print "</tr>";
        print "</thead>";

        // Corpo da Tabela 
        print "<tbody>";
        
        // Itera sobre os resultados
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id_usuario . "</td>";
            print "<td>" . $row->nome_usuario . "</td>";
            print "<td>" . $row->email_usuario . "</td>"; 
            print "<td>" . $row->telefone_usuario . "</td>";
           
            // Adicionando botões de Ação com links
			print "<td>
                    <button    class='btn btn-success' onclick=\"
                        location.href='?page=editar-usuario&id_usuario={$row->id_usuario}';\">Editar</button>

                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-usuario&acao=excluir&id_usuario={$row->id_usuario}';}else{false;}\">excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
        print"<a href='?page=index.php' class='btn btn-secondary'> Voltar </a>";
    } else {
        print "<div class='alert alert-info' role='alert'>Não encontrou resultado.</div>";
        print"<a href='?page=index.php' class='btn btn-secondary'> Voltar </a>";
    }
?>