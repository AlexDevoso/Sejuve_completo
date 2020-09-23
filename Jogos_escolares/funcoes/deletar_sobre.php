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
        $sql_imagens = "SELECT imagem1_sm, imagem2_sm, imagem3_sm, imagem4_sm from selecoes_municipais
        where id_sm = '$id_sm'";
        $result_imagens = mysqli_query($conexao, $sql_imagens);
        $dados_imagens = mysqli_fetch_array($result_imagens);

        $sql_delete  = "DELETE from selecoes_municipais where id_sm = '$id_sm'";
        
        if(mysqli_query($conexao, $sql_delete)){
            if(!empty($dados_imagens['imagem1_sm'])){
                unlink('Location: ../../imagem/'.$dados_imagens['imagem1_sm']);       
            }
            if(!empty($dados_imagens['imagem2_sm'])){
                unlink('Location: ../../imagem/'.$dados_imagens['imagem2_sm']);       
            }
            if(!empty($dados_imagens['imagem3_sm'])){
                unlink('Location: ../../imagem/'.$dados_imagens['imagem3_sm']);       
            }
            if(!empty($dados_imagens['imagem4_sm'])){
                unlink('Location: ../../imagem/'.$dados_imagens['imagem4_sm']);       
            }
            header('Location: ../interface/editar_pagina.php');
            
        }
        else{
            header('Location: ../interface/editar_pagina.php');
        }
    }
?>