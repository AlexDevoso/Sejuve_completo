<?php
include "../funcoes/conexao.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style_home.css">
    <title>Sejuve</title>
</head>
<body>
<style>
  body{
    font-family: Verdana, sans-serif!important;
    font-weight:bold;
    text-align: justify;
  }
  p{
    font-family: Helvetica, sans-serif!important;
    font-weight:normal;
  }
  h5{
    color:#00ffff!important;
    font-weight:bold;
  }>
 a:hover{
    color:#00ffff!important;
 }
</style>







<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/adicionar_sobre_sql.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nome</label>
      <input type="text" class="form-control" id="inputEmail4" name="nome_fun" >
    </div>
    <div class="form-group col-md-6">
      <label>Função</label>
      <input type="text" class="form-control" id="inputPassword4" name="funcao_fun" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Facebook</label>
      <input type="text" class="form-control" id="inputEmail4" name="face_fun" >
    </div>
    <div class="form-group col-md-6">
      <label>Instagram</label>
      <input type="text" class="form-control" id="inputPassword4" name="insta_fun" >
    </div>
  </div>
  <div class="form-group">
    <label >Descricao</label>
        <textarea class="form-control" name="descricao_fun" rows="3"></textarea>

   
  </div>
  <div class="form-group">
  <img width = "300" id="pre_img">
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="file" class="" name="imagem_fun" id="real-file"  onchange="previewImagem()">
  </div>
  <button type="submit" class="btn btn-primary" name="adicionar_sobre">Enviar</button>
</form>
</div>












<div style="margin-top:5px;">
</div>
<footer style="   position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  margin-top:100px;
  color: white;
  text-align: center;">
  <div>
   <center><p  style="color: #fff;font-size: 15px;text-align: center;">©  Copyright 2020 SEJUVE - Secretaria de Esporte e Juventude Municipal de Pentecoste.</p></center>
  </div>

</footer>

<script>
            function previewImagem(){
                var imagem = document.querySelector('input#real-file').files[0];
                var preview = document.getElementById("pre_img");
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>