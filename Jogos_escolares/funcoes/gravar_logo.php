<?php
    include "conexao.php";
    if(isset($_POST['cadastrar'])){
        $logo = $_FILES['logo'];
        $nomelogo = $_POST['nomelogo'];
        //se a foto foi selecionada
        if(!empty($logo["name"])){
            // máximo em piexels
            $lagura = 150;
            $altura = 180;

            //máximo em bytes
            $tamanho = 1024;
            $error = array();

            //varifica se o arquivo é uma imagem
            if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $logo["type"])){
                  $error[1] = "Isso não é uma imagem";  
            }

            //pega as dimensões da imagem
            $dimensoes = getimagesize($logo["tmp_name"]);

            //verifica se a largura da imagem é maior que a largura permitida
            if($dimensoes[0] > $lagura){
                $error[2] = "A largura da imagem não deve ultrapassar ".$lagura." pixels";
            }
            //verifica se a altura da imagem é maior que a largura permitida
            if($dimensoes[0] > $altura){
                $error[3] = "A altura da imagem não deve ultrapassar ".$altura." pixels";
            }
            if($logo["size"] > $tamanho){
                $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
            }

            //se não houver erro
            if(count($error) == 0){
                //pega a extensão da imagem
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $logo["name"], $ext);

                //gera um nome único para a imagem
                $nome_logo = $nomelogo;

                //caminho de onde ficará a imagem
                $caminho_imagem = "imagens/" . $nome_logo;

                //faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($logo["tmp_name"], $caminho_imagem);

                //Insere os dados no banco
                $sql = "INSERT INTO logo (foto_logo) values('$nome_logo')";
                if(mysqli_query($conexao, $sql)){
                    echo "logo cadastrado.";
                }
            }
            if(count($error) != 0){
                foreach($error as $erro){
                    echo $erro. "<br/>";
                }
            }
        }
    }

    
?>
