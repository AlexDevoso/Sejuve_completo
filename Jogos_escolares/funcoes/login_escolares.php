<?php
session_start();
include('conexao.php');
 
if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: ../index.php');
	
}
 
$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "SELECT escola_id from escola where login = '{$login}' and senha = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['login_escola'][0] = $login;
	header('Location: ../interface/home_jogos_escolares_usuario.php');
	
} else {
	$_SESSION['login'][1] = true;
	header('Location: ../index.php');

}
?>