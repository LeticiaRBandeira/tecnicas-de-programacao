<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_POST['nome_usuario'];
			$email = $_POST['email_usuario'];
			$telefone = $_POST['telefone_usuario'];

			$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
					VALUES ('{$nome}', '{$email}', '{$telefone}')";
			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert('Cadastrou com sucesso!');</script>";
				print"<script>location.href='?page=listar-usuario';</script>";
			}
			else{
				print "<script>alert('Não foi possivel cadastrar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;

		case 'editar':
			$nome = $_POST['nome_usuario'];
			$email = $_POST['email_usuario'];
			$telefone = $_POST['telefone_usuario'];

			$sql = "UPDATE usuario SET nome_usuario='{$nome}', email_usuario='{$email}', telefone_usuario='{$telefone}' WHERE id_usuario=".$_REQUEST['id_usuario'];

			$res = $conn->query($sql);

			if ($res == true){
				print"<script>alert('Editou com sucesso!');</script>";
				print"<script>location.href='?page=listar-usuario';</script>";
			}
			else{
				print "<script>alert('Não foi possivel editar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];

			$res = $conn -> query($sql);

			if ($res == true){
				print"<script>alert(Excluiu com sucesso!');</script>";
				print"<script>location.href='?page=listar-usuario';</script>";
			}
			else{
				print "<script>alert('Não foi possivel excluir');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;
	}