<?php
	session_start();
	include('conexao.php');

	if(isset($_POST['editar'])){
	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	$rg = mysqli_escape_string($conexao, $_POST['rg']);
	$imagem_aluno = $_FILES['imagem'];
	$alunoid = mysqli_escape_string($conexao, $_POST['alunoid']);
	$escolaid = mysqli_escape_string($conexao, $_POST['escolaid']);
	$verifica_rg_aluno = "SELECT alunoid, rg, escola_id_fk FROM aluno where rg = '{$rg}' and escola_id_fk = '{$escola_id_fk}'";
	$result = mysqli_query($conexao, $verifica_rg_aluno);
	$row = mysqli_num_rows($result);

	if($nome == "" || $rga == ""){
		$_SESSION['login'][2] = "CAMPOS VAZIOS";
		header("Location: ../interface/.php");

	}
	//
	
//se a foto foi selecionada
elseif(!empty($imagem_aluno["name"])){
	
	// máximo em piexels
	$lagura = 2000;
	$altura = 2000;

	//máximo em bytes
	$tamanho = 50000000;
	$error = array();

	//varifica se o arquivo é uma imagem
	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem_aluno["type"])){
		  $error[1] = "Isso não é uma imagem";  
	}

	//pega as dimensões da imagem
	$dimensoes = getimagesize($imagem_aluno["tmp"]);

	//verifica se a largura da imagem é maior que a largura permitida
	if($dimensoes[0] > $lagura || $dimensoes[1] > $altura || $imagem_aluno["size"] > $tamanho){
		$error[1] = "Imagens com dimensões erradas";
		$sql = "UPDATE aluno set nome = '{$nome}', rg = '{$rg}' where alunoid = '{$alunoid}'";
	if(mysqli_query($conexao, $sql)){

		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
		header('Location: ../interface/.php');
	
	}
		else{
			$_SESSION['login'][2] = "ERRO AO ATUALIZAR";
			header('Location: ../interface/.php');
			
		}
	}

	//se não houver erro
	if(count($error) == 0){
		

		//pega a extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem_aluno["name"], $ext);

		//gera um nome único para a imagem
		$nome_imagem = md5(uniqid()) . "." . $ext[1];

		//caminho de onde ficará a imagem
		$caminho_imagem = "../imagens/" . $nome_imagem;

		//faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($imagem_aluno["tmp_name"], $caminho_imagem);

		//Insere os dados no banco
		if($row == 0){
		$sqlimg = "UPDATE aluno set nome = '{$nome}', rg = '{$rg}', modalidade_coletiva_fk = '{$modalidade_coletiva_fk}', modalidade_individual_fk = '{$modalidade_individual_fk}', imagem_aluno = '{$nome_imagem}' where alunoid = '{$alunoid}'";
		if(mysqli_query($conexao, $sqlimg)){
		header('Location: ../interface/.php');
		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";

		}
		}
		else{
			$sqlimg = "UPDATE aluno set nome = '{$nome}', modalidade_individual_fk = '{$modalidade_individual_fk}', imagem_aluno = '{$nome_imagem}' where alunoid = '{$alunoid}'";
		if(mysqli_query($conexao, $sqlimg)){
		header('Location: ../interface/.php');
		$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";

		}	
		}
	}
}

else{
	$sql = "UPDATE aluno set nome = '{$nome}', rg = '{$rg}', modalidade_individual_fk = '{$modalidade_individual_fk}', modalidade_coletiva_fk = '{$modalidade_coletiva_fk}' where alunoid = '{$alunoid}'";
	if(mysqli_query($conexao, $sql)){
	header('Location: ../interface/.php');
			$_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
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