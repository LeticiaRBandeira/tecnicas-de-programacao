<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST['nome_categorias'];
			$descricao = $_POST['descricao_categorias'];

			$sql = "INSERT INTO categorias (nome_categorias, descricao_categorias)
					VALUES ('{$nome}', '{$descricao}')";
			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert('Cadastrou com sucesso!');</script>";
				print"<script>location.href='?page=listar-categorias';</script>";
			}
			else{
				print "<script>alert('Não foi possivel cadastrar');</script>";
				print "<script>location.href='?page=listar-categorias';</script>";
			}
			break;

		case 'editar':
			$nome = $_POST['nome_categorias'];
			$descricao = $_POST['descricao_categorias'];

			$sql = "UPDATE categorias SET nome_categorias='{$nome}', descricao_categorias='{$descricao}' WHERE id_categorias=".$_REQUEST['id_categorias'];

			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert('Editou com sucesso!');</script>";
				print"<script>location.href='?page=listar-categorias';</script>";
			}
			else{
				print "<script>alert('Não foi possivel editar');</script>";
				print "<script>location.href='?page=listar-categorias';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM categorias WHERE id_categorias=".$_REQUEST['id_categorias'];

			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert(Excluiu com sucesso!');</script>";
				print"<script>location.href='?page=listar-categorias';</script>";
			}
			else{
				print "<script>alert('Não foi possivel excluir');</script>";
				print "<script>location.href='?page=listar-categorias';</script>";
			}
			break;
	}