<?php
session_start();
include ('conexao.php');
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

        //pegar o nome da imagem e apagar
        $sql_mostrar_img = "SELECT imagem4_sm from selecoes_municipais where id_sm = '$id_sm'";
        $result_mostrar_img = mysqli_query($conexao, $sql_mostrar_img);
        $dados_mostrar_img = mysqli_fetch_array($result_mostrar_img);


        $sql_selecoes = "UPDATE selecoes_municipais set imagem4_sm = null, desc4_sm = null, titul_sm4 = null where id_sm = '$id_sm'";
        if(mysqli_query($conexao, $sql_selecoes)){
            unlink("../../imagem/".$dados_mostrar_img['imagem4_sm']);
            header('Location: ../interface/editar_pagina.php');
        }
        else{
            header('Location: ../interface/editar_pagina.php');
        }
    }

    elseif(isset($_POST['deletar_noticia_total'])){

        $id_no = mysqli_escape_string($conexao, $_POST['id_no']);
        
        $mostrar_imagem_nt = "SELECT imagem_no from noticia where id_no = '$id_no'";
        $result_mostrar_nt = mysqli_query($conexao, $mostrar_imagem_nt);
        $dados_mostrar_nt = mysqli_fetch_array($result_mostrar_nt);
        
        $sql_np = "DELETE from noticia_painel where fk_noticia = '$id_no'";
        $sql_nt = "DELETE from noticia where id_no = '$id_no'";
        
        if(mysqli_query($conexao, $sql_np)){

            if(mysqli_query($conexao, $sql_nt)){
                unlink("../../imagem/".$$dados_mostrar_nt['imagem_no']);
                header('Location: ../interface/editar_pagina.php');
            }
            else{
                header('Location: ../interface/editar_pagina.php');
            }

        
        }
        else{
            header('Location ../inferface/editar_pagina.php');
        }

    }


    elseif(isset($_POST['deletar_card'])){
        $id_cp = mysqli_escape_string($conexao, $_POST['id_cp']);

        $sql_imagem = "SELECT imagem_cp from card_pagina where id_cp = '$id_cp'";
        $result_imagem = mysqli_query($conexao, $sql_imagem);
        $dados_imagem = mysqli_fetch_array($result_imagem);

        $sql_delete = "DELETE from card_pagina where id_cp = '$id_cp'";

        if(mysqli_query($conexao, $sql_delete)){
           
            header("Location: ../interface/editar_pagina.php");
        }
        else{
            header("Location: ../interface/editar_pagina.php");
        }
    }



























?>