<?php
	session_start();
	include('conexao.php');

	if(isset($_POST['editar'])){
	$nome_atleta = mysqli_escape_string($conexao, $_POST['nome_atleta']);
	$data_nascimento_atleta = mysqli_escape_string($conexao, $_POST['data_nascimento_atleta']);
	$rg_atleta = mysqli_escape_string($conexao, $_POST['rg_atleta']);
	$naturalidade_atleta = mysqli_escape_string($conexao, $_POST['naturalidade_atleta']);
	$imagem_atleta = $_FILES['imagem_rg1'];
	$atletaid = mysqli_escape_string($conexao, $_POST['atletaid']);
	$equipeid_fk = mysqli_escape_string($conexao, $_POST['equipeid_fk']);
	$verifica_rg_atleta = "SELECT atletaid, rg_atleta, equipeid_fk FROM atleta where rg_atleta = '{$rg_atleta}' and equipeid_fk = '{$equipeid_fk}'";
	$result = mysqli_query($conexao, $verifica_rg_atleta);
	$row = mysqli_num_rows($result);

	if($nome_atleta == "" || $rg_atleta == "" || $data_nascimento_atleta == "" || $naturalidade_atleta == ""){
		$_SESSION['login'][2] = "CAMPOS VAZIOS";
		header("Location: ../interface/atletas_database.php");

	}
	//
	
//se a foto foi selecionada
elseif(!empty($imagem_atleta["name"])){
	
	// máximo em piexels
	$lagura = 2000;
	$altura = 2000;

	//máximo em bytes
	$tamanho = 50000000;
	$error = array();

	//varifica se o arquivo é uma imagem
	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem_atleta["type"])){
		  $error[1] = "Isso não é uma imagem";  
	}

	//pega as dimensões da imagem
	$dimensoes = getimagesize($imagem_atleta["tmp"]);

	//verifica se a largura da imagem é maior que a largura permitida
	if($dimensoes[0] > $lagura || $dimensoes[1] > $altura || $imagem_atleta["size"] > $tamanho){
		$error[1] = "Imagens com dimensões erradas";
		$sql = "UPDATE atleta set nome_atleta = '{$nome_atleta}', data_nascimento_atleta = '{$data_nascimento_atleta}', rg_atleta = '{$rg_atleta}', naturalidade_atleta = '{$naturalidade_atleta}' where atletaid = '{$atletaid}'";
	if(mysqli_query($conexao, $sql)){
		










		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/times_cadastrados.php');
	
	}
		else{
			$_SESSION['login'][2] = "ERRO AO ATUALIZAR";
			header('Location: ../interface/atletas_database.php');
			
		}
	}

	//se não houver erro
	if(count($error) == 0){
		

		//pega a extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem_atleta["name"], $ext);

		//gera um nome único para a imagem
		$nome_imagem = md5(uniqid()) . "." . $ext[1];

		//caminho de onde ficará a imagem
		$caminho_imagem = "../imagens/" . $nome_imagem;

		//faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($imagem_atleta["tmp_name"], $caminho_imagem);

		//Insere os dados no banco
		if($row == 0){
		$sqlimg = "UPDATE atleta set nome_atleta = '{$nome_atleta}', data_nascimento_atleta = '{$data_nascimento_atleta}', rg_atleta = '{$rg_atleta}', naturalidade_atleta = '{$naturalidade_atleta}', imagem_rg = '{$nome_imagem}' where atletaid = '{$atletaid}'";
		if(mysqli_query($conexao, $sqlimg)){
		header('Location: ../interface/atletas_database.php');
		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO.";

		}
		}
		else{
			$sqlimg = "UPDATE atleta set nome_atleta = '{$nome_atleta}', data_nascimento_atleta = '{$data_nascimento_atleta}',naturalidade_atleta = '{$naturalidade_atleta}', imagem_rg = '{$nome_imagem}' where atletaid = '{$atletaid}'";
		if(mysqli_query($conexao, $sqlimg)){
		header('Location: ../interface/atletas_database.php');
		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO.";

		}	
		}
	}
}

else{
	$sql = "UPDATE atleta set nome_atleta = '{$nome_atleta}', data_nascimento_atleta = '{$data_nascimento_atleta}', naturalidade_atleta = '{$naturalidade_atleta}' where atletaid = '{$atletaid}'";
	if(mysqli_query($conexao, $sql)){
	header('Location: ../interface/atletas_database.php');
		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO.";
		}
		else{
			header('Location: ../interface/atletas_database.php');
		$_SESSION['login'][2] = "ERRO AO ATUALIZAR";	
		}
		}
}

//acaba aqui img






	//
	
?>