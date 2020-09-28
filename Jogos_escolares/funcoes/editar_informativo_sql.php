<?php
session_start();
include ('conexao.php');
if(isset($_POST['editar_informativo'])){
    $titulo_no = mysqli_escape_string($conexao, $_POST['titulo_no']);
    $descricao_no = mysqli_escape_string($conexao, $_POST['descricao_no']);
    $link_no = mysqli_escape_string($conexao, $_POST['link_no']);
    $imagem_no = $_FILES['imagem_no'];
    $id_no = mysqli_escape_string($conexao, $_POST['id_no']);    

    $sql_imagem_no = "SELECT imagem_no FROM noticia where id_no = '$id_no'";
    $result_imagem_no = mysqli_query($conexao, $sql_imagem_no);
    $dados_imagem_no = mysqli_fetch_array($result_imagem_no);

    //se a logo foi selecionada
    if (!empty($imagem_no["name"])) {
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem_no['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            $_SESSION['login'][2] = $error[1];
            header('Location: ../interface/editar_pagina.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem_no["tmp_name"]);

        //verifica se a largura da imagem é maior que largura permitida
        if ($dimensões[0] > $lagura) {
            $error[2] = "A largura da imagem não deve ultrapassar " . $lagura . "pixels";
            $_SESSION['login'][2] = $error[2];
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica se a altura da imagem é maior que a altura permitida
        if ($dimensões[0] > $altura) {
            $error[3] = "A altura da imagem não deve ultrapassar " . $altura . " pixels";
            $_SESSION['login'][2] = $error[3];
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica o tamanho em bytes da imagem
        if ($imagem_no["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            $_SESSION['login'][2] = $error[4];
            header('Location: ../interface/editar_pagina.php');
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem_no["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../../imagem/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem_no["tmp_name"], $caminho_imagem);

            //inserindo dados no banco1
            $sql = "UPDATE noticia set titulo_no = '$titulo_no', imagem_no = '$nome_imagem', descricao_no = '$descricao_no', link_no = '$link_no' where id_no = '$id_no'";
            if (mysqli_query($conexao, $sql)) {
                unlink("../../imagem/".$dados_imagem_no['imagem_no']);
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][2] = " ERRO AO ATUALIZAR";
            }
        }
    }
    else{
        $sql = "UPDATE noticia set titulo_no = '$titulo_no', descricao_no = '$descricao_no', link_no = '$link_no' where id_no = '$id_no'";
        if (mysqli_query($conexao, $sql)) {
            header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
        }
        else{
             header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][2] = " ERRO AO ATUALIZAR";
        }
    } 
}
//Final da função editar noticia 





elseif(isset($_POST['editar_informativo_sele'])){
    $desc4_sm = mysqli_escape_string($conexao, $_POST['desc4_sm']);
    $imagem4_sm = $_FILES['imagem4_sm'];
    $id_sm = mysqli_escape_string($conexao, $_POST['id_sm']);    

    $sql_imagem_sm = "SELECT imagem4_sm FROM selecoes_municipais where id_sm = '$id_sm'";
    $result_imagem_sm = mysqli_query($conexao, $sql_imagem_sm);
    $dados_imagem_sm = mysqli_fetch_array($result_imagem_sm);

    //se a logo foi selecionada
    if (!empty($imagem4_sm["name"])) {
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem4_sm['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            $_SESSION['login'][2] = $error[1];
            
            header('Location: ../interface/editar_pagina.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem4_sm["tmp_name"]);

        //verifica se a largura da imagem é maior que largura permitida
        if ($dimensões[0] > $lagura) {
            $error[2] = "A largura da imagem não deve ultrapassar " . $lagura . "pixels";
            $_SESSION['login'][2] = $error[2];
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica se a altura da imagem é maior que a altura permitida
        if ($dimensões[0] > $altura) {
            $error[3] = "A altura da imagem não deve ultrapassar " . $altura . " pixels";
            $_SESSION['login'][2] = $error[3];
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica o tamanho em bytes da imagem
        if ($imagem4_sm["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            $_SESSION['login'][2] = $error[4];
            header('Location: ../interface/editar_pagina.php');
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem4_sm["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../../imagem/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem4_sm["tmp_name"], $caminho_imagem);

            //inserindo dados no banco1
            $sql_sele = "UPDATE selecoes_municipais set desc4_sm = '$desc4_sm', imagem4_sm = '$nome_imagem' where id_sm = '$id_sm'";
            if (mysqli_query($conexao, $sql_sele)) {
                unlink("../../imagem/".$dados_imagem_sm['imagem4_sm']);
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][2] = "ERRO AO ATUALIZAR";
            }
        }
    }
    else{
        $sql_sele = "UPDATE selecoes_municipais set desc4_sm = '$desc4_sm' where id_sm = '$id_sm'";
        if (mysqli_query($conexao, $sql_sele)) {
            header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
        }
        else{
             header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][2] = " ERRO AO ATUALIZAR";
        }
    } 
}//final função editar seleção

elseif(isset($_POST['editar_informativo_cp'])){

    $titulo_painel_cp = mysqli_escape_string($conexao, $_POST['titulo_painel_cp']);
    $titulo_cp = mysqli_escape_string($conexao, $_POST['titulo_cp']);
    $desc_cp = mysqli_escape_string($conexao, $_POST['desc_cp']);
    $link_cp = mysqli_escape_string($conexao, $_POST['link_cp']);
    $imagem_cp = $_FILES['imagem_cp'];
    $id_cp = mysqli_escape_string($conexao, $_POST['id_cp']);    

    $sql_imagem_cp = "SELECT imagem_cp FROM card_pagina where id_cp = '$id_cp'";
    $result_imagem_cp = mysqli_query($conexao, $sql_imagem_cp);
    $dados_imagem_cp = mysqli_fetch_array($result_imagem_cp);

    //se a logo foi selecionada
    if (!empty($imagem_cp["name"])) {
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem_cp['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            $_SESSION['login'][2] = $error[1];
            header('Location: ../interface/editar_pagina.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem_cp["tmp_name"]);

        //verifica se a largura da imagem é maior que largura permitida
        if ($dimensões[0] > $lagura) {
            $error[2] = "A largura da imagem não deve ultrapassar " . $lagura . "pixels";
            $_SESSION['login'][2] = $error[2];
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica se a altura da imagem é maior que a altura permitida
        if ($dimensões[0] > $altura) {
            $error[3] = "A altura da imagem não deve ultrapassar " . $altura . " pixels";
            $_SESSION['login'][2] = $error[3];
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica o tamanho em bytes da imagem
        if ($imagem_cp["size"] > $tamanho) {
            
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            $_SESSION['login'][2] = $error[4];
            header('Location: ../interface/editar_pagina.php');
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem_cp["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../../imagem/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem_cp["tmp_name"], $caminho_imagem);

            //inserindo dados no banco1
            $sql_cp = "UPDATE card_pagina set titulo_painel_cp = '$titulo_painel_cp', titulo_cp = '$titulo_cp', desc_cp = '$desc_cp',
            link_cp = '$link_cp', imagem_cp = '$nome_imagem' where id_cp = '$id_cp'";
            if (mysqli_query($conexao, $sql_cp)) {
                unlink("../../imagem/".$dados_imagem_cp['imagem_cp']);
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina.php');
                
            }
        }
    }
    else{
        $sql_cp = "UPDATE card_pagina set titulo_painel_cp = '$titulo_painel_cp', titulo_cp = '$titulo_cp', desc_cp = '$desc_cp',
            link_cp = '$link_cp' where id_cp = '$id_cp'";
        if (mysqli_query($conexao, $sql_cp)) {
            header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
        }
        else{
            header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][2] = " ERRO AO ATUALIZADO";
        }
    } 
}

?>