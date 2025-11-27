<h1>Salvar Roupas</h1>
<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$categorias = $_POST['categorias_id_categorias'];
			$nome = $_POST['nome_roupa'];
			$tipo= $_POST['tipo_roupa'];
			$tamanho = $_POST['tamanho_roupa'];
			$cor = $_POST['cor_roupa'];
			$estacao = $_POST['estacao_roupa'];
			$foto = $_POST['foto_roupa'];

			$sql = "INSERT INTO roupa (categorias_id_categorias, nome_roupa, tipo_roupa, tamanho_roupa, cor_roupa, estacao_roupa, foto_roupa)
					VALUES ('{$categorias}', '{$nome}', '{$tipo}', '{$tamanho}', '{$cor}', '{$estacao}', '{$foto}')";
			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert('Cadastrou com sucesso!');</script>";
				print"<script>location.href='?page=listar-roupas';</script>";
			}
			else{
				print "<script>alert('Não foi possivel cadastror');</script>";
				print "<script>location.href='?page=listar-roupas';</script>";
			}
			break;

		case 'editar':
			$categorias = $_POST['categorias_roupa'];
			$nome = $_POST['nome_roupa'];
			$tipo= $_POST['tipo_roupa'];
			$tamanho = $_POST['tamanho_roupa'];
			$cor = $_POST['cor_roupa'];
			$estacao = $_POST['estacao_roupa'];
			$foto = $_POST['foto_roupa'];

			$sql = "UPDATE roupa SET categorias_id_categorias='{$categorias}', nome_roupa='{$nome}', tipo_roupa='{$tipo}', tamanho_roupa='{$tamanho}', cor_roupa='{$cor}', estacao_roupa='{$estacao}', foto_roupa='{$foto}' WHERE id_roupa=".$_REQUEST['id_roupa'];

			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert('Editou com sucesso!');</script>";
				print"<script>location.href='?page=listar-roupas';</script>";
			}
			else{
				print "<script>alert('Não foi possivel editar');</script>";
				print "<script>location.href='?page=listar-roupas';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM roupa WHERE id_roupa=".$_REQUEST['id_roupa'];

			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert(Excluiu com sucesso!');</script>";
				print"<script>location.href='?page=listar-roupas';</script>";
			}
			else{
				print "<script>alert('Não foi possivel excluir');</script>";
				print "<script>location.href='?page=listar-roupas';</script>";
			}
			break;
	}