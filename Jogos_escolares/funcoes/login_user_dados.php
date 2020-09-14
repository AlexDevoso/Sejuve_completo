<?php
session_start();
include "conexao.php";

	if(empty($_POST['login']) || empty($_POST['senha'])){
		header("Location: ../index.php");
		exit();
	}
	
	$login = mysqli_real_escape_string($conexao,$_POST['login']);

	$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

	$query = "SELECT equipe_evento_id, login from equipe_evento where login = '{$login}' and senha = '{$senha}'";


	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);

	if ($row == 1) {
		$_SESSION['login'] [0] = $login;
		$_SESSION['login'] [1] = 'login efetuado';
		header("Location: ../interface/menu_time.php");
		exit();
	}else{
		header("Location: ../index.php");
		exit();
	}
?>