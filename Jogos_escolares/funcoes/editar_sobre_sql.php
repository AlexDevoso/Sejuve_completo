<?php
    include('conexao.php');
    if(isset($_POST['editar_sobre'])){
        $id_fun = mysqli_escape_string($conexao, $_POST['id_fun']);
        $nome_fun = mysqli_escape_string($conexao, $_POST['nome_fun']);        
        $funcao_fun = mysqli_escape_string($conexao, $_POST['funcao_fun']);
        $face_fun = mysqli_escape_string($conexao, $_POST['face_fun']);
        $insta_fun = mysqli_escape_string($conexao, $_POST['insta_fun']);
        $descricao_fun = mysqli_escape_string($conexao, $_POST['descricao_fun']);
        $imagem_fun = $_FILES['imagem_fun'];

        $sql_imagem_fun = "SELECT imagem_fun FROM funcionario where id_fun = '$id_fun'";
        $result_fun = mysqli_query($conexao, $sql_imagem_fun);
        $dados_fun = mysqli_fetch_array($result_fun);
        
        //se a logo foi selecionada
    if (!empty($imagem_fun["name"])) {
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem_fun['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            header('Location: ../interface/editar_pagina1.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem_fun["tmp_name"]);

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
        if ($imagem_fun["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            header('Location: ../interface/editar_pagina4.php');
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem_fun["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../../imagem/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem_fun["tmp_name"], $caminho_imagem);

            //inserindo dados no banco1
            $sql = "UPDATE funcionario set nome_fun = '$nome_fun', funcao_fun = '$funcao_fun', imagem_fun = '$nome_imagem', descricao_fun = '$descricao_fun', 
            face_fun = '$face_fun', insta_fun = '$insta_fun' where id_fun = '$id_fun'";
            if (mysqli_query($conexao, $sql)) {
                unlink("../../imagem/".$dados_fun['imagem_fun']);
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina2.php');
                
            }
        }
    }
    else{
           
            $sql = "UPDATE funcionario set nome_fun = '$nome_fun', funcao_fun = '$funcao_fun', descricao_fun = '$descricao_fun', 
            face_fun = '$face_fun', insta_fun = '$insta_fun' where id_fun = '$id_fun'";        
        
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

    else{

        if(isset($_POST['editar_sobre_sele1'])){

        
        $id_sm = mysqli_escape_string($conexao, $_POST['id_sm']);

        $titul_sm1 = mysqli_escape_string($conexao, $_POST['titul_sm1']);

        $desc1_sm = mysqli_escape_string($conexao, $_POST['desc1_sm']);

        $imagem1_sm = $_FILES['imagem1_sm'];
        
        
        $sql_imagem_sele1 = "SELECT imagem1_sm FROM selecoes_municipais where id_sm = '$id_sm'";
        $result_sele1 = mysqli_query($conexao, $sql_imagem_sele1);
        $dados_sele1 = mysqli_fetch_array($result_sele1);


         //se a logo foi selecionada
    if (!empty($imagem1_sm["name"])) {

     
        
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem1_sm['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            header('Location: ../interface/editar_pagina1.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem1_sm["tmp_name"]);

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
        if ($imagem1_sm["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            header('Location: ../interface/editar_pagina4.php');
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem1_sm["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../../imagem/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem1_sm["tmp_name"], $caminho_imagem);


            //inserindo dados no banco1
            $sql = "UPDATE selecoes_municipais set titul_sm1 = '$titul_sm1', desc1_sm = '$desc1_sm', 
            imagem1_sm = '$nome_imagem' where id_sm = '$id_sm'";
            if (mysqli_query($conexao, $sql)) {
                unlink("../../imagem/".$dados_sele1['imagem1_sm']);
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina2.php');
                
            }
        }


    }
    else{
           
        $sql = "UPDATE selecoes_municipais set titul_sm1 = '$titul_sm1', desc1_sm = '$desc1_sm'
         where id_sm = '$id_sm'";
        
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

    else if(isset($_POST['editar_sobre_sele2'])){

        
        $id_sm = mysqli_escape_string($conexao, $_POST['id_sm']);
    
        $titul_sm2 = mysqli_escape_string($conexao, $_POST['titul_sm2']);
     
        $desc2_sm = mysqli_escape_string($conexao, $_POST['desc2_sm']);

        $imagem2_sm = $_FILES['imagem2_sm'];


        $sql_imagem_sele2 = "SELECT imagem2_sm FROM selecoes_municipais where id_sm = '$id_sm'";
        $result_sele2 = mysqli_query($conexao, $sql_imagem_sele2);
        $dados_sele2 = mysqli_fetch_array($result_sele2);

         //se a logo foi selecionada
    if (!empty($imagem2_sm["name"])) {

     
        
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem2_sm['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            header('Location: ../interface/editar_pagina1.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem2_sm["tmp_name"]);

        //verifica se a largura da imagem é maior que largura permitida
        if ($dimensões[0] > $lagura) {
            $error[2] = "A largura da imagem não deve ultrapassar " . $lagura . "pixels";
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica se a altura da imagem é maior que a altura permitida
        if ($dimensões[0] > $altura) {
            $error[3] = "A altura da imagem não deve ultrapassar " . $altura . " pixels";
            header('Location: ../interface/editar_pagina.php');
        }
        //verifica o tamanho em bytes da imagem
        if ($imagem2_sm["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            header('Location: ../interface/editar_pagina.php');
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem2_sm["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../../imagem/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem2_sm["tmp_name"], $caminho_imagem);


            //inserindo dados no banco1
            $sql = "UPDATE selecoes_municipais set titul_sm2 = '$titul_sm2', desc2_sm = '$desc2_sm', 
            imagem2_sm = '$nome_imagem' where id_sm = '$id_sm'";
            if (mysqli_query($conexao, $sql)) {
                unlink("../../imagem/".$dados_sele2['imagem2_sm']);

                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ERRO AO ATUALIZAR";
            }
        }


    }
    else{
           
        $sql = "UPDATE selecoes_municipais set titul_sm2 = '$titul_sm2', desc2_sm = '$desc2_sm'
         where id_sm = '$id_sm'";
        
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

    elseif(isset($_POST['editar_sobre_sele3'])){

        
        $id_sm = mysqli_escape_string($conexao, $_POST['id_sm']);

        $titul_sm3 = mysqli_escape_string($conexao, $_POST['titul_sm3']);
   
        $desc3_sm = mysqli_escape_string($conexao, $_POST['desc3_sm']);
  
        $imagem3_sm = $_FILES['imagem3_sm'];

        $sql_imagem_sele3 = "SELECT imagem3_sm FROM selecoes_municipais where id_sm = '$id_sm'";
        $result_sele3 = mysqli_query($conexao, $sql_imagem_sele3);
        $dados_sele3 = mysqli_fetch_array($result_sele3);


         //se a logo foi selecionada
    if (!empty($imagem3_sm["name"])) {

     
        
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem3_sm['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            header('Location: ../interface/editar_pagina1.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem3_sm["tmp_name"]);

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
        if ($imagem3_sm["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            header('Location: ../interface/editar_pagina4.php');
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem3_sm["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../../imagem/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem3_sm["tmp_name"], $caminho_imagem);


            //inserindo dados no banco1
            $sql = "UPDATE selecoes_municipais set titul_sm3 = '$titul_sm3', desc3_sm = '$desc3_sm', 
            imagem3_sm = '$nome_imagem' where id_sm = '$id_sm'";
            if (mysqli_query($conexao, $sql)) {
                unlink("../../imagem/".$dados_sele3['imagem3_sm']);
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina2.php');
                
            }
        }


    }
    else{
           
        $sql = "UPDATE selecoes_municipais set titul_sm3 = '$titul_sm3', desc3_sm = '$desc3_sm'
         where id_sm = '$id_sm'";    
        
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