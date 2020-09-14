<?php
$conexao=mysqli_connect('localhost:3306','sejuve86_se','hiE!nsrui[Z_','sejuve86_sejuve');
mysqli_set_charset($conexao, "utf8");
if(mysqli_connect_error()){
	echo "Erro na conexão",mysqli_connect_error();
}
?>