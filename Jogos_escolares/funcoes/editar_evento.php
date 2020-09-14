<?php
session_start();
include('conexao.php');

if (isset($_POST['editar'])) {
    $idevento = mysqli_escape_string($conexao, $_POST['idevento']);
    $nomeevento = mysqli_escape_string($conexao, $_POST['nomeevento']);
    $imagem = $_FILES['imagem_evento'];
    $dataevento = mysqli_escape_string($conexao, $_POST['dataevento']);
    $modalidade = mysqli_escape_string($conexao, $_POST['modalidade']);


    //se a logo foi selecionada
    if (!empty($imagem["name"])) {
        //máxima em piexels
        $lagura = 7000;
        $altura = 7000;
        //máximo em bytes
        $tamanho = 500000;
        $error = array();
        //verifica se o arquivo é uma imagem
        if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem['type'])) {
            $error[1] = "ISSO NÃO É uma imagem";
            
        }
        //pega as dimensões da imagem
        $dimensões = getimagesize($imagem["tmp_name"]);

        //verifica se a largura da imagem é maior que largura permitida
        if ($dimensões[0] > $lagura) {
            $error[2] = "A largura da imagem não deve ultrapassar " . $lagura . "pixels";
            
        }
        //verifica se a altura da imagem é maior que a altura permitida
        if ($dimensões[0] > $altura) {
            $error[3] = "A altura da imagem não deve ultrapassar " . $altura . " pixels";
            
        }
        //verifica o tamanho em bytes da imagem
        if ($imagem["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            
        }
        //se não houver erro
        if (count($error) == 0) {
            //pega a extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
            //gera um nome único para a imagem
            $nome_imagem = md5(uniqid()) . "." . $ext[1];
            //camihno de onde ficará a imagem
            $caminho_imagem = "../imagens/" . $nome_imagem;
            //faz o upload da imagem para seu rad2deg(number)espectivo caminho
            move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

            //inserindo dados no banco
            $sql = "UPDATE evento set nomeevento = '$nomeevento', logoevento = '$nome_imagem', modalidade = '$modalidade', dataevento = '$dataevento' where idevento = '$idevento' ";
            if (mysqli_query($conexao, $sql)) {
                
                header('Location: ../interface/lista_de_eventos.php');
                $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
            }
        }
    } else {
        $sql = "UPDATE evento set nomeevento = '$nomeevento', modalidade = '$modalidade', dataevento = '$dataevento' where idevento = '$idevento'";
        if (mysqli_query($conexao, $sql)) {
            header('Location: ../interface/lista_de_eventos.php');
            $_SESSION['login'][1] = "ATUALIZADO COM SUCESSO";
        }
        else{
             header('Location: ../interface/lista_de_eventos.php');
            $_SESSION['login'][2] = " ERRO AO ATUALIZADO COM SUCESSO";
        }
    }
} 
