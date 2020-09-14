<?php
session_start();
include('conexao.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../interface/adm.php');
	
}
 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "SELECT usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

$query2 = "SELECT login_fun from funcionario where login_fun = '{$usuario}' and senha_fun = md5('{$senha}')";
 
$result2 = mysqli_query($conexao, $query2);
 
$row2 = mysqli_num_rows($result2);


if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../interface/area_adm.php');
	
} 
elseif($row2 == 1){
	$_SESSION['usuario'] = $usuario;
	header('Location: ../interface/area_adm_frequencia.php');
}
else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../interface/adm.php');

}