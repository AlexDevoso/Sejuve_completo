<?php

session_start();
include "../funcoes/conexao.php";

if(isset($_POST['editar'])){
	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	$inep = mysqli_escape_string($conexao, $_POST['inep']);
	$diretor_escola = mysqli_escape_string($conexao, $_POST['diretor_escola']);
	$nome_responsavel_escola = mysqli_escape_string($conexao, $_POST['nome_responsavel_escola']);
	$endereco_escola = mysqli_escape_string($conexao, $_POST['endereco_escola']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$telefone_escola = mysqli_escape_string($conexao, $_POST['telefone_escola']);
	$login = mysqli_escape_string($conexao, $_POST['login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);
	$imagem = $_FILES['imagem'];
	$escola_id = mysqli_escape_string($conexao, $_POST['escola_id']);
	
	if(!empty($imagem["name"])){
	
	// máximo em piexels
	$lagura = 2000;
	$altura = 2000;

	//máximo em bytes
	$tamanho = 50000000;
	$error = array();

	//varifica se o arquivo é uma imagem
	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
		  $error[1] = "Isso não é uma imagem";  
	}

	//pega as dimensões da imagem
	$dimensoes = getimagesize($imagem["tmp"]);

	//verifica se a largura da imagem é maior que a largura permitida
	if($dimensoes[0] > $lagura || $dimensoes[1] > $altura || $imagem["size"] > $tamanho){
		$error[1] = "Imagens com dimensões erradas";
		$sql = "UPDATE escola set nome = '{$nome}', inep = '{$inep}', diretor_escola = '{$diretor_escola}', nome_responsavel_escola = '{$nome_responsavel_escola}', endereco_escola = '{$endereco_escola}', email = '{$email}', telefone_escola = '{$telefone_escola}', login = '{$login}', senha = '{$senha}' where escola_id = '{$escola_id}'";
	if(mysqli_query($conexao, $sql)){
		










		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/escolas_jogos_escolares.php');
	
	}
		else{
			$_SESSION['login'][2] = "ERRO AO ATUALIZAR";
			header('Location: ../interface/escolas_jogos_escolares.php');
			
		}
	}

	//se não houver erro
	if(count($error) == 0){
		

		//pega a extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

		//gera um nome único para a imagem
		$nome_imagem = md5(uniqid()) . "." . $ext[1];

		//caminho de onde ficará a imagem
		$caminho_imagem = "../imagens/" . $nome_imagem;

		//faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

		$sql = "UPDATE escola set nome = '{$nome}', inep = '{$inep}', diretor_escola = '{$diretor_escola}', nome_responsavel_escola = '{$nome_responsavel_escola}', endereco_escola = '{$endereco_escola}', email = '{$email}', telefone_escola = '{$telefone_escola}', login = '{$login}', senha = '{$senha}',  imagem = '{$nome_imagem}' where escola_id = '{$escola_id}'";
	if(mysqli_query($conexao, $sql)){



		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/escolas_jogos_escolares.php');
	
	}
		else{
			$_SESSION['login'][2] = "ERRO AO ATUALIZAR";
			header('Location: ../interface/escolas_jogos_escolares.php');
			
		}
		
	}
}

else{
		$sql = "UPDATE escola set nome = '{$nome}', inep = '{$inep}', diretor_escola = '{$diretor_escola}', nome_responsavel_escola = '{$nome_responsavel_escola}', endereco_escola = '{$endereco_escola}', email = '{$email}', telefone_escola = '{$telefone_escola}', login = '{$login}', senha = '{$senha}' where escola_id = '{$escola_id}'";
	if(mysqli_query($conexao, $sql)){
		

		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/escolas_jogos_escolares.php');
	
	}
		else{
			$_SESSION['login'][2] = "ERRO AO ATUALIZAR";
			header('Location: ../interface/escolas_jogos_escolares.php');
			
		}
}

}


?>