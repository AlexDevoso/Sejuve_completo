<?php
$conexao=mysqli_connect('localhost','root','','sejuve86_sejuve');
mysqli_set_charset($conexao, "utf8");
if(mysqli_connect_error()){
	echo "Erro na conexão",mysqli_connect_error();
}
?>