<?php
include('conexao.php');

if(isset($_POST['adicionar_informativo'])){
    $id_no = mysqli_escape_string($conexao, $_POST['id_no']);
}


$sql = "SELECT fk_noticia from noticia_painel";
$result = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);

if($row >= 6){
    header('Location:../interface/editar_pagina.php');
}
else{
    $sql = "INSERT INTO noticia_painel (fk_noticia) values('$id_no')";
    if(mysqli_query($conexao, $sql)){
        header('Location:../interface/editar_pagina.php');
    }
    else{
        header('Location:../interface/editar_pagina.php');

    }
}

if(isset($_POST['adicionar_informativo_sele'])){
    $categoria_sm = mysqli_escape_string($conexao, $_POST['categoria_sm']);
    $modalidade_sm = mysqli_escape_string($conexao, $_POST['modalidade_sm']);
    $titul_sm4 = mysqli_escape_string($conexao, $_POST['titul_sm4']);
    $naipe_sm = mysqli_escape_string($conexao, $_POST['naipe_sm']);
    $desc4_sm = mysqli_escape_string($conexao, $_POST['desc4_sm']);
    $imagem4_sm = $_FILES['imagem4_sm'];
    
    $sql_sele = "SELECT id_sm from selecoes_municipais where categoria_sm = '$categoria_sm' and
    modalidade_sm = '$modalidade_sm' and naipe_sm = '$naipe_sm'";
    $result_sele = mysqli_query($conexao, $sql_sele);
    $row = mysqli_fetch_row($result_sele);
    $id_sm = implode($row);


   
    
    
    
    
    
    if(!empty($id_sm)){
        

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
                header('Location: ../interface/editar_pagina1.php');
            }
            //pega as dimensões da imagem
            $dimensões = getimagesize($imagem4_sm["tmp_name"]);
    
            //verifica se a largura da imagem é maior que largura permitida
            if ($dimensões[0] > $lagura) {
                $error[2] = "A largura da imagem não deve ultrapassar " . $lagura . "pixels";
                header('Location: ../interface/editar_pagina2.php');
            }
            //verifica se a altura da imagem é maior que a altura permitida
            if ($dimensões[0] > $altura) {
                $error[3] = "A altura da imagem não deve ultrapassar " . $altura . " pixels";
                header('Location: ../interface/editar_pagina3.php');
            }
            //verifica o tamanho em bytes da imagem
            if ($imagem4_sm["size"] > $tamanho) {
                $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
                header('Location: ../interface/editar_pagina4.php');
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

                $sql = "UPDATE selecoes_municipais set categoria_sm = '$categoria_sm', modalidade_sm = '$modalidade_sm', titul_sm4 = '$titul_sm4', 
                naipe_sm = '$naipe_sm', desc4_sm = '$desc4_sm', imagem4_sm = '$nome_imagem' where id_sm = '$id_sm'";
                if (mysqli_query($conexao, $sql)) {
                    header('Location: ../interface/editar_pagina.php');
                    $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
                }
                else{
                    header('Location: ../interface/editar_pagina15.php');
                    
                }
            }
        }
        else{
            $sql = "UPDATE selecoes_municipais set categoria_sm = '$categoria_sm', modalidade_sm = '$modalidade_sm', titul_sm4 = '$titul_sm4', 
            naipe_sm = '$naipe_sm', desc4_sm = '$desc4_sm'";     
            if (mysqli_query($conexao, $sql)) {
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                 header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][2] = " ERRO AO ATUALIZADO COM SUCESSO";
            }
        }    


    }
    //final do update

    //começo do insert
    else{
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
            header('Location: ../interface/editar_pagina1.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem4_sm["tmp_name"]);

        //verifica se a largura da imagem é maior que largura permitida
        if ($dimensões[0] > $lagura) {
            $error[2] = "A largura da imagem não deve ultrapassar " . $lagura . "pixels";
            header('Location: ../interface/editar_pagina2.php');
        }
        //verifica se a altura da imagem é maior que a altura permitida
        if ($dimensões[0] > $altura) {
            $error[3] = "A altura da imagem não deve ultrapassar " . $altura . " pixels";
            header('Location: ../interface/editar_pagina3.php');
        }
        //verifica o tamanho em bytes da imagem
        if ($imagem4_sm["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            header('Location: ../interface/editar_pagina4.php');
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
            $sql = "INSERT INTO selecoes_municipais (categoria_sm, modalidade_sm, titul_sm4, naipe_sm, desc4_sm, imagem4_sm) values ('$categoria_sm','$modalidade_sm','$titul_sm4','$naipe_sm','$desc4_sm','$nome_imagem')";
            if (mysqli_query($conexao, $sql)) {
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina11.php');
                
            }
        }
    }
    else{
        $sql = "INSERT INTO selecoes_municipais (categoria_sm, modalidade_sm, titul_sm4, naipe_sm, desc4_sm) values('$categoria_sm','$modalidade_sm','$titul_sm4','$naipe_sm','$desc4_sm')";
        if (mysqli_query($conexao, $sql)) {
            header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
        }
        else{
             header('Location: ../interface/editar_pagina.php');
            $_SESSION['login'][2] = " ERRO AO ATUALIZADO COM SUCESSO";
        }
    } 


    }


    
}
?>