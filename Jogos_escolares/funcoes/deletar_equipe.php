<?php
	session_start();
	include('conexao.php');

	if(isset($_POST['delete'])){
		$equipeid = mysqli_escape_string($conexao, $_POST['equipeid']);

		$sql = "SELECT logoequipe, equipeid from equipe where equipeid = '$equipeid'";
		$result = mysqli_query($conexao, $sql);
		$mostrar = mysqli_fetch_array($result);

		$sqldelete = "UPDATE equipe_evento set idevento_fk = null where equipeid_fk = '$equipeid' ";
		if(mysqli_query($conexao ,$sqldelete)){
		$sqlatleta = "DELETE from atleta where equipeid_fk = '$equipeid'";
		$sql2 = "DELETE FROM equipe_evento WHERE equipeid_fk = '$equipeid'";
		$sql = "DELETE FROM equipe WHERE equipeid = '$equipeid'";
		if(mysqli_query($conexao, $sql2) && mysqli_query($conexao, $sqlatleta)){
			if(mysqli_query($conexao, $sql)){
				unlink("../imagens/".$mostrar['logoequipe']);
			header('Location: ../interface/times_cadastrados.php');
			$_SESSION['login'][1] = "DELETADO EQUIPE COM SUCESSO";
			}
		}
		else{
			header('Location: ../interface/times_cadastrados.php');
			$_SESSION['login'][1] = "ERRO AO DELETAR EQUIPE";
		}
		}
		
	}

?>