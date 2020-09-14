a<?php

	session_start();
	include('conexao.php');

	if(isset($_POST['editar'])){

	
	$nomeequipe = mysqli_escape_string($conexao, $_POST['nomeequipe']);
	$nomeresponsavel = mysqli_escape_string($conexao, $_POST['nomeresponsavel']);
	$rgresponsavel = mysqli_escape_string($conexao, $_POST['rgresponsavel']);
	$naturalidade = mysqli_escape_string($conexao, $_POST['naturalidade']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$telefone = mysqli_escape_string($conexao, $_POST['telefone']);
	$endereco = mysqli_escape_string($conexao, $_POST['endereco']);
	$login = mysqli_escape_string($conexao, $_POST['login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);	
	$equipeid = mysqli_escape_string($conexao, $_POST['equipeid']);
	
	$logoequipe2 = $_FILES['logoequipe'];
  	//verifica se já existe login e senha
	//condições para editar
		if ($nomeequipe == "" || $nomeresponsavel == "" || $rgresponsavel == "" || $login == "" || $senha == "") {
				$_SESSION['login'][2] = "CAMPOS VAZIOS";
				header('Location: ../interface/times_cadastrados.php');			
		}
		else{
//se a foto foi selecionada
if(!empty($logoequipe2["name"])){
	
	// máximo em piexels
	$lagura = 2000;
	$altura = 2000;

	//máximo em bytes
	$tamanho = 50000000;
	$error = array();

	//varifica se o arquivo é uma imagem
	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $logoequipe2["type"])){
		  $error[1] = "Isso não é uma imagem";  
	}

	//pega as dimensões da imagem
	$dimensoes = getimagesize($logoequipe2["tmp"]);

	//verifica se a largura da imagem é maior que a largura permitida
	if($dimensoes[0] > $lagura || $dimensoes[1] > $altura || $logoequipe2["size"] > $tamanho){
		$error[1] = "Imagens com dimensões erradas";
		$sql = "UPDATE equipe set nomeequipe = '{$nomeequipe}', nomeresponsavel = '{$nomeresponsavel}', rgresponsavel = '{$rgresponsavel}', naturalidade = '{$naturalidade}', email = '{$email}', telefone = '{$telefone}', endereco = '{$endereco}' where equipeid = '{$equipeid}'";
	if(mysqli_query($conexao, $sql)){
		$sql2 ="UPDATE equipe_evento set login = '{$login}', senha = '{$senha}' where equipeid_fk = '{$equipeid}'";










		if(mysqli_query($conexao, $sql2)){
			$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/times_cadastrados.php');
	}
	}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/times_cadastrados.php');
			
		}
	}

	//se não houver erro
	if(count($error) == 0){
		

		//pega a extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $logoequipe2["name"], $ext);

		//gera um nome único para a imagem
		$nome_imagem = md5(uniqid()) . "." . $ext[1];

		//caminho de onde ficará a imagem
		$caminho_imagem = "../imagens/" . $nome_imagem;

		//faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($logoequipe2["tmp_name"], $caminho_imagem);

		//Insere os dados no banco
		$sqlimg = "UPDATE equipe set nomeresponsavel = '{$nomeresponsavel}', rgresponsavel = '{$rgresponsavel}', naturalidade = '{$naturalidade}', email = '{$email}', telefone = '{$telefone}', endereco = '{$endereco}', logoequipe = '{$nome_imagem}' where equipeid = '{$equipeid}'";
		if(mysqli_query($conexao, $sqlimg)){

		$sql2 = "UPDATE equipe_evento set login = '{$login}', senha = '{$senha}' where equipeid_fk = '$equipeid'";










		if (mysqli_query($conexao, $sql2)){
			$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/times_cadastrados.php');

	}
		}
	}
}//acaba aqui img
else{
		//Insere os dados no banco
		$sqlimg = "UPDATE equipe set nomeequipe = '{$nomeequipe}', nomeresponsavel = '{$nomeresponsavel}', rgresponsavel = '{$rgresponsavel}', naturalidade = '{$naturalidade}', email = '{$email}', telefone = '{$telefone}', endereco = '$endereco' where equipeid = '$equipeid'";
		if(mysqli_query($conexao, $sqlimg)){

		$sql2 = "UPDATE equipe_evento set login = '{$login}', senha = '{$senha}'where equipeid_fk = '$equipeid'";










		if (mysqli_query($conexao, $sql2)){
			$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/times_cadastrados.php');

	}
		}
}
		}

		
}

?>