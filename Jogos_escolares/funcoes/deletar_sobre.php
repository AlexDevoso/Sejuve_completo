<?php
    session_start();
    include('conexao.php');
    if(isset($_POST['deletar_funcionario'])){
        $id_fun = mysqli_escape_string($conexao, $_POST['id_fun']);
        $mostrar_img = "SELECT imagem_fun from funcionario where id_fun = '$id_fun'";
        $result_img = mysqli_query($mostrar_img);
        $dados_img = mysqli_fetch_array($result_img);
        $sql = "DELETE from funcionario where id_fun = '$id_fun'";
        if(mysqli_query($conexao, $sql)){
            unlink("../../imagem/".$dados_img['imagem_fun']);
            header('Location: ../interface/editar_pagina.php');
        }
        else{
            header('Location: ../interface/editar_pagina.php');
        }
    }
    elseif(isset($_POST['deletar_sele'])){
        $id_sm = mysqli_escape_string($conexao, $_POST['id_sm']);
        
    }
?>