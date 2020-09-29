<?php
include "../funcoes/conexao.php";
if(isset($_GET['id_fun'])){
    $id_fun = mysqli_escape_string($conexao, $_GET['id_fun']);
    $sql_fun = "SELECT * from funcionario where id_fun = '$id_fun'";
    $result_fun= mysqli_query($conexao, $sql_fun);
    $dados_fun = mysqli_fetch_array($result_fun);
}
elseif(isset($_GET['id_sm'])){
    $id_sm = mysqli_escape_string($conexao, $_GET['id_sm']);
    $sql_sele = "SELECT * from selecoes_municipais where id_sm = '$id_sm'";
    $result_sele = mysqli_query($conexao, $sql_sele);
    $dados_sele = mysqli_fetch_array($result_sele);
}
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






<?php
if(!empty($id_fun)){
?>
<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_sobre_sql.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nome</label>
      <input type="text" class="form-control" id="inputEmail4" name="nome_fun" value="<?php echo $dados_fun['nome_fun']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label>Função</label>
      <input type="text" class="form-control" id="inputPassword4" name="funcao_fun" value="<?php echo $dados_fun['funcao_fun']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Facebook</label>
      <input type="text" class="form-control" id="inputEmail4" name="face_fun" value="<?php echo $dados_fun['face_fun']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label>Instagram</label>
      <input type="text" class="form-control" id="inputPassword4" name="insta_fun" value="<?php echo $dados_fun['insta_fun']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label >Descricao</label>
    <input type="text" class="form-control " id="inputAddress" name="descricao_fun" value="<?php echo $dados_fun['descricao_fun'];?>">
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_fun['imagem_fun'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="file" class="" name="imagem_fun" id="real-file"  onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_fun" value="<?php echo $dados_fun['id_fun'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_sobre">Enviar</button>
</form>
</div>


<?php
}
elseif(!empty($id_sm)){
?>


<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_sobre_sql.php" method="POST" enctype="multipart/form-data">
  
    <div class="form-group">
      <label >Titulo 1</label>
      <input type="text" class="form-control" id="inputEmail4" name="titul_sm1" value="<?php echo $dados_sele['titul_sm1']; ?>">
    </div>

  <div class="form-group">
    <label>Descricao 1</label>
    <input type="text" class="form-control " id="inputAddress" name="desc1_sm" value="<?php echo $dados_sele['desc1_sm'];?>">
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_sele['imagem1_sm'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem 1</label>
    <input type="file" class="" name="imagem1_sm" id="real-file"  onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_sm" value="<?php echo $dados_sele['id_sm'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_sobre_sele1">Enviar</button>
  </form>
</div>

<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_sobre_sql.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label >Titulo 2</label>
      <input type="text" class="form-control" id="inputEmail4" name="titul_sm2" value="<?php echo $dados_sele['titul_sm2']; ?>">
    </div>

  <div class="form-group">
    <label>Descricao 2</label>
    <input type="text" class="form-control " id="inputAddress" name="desc2_sm" value="<?php echo $dados_sele['desc2_sm'];?>">
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_sele['imagem2_sm'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem 2</label>
    <input type="file" class="" name="imagem2_sm" id="real-file"  onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_sm" value="<?php echo $dados_sele['id_sm'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_sobre_sele2">Enviar</button>
  </form>

</div>

<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_sobre_sql.php" method="POST" enctype="multipart/form-data">
  
    <div class="form-group">
      <label >Titulo 3</label>
      <input type="text" class="form-control" id="inputEmail4" name="titul_sm3" value="<?php echo $dados_sele['titul_sm3']; ?>">
    </div>

  <div class="form-group">
    <label>Descricao 3</label>
    <input type="text" class="form-control " id="inputAddress" name="desc3_sm" value="<?php echo $dados_sele['desc3_sm'];?>">
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_sele['imagem3_sm'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem 3</label>
    <input type="file" class="" name="imagem3_sm" id="real-file"  onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_sm" value="<?php echo $dados_sele['id_sm'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_sobre_sele3">Enviar</button>

  </form>
</div>

<?php
}
?>

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