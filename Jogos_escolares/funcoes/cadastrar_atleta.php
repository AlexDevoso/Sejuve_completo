<?php
session_start();
  include "conexao.php";
  
//verifica se o botao foi apertados
if(isset($_POST['cadastrar'])){
	//recebendo valores
	$nome_atleta = mysqli_escape_string($conexao, $_POST['nome_atleta']);
	$data_nascimento_atleta = mysqli_escape_string($conexao, $_POST['data_nascimento_atleta']);
	$rg_atleta = mysqli_escape_string($conexao, $_POST['rg_atleta']);
	$naturalidade_atleta = mysqli_escape_string($conexao, $_POST['naturalidade_atleta']);
	$imagem = $_FILES['imagem'];


	$nome_imagem1 = $_POST['nome_atleta'];
	//inserindo valores
	$verifica_rg = "SELECT atletaid, rg_atleta FROM atleta where rg_atleta = '{$rg_atleta}'";

	$result = mysqli_query($conexao, $verifica_rg);
	$row = mysqli_num_rows($result);

	//verifica quem tá logado
	$verifica = $_SESSION['login'][0];

	$seleciona = "SELECT equipeid_fk from equipe_evento where login ='{$verifica}'";
	$resus = mysqli_query($conexao, $seleciona);
	$verificaid = mysqli_fetch_row($resus);
	$str = implode($verificaid);
			





	//codições para cadastramento
	
	if($row > 0 || $nome_atleta == "" || $rg_atleta == "" ){
		$_SESSION['login'][2] = "RG CADASTRADO OU CAMPOS VAZIOS";
		header('Location: ../interface/consultar_atletas.php');
	}
	else{
	
//se a foto foi selecionada
if(!empty($imagem["name"])){
	// máximo em piexels
	$lagura = 10000;
	$altura = 10000;

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
		$sql = "INSERT INTO atleta(nome_atleta, data_nascimento_atleta, rg_atleta, naturalidade_atleta, equipeid_fk) values ('$nome_atleta', '$data_nascimento_atleta', '$rg_atleta', '$naturalidade_atleta', '$str')";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso, Imagem com dimensões erradas";
			header('Location: ../interface/consultar_atletas.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/consultar_atletas.php');
		}
	}

	//se não houver erro
	if(count($error) == 0){
		

		//pega a extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

		//gera um nome único para a imagem
		$nome_imagem = $nome_imagem1 . "." . $ext[1];

		//caminho de onde ficará a imagem
		$caminho_imagem = "../imagens/" . $nome_imagem;

		//faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

		//Insere os dados no banco
		$sqlimg = "INSERT INTO atleta(nome_atleta, data_nascimento_atleta, rg_atleta, naturalidade_atleta, equipeid_fk, imagem_rg) values ('$nome_atleta', '$data_nascimento_atleta', '$rg_atleta', '$naturalidade_atleta', '$str','$nome_imagem')";
		if(mysqli_query($conexao, $sqlimg)){
			$_SESSION['login'][1] = "CADASTRADO COM SUCESSO";
		header('Location: ../interface/consultar_atletas.php');
		}
	}
}//acaba aqui img
else{
	$sql = "INSERT INTO atleta(nome_atleta, data_nascimento_atleta, rg_atleta, naturalidade_atleta, equipeid_fk) values ('$nome_atleta', '$data_nascimento_atleta', '$rg_atleta', '$naturalidade_atleta', '$str')";
	if(mysqli_query($conexao, $sql)){
		$_SESSION['login'][1] = "Cadastrado com sucesso";
		header('Location: ../interface/consultar_atletas.php');
	}
	else{
		$_SESSION['login'][2] = "Erro ao cadastrar";
		header('Location: ../interface/consultar_atletas.php');
	}

}
	
}













	

	
	





















	






	









     
}

?>