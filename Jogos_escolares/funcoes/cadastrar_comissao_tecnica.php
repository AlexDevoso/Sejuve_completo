<?php
session_start();
  include "conexao.php";
  
//verifica se o botao foi apertados
if(isset($_POST['cadastrar'])){
	//recebendo valores
	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	$funcao = mysqli_escape_string($conexao, $_POST['funcao']);


	//verifica quem tá logado
			$verifica = $_SESSION['login'][0];
	        $seleciona = "SELECT equipeid_fk from equipe_evento where login = '$verifica'";
	        $resus = mysqli_query($conexao, $seleciona);
	        $verificaid = mysqli_fetch_row($resus);
	        $str = implode($verificaid);


	//verificar a funcao e o id
		$verifica_funcao = "SELECT comissao_tecnicaid FROM comissao_tecnica where funcao = '{$funcao}' AND  equipeid_fk = '{$str}'";
		$result = mysqli_query($conexao, $verifica_funcao);
		$row = mysqli_num_rows($result);



	//condição para saber de tem algum campo vazio ou funcao repitida
	if ($nome == "" || $funcao == "" || $row > 0) {
		$_SESSION['login'][2] = "FUNÇÃO JÁ CADASTRADA OU CAMPOS VAZIOS";
		
		header('Location: ../interface/consultar_comissao_tecnica.php');

		

	}
	
	else{

	$sql = "INSERT INTO comissao_tecnica(nome, funcao, equipeid_fk) VALUES ('$nome', '$funcao', '$str')";
	
	if(mysqli_query($conexao, $sql)){
		header('Location: ../interface/consultar_comissao_tecnica.php');
		$_SESSION['login'][1] = "CADASTRADO COM SUCESSO";
	}
	else{
		header('Location: ../interface/consultar_comissao_tecnica.php');
	}
	}
}

?>