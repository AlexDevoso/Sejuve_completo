<?php
	session_start();
	include('conexao.php');

	if(isset($_POST['delete'])){
		

		$atletaid = mysqli_escape_string($conexao, $_POST['atletaid'] );
		$sql2 = "SELECT imagem_rg, atletaid from atleta where atletaid = '$atletaid'";
		$result = mysqli_query($conexao, $sql2);
		$mostrar = mysqli_fetch_array($result);
		$sql = "DELETE FROM atleta WHERE atletaid = '$atletaid'";
		if (mysqli_query($conexao, $sql)) {
			unlink("../imagens/".$mostrar['imagem_rg']);
			$_SESSION['login'][1] = "DELETADO COM SUCESSO";
			header('Location: ../interface/atletas_database.php');
			
		}else{
			$_SESSION['login'][2] = "ERRO AO DELETAR";
			header('Location: ../interface/atletas_database.php');
			
		}
	
}
?>