<?php

	session_start();
	include('conexao.php');

	if(isset($_POST['editar'])){
	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	$funcao = mysqli_escape_string($conexao, $_POST['funcao']);
	$comissao_tecnicaid = mysqli_escape_string($conexao, $_POST['comissao_tecnicaid']);

	//verifica quem tá logado
	$verifica = $_SESSION['login'];
        $seleciona = "SELECT equipeid from equipe where login = '$verifica'";
        $resus = mysqli_query($conexao, $seleciona);
        $verificaid = mysqli_fetch_row($resus);
        $str = implode($verificaid);





    //verificar a funcao e o id
	$verifica_funcao = "SELECT comissao_tecnicaid FROM comissao_tecnica where funcao = '{$funcao}' AND  equipeid_fk = '{$str}'";
	$result = mysqli_query($conexao, $verifica_funcao);
	$row = mysqli_num_rows($result);
	//codições para preenchimento do campo
	if ($nome == "" || $funcao == "") {
		$_SESSION['mensagem'] = "FUNÇÃO JÁ CADASTRADA OU CAMPOS VAZIOS";
		header('Location: consultar_comissao_tecnica.php');
	}
	else{
		if($row > 0){
			$sql ="UPDATE comissao_tecnica set nome = '$nome' where comissao_tecnicaid = '$comissao_tecnicaid'";
			if (mysqli_query($conexao, $sql)) {
			$_SESSION['mensagem'] = "NOME ATUALIZADO E FUNÇÃO JÁ CADASTRADA";
			header('Location: consultar_comissao_tecnica.php');
	}else{
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: consultar_comissao_tecnica.php');
	}				
		}
		else{
	$sql ="UPDATE comissao_tecnica set nome = '$nome', funcao = '$funcao' where comissao_tecnicaid = '$comissao_tecnicaid'";
	if (mysqli_query($conexao, $sql)) {
		$_SESSION['mensagem'] = "Atualizado com sucesso";
		header('Location: consultar_comissao_tecnica.php');
	}else{
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: consultar_comissao_tecnica.php');
	}
	}
	}
	}
?>