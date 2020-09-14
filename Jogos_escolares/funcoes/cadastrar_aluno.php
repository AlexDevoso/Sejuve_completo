<?php
session_start();
 include "conexao.php";
  //verifica se o botao foi apertados
if(isset($_POST['cadastrar'])){
	//recebendo valores
	 
	
	$nome = mysqli_escape_string($conexao, $_POST['nome_aluno']);
	$data = mysqli_escape_string($conexao, $_POST['data']);
	$str = mysqli_escape_string($conexao, $_POST['idescola']);
	$rg = mysqli_escape_string($conexao, $_POST['rg']);
	$imagem = $_FILES['imagem_escola'];

	list($ano, $mes, $dia) = explode('-', $data);
	$anoatual = date('Y');
	$anoaluno = $ano;
	$idade = $anoatual - $ano;
	
	
	$verifica_rg = "SELECT rg FROM aluno where rg = '{$rg}' and modalidade_coletivaid_fk != null and modalidade_individualid_fk != null";

	$result = mysqli_query($conexao, $verifica_rg);
	$row = mysqli_num_rows($result);
	//se ele for cadastrado apenas numa modalidade coletiva

	$verifica_rg2 = "SELECT alunoid FROM aluno where rg = '{$rg}' and modalidade_individualid_fk is null";

	$result2 = mysqli_query($conexao, $verifica_rg2);
	$row2 = mysqli_num_rows($result2);

	$verifica_rg3 = "SELECT alunoid FROM aluno where rg = '{$rg}' and modalidade_coletivaid_fk is null";

	$result3 = mysqli_query($conexao, $verifica_rg3);
	$row3 = mysqli_num_rows($result3);

	
		





	//codições para cadastramento
if($row > 0 || $nome == "" || $rg == ""){
		$_SESSION['login'][2] = "ALUNO CADASTRADO EM DUAS MODALIDADES";
		header('Location: ../interface/cadastrar_aluno_jogos.php');
	}	
	
elseif($_SESSION['modalidade'][0] == "12a14" and $idade < 12 || $idade > 14){
		$_SESSION['login'][2] = "Idade maior ou menor que o requesito";
		header('Location: ../interface/cadastrar_aluno_jogos.php');
}
elseif($_SESSION['modalidade'][0] == '15a17' and $idade < 15 || $idade > 17){
	$_SESSION['login'][2] = "Idade maior ou menor que o requesito";
	header('Location: ../interface/cadastrar_aluno_jogos.php');
}


	elseif($row2 > 0){
		//Insere os dados no banco
		if($_SESSION['modalidade'][4] == ""){
		$modalidade_individualid_fk = $_SESSION['modalidade'][5];
		$sql = "UPDATE aluno set modalidade_individualid_fk = '{$modalidade_individualid_fk}' where rg = '{$rg}'";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
	}
	else{
			$_SESSION['login'][2] = "ALUNO JÁ CADASTRADO";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
	}
	elseif($row3 > 0){
		//Insere os dados no banco
		if($_SESSION['modalidade'][5] == ""){
		$modalidade_coletivaid_fk = $_SESSION['modalidade'][4];
		$sql = "UPDATE aluno set modalidade_coletivaid_fk = '{$modalidade_coletivaid_fk}' where rg = '{$rg}'";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
	}
	else{
			$_SESSION['login'][2] = "ALUNO JÁ CADASTRADO";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
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
		  header('Location: ../interface/cadastrar_aluno_jogos.php');
	}

	//pega as dimensões da imagem
	$dimensoes = getimagesize($imagem["tmp_name"]);

	//verifica se a largura da imagem é maior que a largura permitida
	if($dimensoes[0] > $lagura || $dimensoes[1] > $altura || $imagem["size"] > $tamanho){
		$error[1] = "Imagens com dimensões erradas";
		$sql = "INSERT INTO aluno(nome, rg, modalidade_individualid_fk, modalidade_coletivaid_fk, escola_id_fk, data_nascimento_aluno) values ('$nome', '$rg', '$modalidade_individualid_fk', '$modalidade_coletivaid_fk', '$str', '$data')";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso, Imagem com dimensões erradas";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
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

		//Insere os dados no banco
		if($_SESSION['modalidade'][5] == ""){
		$modalidade_coletivaid_fk = $_SESSION['modalidade'][4];
		$sql = "INSERT INTO aluno(nome, rg, modalidade_individualid_fk, modalidade_coletivaid_fk, escola_id_fk, data_nascimento_aluno, imagem_aluno) values ('$nome', '$rg', null, '$modalidade_coletivaid_fk', '$str', '$data', '$nome_imagem')";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
	}
	else{
		$modalidade_coletivaid_fk = null;
		$mid_fk = $_SESSION['modalidade'][5];
		$sql = "INSERT INTO aluno(nome, rg, modalidade_individualid_fk, modalidade_coletivaid_fk, escola_id_fk, data_nascimento_aluno) values ('$nome', '$rg', '$mid_fk', null, '$str', '$data')";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		}
	}
}//acaba aqui img
else{

	if($_SESSION['modalidade'][5] == ""){
		$modalidade_coletivaid_fk = $_SESSION['modalidade'][4];
		$sql = "INSERT INTO aluno(nome, rg, modalidade_individualid_fk, modalidade_coletivaid_fk, escola_id_fk, data_nascimento_aluno) values ('$nome', '$rg', null, '$modalidade_coletivaid_fk', '$str', '$data')";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
	}
	else{
		$modalidade_coletivaid_fk = null;
		$mid_fk = $_SESSION['modalidade'][5];
		$sql = "INSERT INTO aluno(nome, rg, modalidade_individualid_fk, modalidade_coletivaid_fk, escola_id_fk, data_nascimento_aluno) values ('$nome', '$rg', '$mid_fk', null, '$str', '$data')";
		if(mysqli_query($conexao, $sql)){
			$_SESSION['login'][1] = "Cadastrado com sucesso";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		else{
			$_SESSION['login'][2] = "Erro ao cadastrar";
			header('Location: ../interface/cadastrar_aluno_jogos.php');
		}
		}
	
	

}
	
}
 }

?>