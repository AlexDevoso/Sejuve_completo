<?php
	session_start();
	include "conexao.php";

	if(isset($_POST['delete'])){
		

		$escola_id = mysqli_escape_string($conexao, $_POST['escola_id']);
		$sql2 = "SELECT imagem, escola_id from escola where escola_id = '$escola_id'";
		$result = mysqli_query($conexao, $sql2);
		$mostrar = mysqli_fetch_array($result);
		$sql3 = "SELECT alunoid from aluno where escola_id_fk = '$escola_id'";
		$result3 = mysqli_query($conexao, $sql3);
		$mostrar3 = mysqli_fetch_array($result3);
		$sqldell2 = "DELETE FROM comissao_tecnica_escolares where escola_id_fk = '$escola_id'";
		$sqldell3 = "DELETE FROM aluno where escola_id_fk = '$escola_id'";
		$sqldell = "DELETE FROM escola WHERE escola_id = '$escola_id'";
		if(mysqli_query($conexao, $sqldell2)){
		if(mysqli_query($conexao, $sqldell3)){
		if (mysqli_query($conexao, $sqldell)) {
			unlink("../imagens/".$mostrar['imagem']);
			unlink("../imagens/".$mostrar3['imagem_aluno']);
			$_SESSION['login'][1] = "DELETADO COM SUCESSO";
			header('Location: ../interface/escolas_jogos_escolares.php');
			
		}else{
			$_SESSION['login'][2] = "ERRO AO DELETAR";
			header('Location: ../interface/escolas_jogos_escolares.php');
			
		}
	}
	else{
		$_SESSION['login'][2] = "ERRO AO DELETAR";
			header('Location: ../interface/escolas_jogos_escolares.php');
	}
	}
	else{
		$_SESSION['login'][2] = "ERRO AO DELETAR";
			header('Location: ../interface/escolas_jogos_escolares.php');
	}
	
}
?>