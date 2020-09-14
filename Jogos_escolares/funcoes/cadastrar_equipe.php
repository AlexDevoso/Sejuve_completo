<?php
session_start();
include "conexao.php";
  
//verifica se o botao foi apertados
if(isset($_POST['cadastrar'])){
	
	//recebendo valores
	$nomeequipe = mysqli_escape_string($conexao, $_POST['nomeequipe']);
	$nomeresponsavel = mysqli_escape_string($conexao, $_POST['nomeresponsavel']);
	$rgresponsavel = mysqli_escape_string($conexao, $_POST['rgresponsavel']);
	$naturalidade = mysqli_escape_string($conexao, $_POST['naturalidade']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$telefone = mysqli_escape_string($conexao, $_POST['telefone']);
	$endereco = mysqli_escape_string($conexao, $_POST['endereco']);
	$login = mysqli_escape_string($conexao, $_POST['login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);
	$idevento = mysqli_escape_string($conexao, $_POST['idevento']);
	if(isset($idevento)){
		$_SESSION['id'] = $idevento;
		$ide = $_SESSION['id'];
	}
	else{
		
		$ide = $_SESSION['id'];		
	}
	//inserindo valores
	$logoequipe = $_FILES['logoequipe'];


	//verifica o rg
	$verifica_rg = "SELECT * FROM equipe where rgresponsavel = '{$rgresponsavel}'";
  	$result = mysqli_query($conexao, $verifica_rg);
  	$row = mysqli_num_rows($result);
  	//verifica se a senha e o login já existe
  	$verifica_login_senha = "SELECT * FROM equipe_evento where senha = '{$senha}' And login = '{$login}'";
  	$result2 = mysqli_query($conexao, $verifica_login_senha);
  	$row2 = mysqli_num_rows($result2);

  	if($row > 0 || $rgresponsavel == "" || $nomeequipe == "" || $nomeresponsavel == "" || $login == "" || $senha == ""){
  		$_SESSION['login'][1] = "RG JÁ REGISTRADOS OU CAMPO VAZIO";
  		header('Location:../interface/times_cadastrados.php');
  	}
  		else{
  			if($row2 > 0){
  		
  		header('Location: ../interface/times_cadastrados.php');
  		$_SESSION['login'][1] = "SENHA E LOGIN JÁ REGISTRADOS OU CAMPO VAZIO";
  	}
  		else {

  //se a foto foi selecionada
if(!empty($logoequipe["name"])){
	// máximo em piexels
	$lagura = 2000;
	$altura = 2000;

	//máximo em bytes
	$tamanho = 50000000;
	$error = array();

	//varifica se o arquivo é uma imagem
	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $logoequipe["type"])){
		  $error[1] = "Isso não é uma imagem";  
	}

	//pega as dimensões da imagem
	$dimensoes = getimagesize($logoequipe["tmp_name"]);

	//verifica se a largura da imagem é maior que a largura permitida
	if($dimensoes[0] > $lagura || $dimensoes[1] > $altura || $logoequipe["size"] > $tamanho){
		$error[1] = "Imagens com dimensões erradas";
		$sql = "INSERT INTO equipe (nomeequipe, nomeresponsavel, rgresponsavel, naturalidade, email, telefone, endereco) VALUES ('$nomeequipe', '$nomeresponsavel', '$rgresponsavel', '$naturalidade', '$email','$telefone', '$endereco')";
	if(mysqli_query($conexao, $sql)){

		$mostrarid = "SELECT * from equipe where nomeequipe = '{$nomeequipe}'";
		$resultadoid = mysqli_query($conexao, $mostrarid);
		$dadoid = mysqli_fetch_array($resultadoid);
		$idequipe = $dadoid['equipeid'];
		$sql2 ="INSERT INTO equipe_evento (equipeid_fk, login, senha, idevento_fk) values ('$idequipe','$login','$senha','$ide')";










		if(mysqli_query($conexao, $sql2)){
			
		header('Location: ../interface/times_cadastrados.php');
		$_SESSION['login'][1] = "CADASTRADO SEM IMAGEM";
	}
	}
		else{
			
			header('Location: ../interface/times_cadastrados.php');
			$_SESSION['login'][2] = "Erro ao cadastrar";
			return $idevento;
		}
	}

	//se não houver erro
	if(count($error) == 0){
		

		//pega a extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $logoequipe["name"], $ext);

		//gera um nome único para a imagem
		$nome_imagem = $nomeequipe . "." . $ext[1];

		//caminho de onde ficará a imagem
		$caminho_imagem = "../imagens/" . $nome_imagem;

		//faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($logoequipe["tmp_name"], $caminho_imagem);

		//Insere os dados no banco
		$sqlimg = "INSERT INTO equipe (nomeequipe, nomeresponsavel, rgresponsavel, naturalidade, email, telefone, endereco, logoequipe) VALUES ('$nomeequipe', '$nomeresponsavel', '$rgresponsavel', '$naturalidade', '$email','$telefone', '$endereco', '$nome_imagem')";
		if(mysqli_query($conexao, $sqlimg)){
		$mostrarid = "SELECT equipeid from equipe where nomeequipe = '{$nomeequipe}'";
		//passando login e senha para o banco
		$resultadoid = mysqli_query($conexao, $mostrarid);
		$dadoid = mysqli_fetch_array($resultadoid);
		$idequipe = $dadoid['equipeid'];

		

		$sql2 ="INSERT INTO equipe_evento (equipeid_fk, login, senha, idevento_fk) values ('$idequipe','$login','$senha', '$ide')";










		if(mysqli_query($conexao, $sql2)){
			
		header('Location: ../interface/times_cadastrados.php');
		$_SESSION['login'][1] = "CADASTRADO COM SUCESSO";
	}
		}
	}
}//acaba aqui img
	else{
		//isereindo valores sem imagem		
	$sql = "INSERT INTO equipe (nomeequipe, nomeresponsavel, rgresponsavel, naturalidade, email, telefone, endereco) VALUES ('$nomeequipe', '$nomeresponsavel', '$rgresponsavel', '$naturalidade', '$email','$telefone', '$endereco')";
	if(mysqli_query($conexao, $sql)){

		$mostrarid = "SELECT equipeid from equipe where nomeequipe = '{$nomeequipe}'";
		$resultadoid = mysqli_query($conexao, $mostrarid);
		$dadoid = mysqli_fetch_array($resultadoid);
		$idequipe = $dadoid['equipeid'];
		$sql2 ="INSERT INTO equipe_evento (equipeid_fk, login, senha, idevento_fk) values ('$idequipe','$login','$senha','$ide')";










		if(mysqli_query($conexao, $sql2)){
			
		header('Location: ../interface/times_cadastrados.php');
		$_SESSION['login'][1] = "CADASTRADO COM SUCESSO";
		
		
	}
	}
	else{

		header('Location: ../interface/times_cadastrados.php');
		$_SESSION['login'][2] = "ERRO AO CADASTRAR";
	}
	}
}
}
}




?>