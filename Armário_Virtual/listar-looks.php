<h1>Listar Looks</h1>

<?php
	$sql = "SELECT * FROM look";

	$res = $conn->query($sql);

	$qtd = $res ->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Ocasião</th>";
		print "<th>Clima</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while( $row =$res->fetch_object() ){
			print "<tr>";
			print "<td>".$row->id_look."</td>";
			print "<td>".$row->nome_look."</td>";
			print "<td>".$row->ocasiao_look."</td>";
			print "<td>".$row->clima_look."</td>";
			print "</td>";

            print "<td>
					<button	class='btn btn-success' onclick=\"
						location.href='?page=editar-look&id_look={$row->id_look}';\">Editar</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-look&acao=excluir&id_look={$row->id_look}';}else{false;}\">excluir</button>
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