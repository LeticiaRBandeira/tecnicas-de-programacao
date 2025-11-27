<h1>Listar roupa</h1>

<?php
	$sql = "SELECT * FROM roupa";

	$res = $conn->query($sql);

	$qtd = $res -> num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Categorias</th>";	
		print "<th>Nome</th>";		
		print "<th>tipo</th>";		
		print "<th>Tamanho</th>";
		print "<th>Cor</th>";
		print "<th>Estação</th>";
		print "<th>Foto</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while( $row =$res->fetch_object() ){
			print "<tr>";
			print "<td>".$row->id_roupa."</td>";
			print "<td>".$row->categorias_id_categorias."</td>";
			print "<td>".$row->nome_roupa."</td>";
			print "<td>".$row->tipo_roupa."</td>";
			print "<td>".$row->tamanho_roupa."</td>";
			print "<td>".$row->cor_roupa."</td>";
			print "<td>".$row->estacao_roupa."</td>";
			print "<td>".$row->foto_roupa."</td>";

            print "<td>
                        <button class='btn btn-success' onclick=\"
                            location.href='?page=editar-roupas&id_roupa={$row->id_roupa}';\">Editar</button>

                        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-roupas&acao=excluir&id_roupa={$row->id_roupa}';}else{false;}\">excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
        print"<a href='?page=index.php' class='btn btn-secondary'> Voltar </a>";
    }else{
        print "<div class='alert alert-info' role='alert'>Não encontrou resultado.</div>";
        print"<a href='?page=index.php' class='btn btn-secondary'> Voltar </a>";
    }
?>