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
            header('Location: editar_pagina.php');
        }

    }

    elseif(isset($_POST['deletar_selecoes'])){
        $id_sm = mysqli_escape_string($conexao, $_POST['id_sm']);

        $sql_selecoes = "DELETE imagem4_Sm, desc4_sm, titul_sm4 FROM selecoes_municipais where id_sm = '$id_sm'";
        if(mysqli_query($conexao, $sql_selecoes)){
            header('Location: ../interface/editar_pagina.php');
        }
        else{
            header('Location: ../interface/editar_pagina.php');
        }
    }   



























?>