<?php
include "conexao.php";
  		$login = $_POST['login'];
  		$senha = $_POST['senha'];
  		$query = "insert into login_time_adm(login, senha) value('$login', md5('$senha'))";
		if (mysqli_query($conexao, $query)) {
		echo "Login gerado com sucesso";
		}
		else{
		echo "Erro ao gerar login";
		mysqli_close($conexao);
		}


  	?>