<?php
    include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="cadastrar_eventos.php" enctype="multipart/form-data" name = "cadastro">

            <label>NOME</label>
            <input type="text" name="nomeevento"/>
            <label>Imagem evento</label>
            <input type="file" name="imagem" id="imagem" onchange="previewImagem()"/>
            <img style="width: 150px; height: 150px;">
            <label>Contador</label>
            <input type="text" name="contadorinput"/>
            <label>Data</label>
            <input type="text" name="dataevento"/>
            <label>login</label>
            <input type="text" name="loginevento"/>
            <label>senha</label>
            <input type="text" name="senhaevento"/>
            <button type="submit" name="cadastrar" value="cadastrar">Enviar</button>

    </form>
    <script src="jquery/jquery-ui.min.js"></script>
    <script>
            function previewImagem(){
                var imagem = document.querySelector('input#imagem').files[0];
                var preview = document.querySelector('img');
                var reader = new FileReader();
                reader.onloadend = function(){
                    preview.src = reader.result;
                }
                if(imagem){
                    reader.readAsDataURL(imagem);
                }else{
                    preview.src = "";
                }
            }
    </script>
</body>
</html>