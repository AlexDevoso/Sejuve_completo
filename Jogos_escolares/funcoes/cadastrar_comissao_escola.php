<?php
session_start();
 include "conexao.php";
  //verifica se o botao foi apertados
if(isset($_POST['cadastrar'])){
	//recebendo valores
	$nome = mysqli_escape_string($conexao, $_POST['nome_tecnico']);
	$cref = mysqli_escape_string($conexao, $_POST['cref_tecnico']);
	$rg = mysqli_escape_string($conexao, $_POST['rg_tecnico']);
    $str = mysqli_escape_string($conexao, $_POST['idescola']);
    $modalidade_coletiva = mysqli_escape_string($conexao, $_POST['modalidade_coletiva']);
    $procurar = "SELECT id_tecnico from comissao_tecnica_escolares where modalidade_coletivaid_fk = '$modalidade_coletiva' and escola_id_fk = '$str'";
    $result = mysqli_query($conexao, $procurar);
    $row = mysqli_num_rows($result);
    if($nome == "" || $cref == "" || $rg == "" || $row > 0){
        $_SESSION['login'][2] = "ALGUM CAMPO VAZIO";
	    header('Location: ../interface/cadastrar_comissao_jogos.php');
    }
    else{
		$sql = "INSERT INTO comissao_tecnica_escolares(nome_tecnico, rg_tecnico, cref_tecnico, escola_id_fk, modalidade_coletivaid_fk) values ('$nome', '$rg', '$cref', '$str', '$modalidade_coletiva')";
        if(mysqli_query($conexao, $sql)){
            $_SESSION['login'][1] = "Cadastrado com sucesso";
            header('Location: ../interface/cadastrar_comissao_jogos.php');
        }
        else{
            $_SESSION['login'][2] = "Erro ao cadastrar";
            header('Location: ../interface/cadastrar_comissao_jogos.php');
        }
    }
 }

?>