<?php
	session_start();
	include('conexao.php');

	if(isset($_POST['delete'])){
		
		$comissao_tecnicaid = mysqli_escape_string($conexao, $_POST['comissao_tecnicaid'] );
		$sql = "DELETE FROM comissao_tecnica WHERE comissao_tecnicaid = '$comissao_tecnicaid'";
		if (mysqli_query($conexao, $sql)) {
			$_SESSION['login'][1] = "DELETADO COM SUCESSO"; 
			header('Location: ../interface/consultar_comissao_tecnica.php');
		}else{
			$_SESSION['login'][2] = "ERRO AO DELETAR";
			header('Location: ../interface/consultar_comissao_tecnica.php');
		}
	
}
?>