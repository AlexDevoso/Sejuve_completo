<?php
session_start();
include "conexao.php";
    //verifica se o botao de cadastrar foi apertado
    if(isset($_POST["cadastrar"])){
        //recebendo os valores do input
        $nomeevento = mysqli_escape_string($conexao, $_POST['nome_evento']);
        $imagem = $_FILES['imagem_evento'];
        $modalidade =  mysqli_escape_string($conexao, $_POST['modalidade']);
        $dataevento = mysqli_escape_string($conexao, $_POST['data_evento']);
        /*
        verificando valores com condições
        caso a condição for válida irá registrar
        */
        if($nomeevento == "" || $dataevento == ""){
            
            
        }
        else{
            //se a logo foi selecionada
            if(!empty($imagem["name"])){
                //máxima em piexels
                $lagura = 2000;
                $altura = 2000;
                //máximo em bytes
                $tamanho = 500000;
                $error = array();
                //verifica se o arquivo é uma imagem
                if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem['type'])){
                            $error[1] = "ISSO NÃO É uma imagem";
                            echo "não é img";
                }
                //pega as dimensões da imagem
                $dimensões = getimagesize($imagem["tmp_name"]);
                
                //verifica se a largura da imagem é maior que largura permitida
                if($dimensões[0] > $lagura){
                    $error[2] = "A largura da imagem não deve ultrapassar ". $lagura."pixels";
                    echo "A largura da imagem não deve ultrapassar ";
                }
                //verifica se a altura da imagem é maior que a altura permitida
                if($dimensões[0] > $altura){
                    $error[3] = "A altura da imagem não deve ultrapassar ". $altura." pixels";
                    echo "A altura da imagem não deve ultrapassar ";
                }
                //verifica o tamanho em bytes da imagem
                if($imagem["size"] > $tamanho){
                    $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
                    echo "A imagem deve ter no máximo ";
                }
                //se não houver erro
                if(count($error) == 0){
                    //pega a extensão da imagem
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
                    //gera um nome único para a imagem
                    $nome_imagem = md5(uniqid()) . "." . $ext[1];
                    //camihno de onde ficará a imagem
                    $caminho_imagem = "../imagens/" . $nome_imagem;
                    //faz o upload da imagem para seu respectivo caminho
                    move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
                    
                    //inserindo dados no banco
                    $sql = "INSERT INTO evento (nomeevento, modalidade, logoevento, dataevento) values ('$nomeevento','$modalidade', '$nome_imagem', '$dataevento')";
                    if(mysqli_query($conexao, $sql)){
                       
                        header('Location: ../interface/lista_de_eventos.php');
                        $_SESSION['login'][1] = "EVENTO CADASTRADO COM SUCESSO.";
                    }
                }
            }
            else{
                $sql = "INSERT INTO evento(nomeevento, modalidade, dataevento) values ('$nomeevento', '$modalidade', '$dataevento')";            
                if(mysqli_query($conexao, $sql)){
     
                    header('Location: ../interface/lista_de_eventos.php');
                    $_SESSION['login'][1] = "EVENTO CADASTRADO COM SUCESSO.";
                    
                }
                else{
                    
                    header('Location: ../interface/lista_de_eventos.php');
                    $_SESSION['login'][2] = "ERRO AO CADASTRADO EVENTO";
                    
                }
            }
        }

    }
?>