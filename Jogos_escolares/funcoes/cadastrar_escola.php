<?php
session_start();
include "conexao.php";
if(isset($_POST['cadastrar'])){
	
	$nome = mysqli_escape_string($conexao, $_POST['nome_escola']);
	$endereco_escola = mysqli_escape_string($conexao, $_POST['endereco_escola']);
	$nome_responsavel_escola = mysqli_escape_string($conexao, $_POST['nome_responsavel_escola']);
	$diretor_escola = mysqli_escape_string($conexao, $_POST['diretor_escola']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$telefone_escola = mysqli_escape_string($conexao, $_POST['telefone_escola']);
	$inep = mysqli_escape_string($conexao, $_POST['inep']);
	$login = mysqli_escape_string($conexao, $_POST['login_escola']);
	$senha = mysqli_escape_string($conexao, $_POST['senha_escola']);
	$imagem = $_FILES['imagem_escola'];
	$mostrar = "SELECT escola_id from escola where inep = '{$inep}'";
	$resultado = mysqli_query($conexao, $mostrar);
	$row = mysqli_num_rows($resultado);

	if($row > 0){
		$_SESSION['login'][1] = "Escola já cadastrada";
		header("Location: ../interface/escolas_jogos_escolares.php");
	}
	else{
		//se a foto foi selecionada
if(!empty($imagem["name"])){
	// máximo em piexels
	$lagura = 2000;
	$altura = 2000;

	//máximo em bytes
	$tamanho = 5000000;
	$error = array();

	//varifica se o arquivo é uma imagem
	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
		  $error[1] = "Isso não é uma imagem";  
	}

	//pega as dimensões da imagem
	$dimensoes = getimagesize($imagem["tmp_name"]);

	//verifica se a largura da imagem é maior que a largura permitida
	if($dimensoes[0] > $lagura || $dimensoes[1] > $altura || $imagem["size"] > $tamanho){
		$error[1] = "Imagens com dimensões erradas";
		$sql = "INSERT INTO escola(nome, inep, login, senha, endereco_escola, nome_responsavel_escola, diretor_escola, email, telefone_escola) values ('$nome', '$inep', '$login', '$senha','$endereco_escola','$nome_responsavel_escola','$diretor_escola','$email','$telefone_escola')";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso, Imagem com dimensões erradas";
			header('Location: ../interface/escolas_jogos_escolares.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/escolas_jogos_escolares.php');
		}
	}

	//se não houver erro
	if(count($error) == 0){
		

		//pega a extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

		//gera um nome único para a imagem
		$nome_imagem =  md5(uniqid()). "." . $ext[1];

		//caminho de onde ficará a imagem
		$caminho_imagem = "../imagens/" . $nome_imagem;

		//faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

		//Insere os dados no banco
		$sqlimg = "INSERT INTO escola(nome, inep, login, senha, imagem, endereco_escola, nome_responsavel_escola, diretor_escola, email, telefone_escola ) values ('$nome', '$inep', '$login', '$senha', '$nome_imagem', '$endereco_escola', '$nome_responsavel_escola', '$diretor_escola', '$email', '$telefone_escola')";
		if(mysqli_query($conexao, $sqlimg)){
			$_SESSION['login'][1] = "CADASTRADO COM SUCESSO";
		header('Location: ../interface/escolas_jogos_escolares.php');
		}
	}
}//acaba aqui img

else{
	$sql = "INSERT INTO escola(nome, inep, login, senha, endereco_escola, nome_responsavel_escola, diretor_escola, email, telefone_escola) values ('$nome', '$inep', '$login', '$senha','$endereco_escola','$nome_responsavel_escola','$diretor_escola','$email','$telefone_escola')";
	
	if(mysqli_query($conexao, $sql)){
		$_SESSION['login'][1] = "CADASTRADO COM SUCESSO";
		header("Location: ../interface/escolas_jogos_escolares.php");
	}
	else{
		$_SESSION['login'][2] = "ERRO AO CADASTRAR";
		header("Location: ../interface/escolas_jogos_escolares.php");	
	}

}

	}//primeiro else
}//final do primeiro if
?>	