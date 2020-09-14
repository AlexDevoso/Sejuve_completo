<?php
    include "conexao.php";
    if(isset($_POST['cadastrar'])){

        $nome = $_POST['nome'];
        $imagem = $_FILES['imagem'];
        
        //se a foto foi selecionada
        if(!empty($imagem["name"])){
            // máximo em piexels
            $lagura = 150;
            $altura = 180;

            //máximo em bytes
            $tamanho = 1024;
            $error = array();

            //verifica se o arquivo é uma imagem
            if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
                  $error[1] = "Isso não é uma imagem";  
            }

            //pega as dimensões da imagem
            $dimensoes = getimagesize($imagem["tmp_name"]);

            //verifica se a largura da imagem é maior que a largura permitida
            if($dimensoes[0] > $lagura){
                $error[2] = "A largura da imagem não deve ultrapassar ".$lagura." pixels";
            }
            //verifica se a altura da imagem é maior que a altura permitida
            if($dimensoes[0] > $altura){
                $error[3] = "A altura da imagem não deve ultrapassar ".$altura." pixels";
            }
            if($imagem["size"] > $tamanho){
                $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
            }

            //se não houver erro
            if(count($error) == 0){
                //pega a extensão da imagem
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

                //gera um nome único para a imagem
                $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                //caminho de onde ficará a imagem
                $caminho_imagem = "img/" . $nome_imagem;

                //faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

                //Insere os dados no banco
                $sql = "INSERT INTO patrocinadores (nome, foto) values('$nome','$nome_imagem')";
                if(mysqli_query($conexao, $sql)){
                    echo "Patrocinador cadastrado.";
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
