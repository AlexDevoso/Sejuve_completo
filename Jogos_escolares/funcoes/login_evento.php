<?php
   session_start();
   include "conexao.php";
   
       if(empty($_POST['loginevento']) || empty($_POST['senhaevento'])){
           header("Location: login_user.php");
           exit();
       }
        $login = mysqli_real_escape_string($conexao, $_POST['loginevento']);

        $senha = mysqli_real_escape_string($conexao, $_POST['senhaevento']);

        $query = "select evento_id, login from evento where login = '{$login}' and senha = '{$senha}'";


	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);

	if ($row == 1) {
		$_SESSION['loginevento'] [0] = $login;
		$_SESSION['loginevento'] [1] = 'login efetuado';
		header("Location: .php");
		exit();
	}else{
		header("Location: .php");
		exit();
	}

?>