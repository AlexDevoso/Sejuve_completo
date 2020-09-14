<?php
session_start();
include('conexao.php');
    if(isset($_POST['deletar_noticia'])){
        $id_no = mysqli_escape_string($conexao, $_POST['id_no']);

    $sql = "DELETE from noticia_painel where fk_noticia = '$id_no'";
        
        if(mysqli_query($conexao, $sql)){
            header('Location: ../interface/editar_pagina.php');
        }
        else{
            header('Location: editar_pagina.php1');
        }

    }



























?>