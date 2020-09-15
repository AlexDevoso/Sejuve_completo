<?php
session_start();
include('conexao.php');
if(isset($_POST['editar_informativo'])){
    $titulo_no = mysqli_escape_string($conexao, $_POST['titulo_no']);
    $descricao_no = mysqli_escape_string($conexao, $_POST['descricao_no']);
    $link_no = mysqli_escape_string($conexao, $_POST['link_no']);
    $imagem_no = $_FILES['imagem_no'];
    $id_no = mysqli_escape_string($conexao, $_POST['id_no']);    


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
            header('Location: ../interface/editar_pagina1.php');
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem_no["tmp_name"]);

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
        if ($imagem_no["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            header('Location: ../interface/editar_pagina4.php');
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
                header('Location: ../interface/editar_pagina.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
            else{
                header('Location: ../interface/editar_pagina2.php');
                
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
            $_SESSION['login'][2] = " ERRO AO ATUALIZADO COM SUCESSO";
        }
    } 
}
 


?>