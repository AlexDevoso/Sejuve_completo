<?php
include "../funcoes/conexao.php";
if(isset($_GET['id_no'])){
    $id_no = mysqli_escape_string($conexao, $_GET['id_no']);
    $sql_no = "SELECT * from noticia where id_no = '$id_no'";
    $result_no = mysqli_query($conexao, $sql_no);
    $dados_no = mysqli_fetch_array($result_no);
}

elseif(isset($_GET['id_sm'])){
  $id_sm = mysqli_escape_string($conexao, $_GET['id_sm']);
  $sql_sm = "SELECT * from selecoes_municipais where id_sm = '$id_sm'";
  $result_sm = mysqli_query($conexao, $sql_sm);
  $dados_sm = mysqli_fetch_array($result_sm);
}
elseif(isset($_GET['id_cp'])){
  $id_cp = mysqli_escape_string($conexao, $_GET['id_cp']);
  $sql_cp = "SELECT * from card_pagina where id_cp = '$id_cp'";
  $result_cp = mysqli_query($conexao, $sql_cp);
  $dados_cp = mysqli_fetch_array($result_cp);
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
if(!empty($_GET['id_no'])){


?>
<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_informativo_sql.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Titulo</label>
      <input type="text" class="form-control" id="inputEmail4" name="titulo_no" value="<?php echo $dados_no['titulo_no']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label>Link</label>
      <input type="text" class="form-control" id="inputPassword4" name="link_no" value="<?php echo $dados_no['link_no']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label >Descrição</label>

    <textarea type="text" class="form-control" rows="3"  name="descricao_no" ><?php echo $dados_no['descricao_no'];?></textarea>
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_no['imagem_no'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="file" class="" name="imagem_no" id="real-file"  onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_no" value="<?php echo $dados_no['id_no'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_informativo">Enviar</button>
</form>
</div>



<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_informativo_sql.php" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
      <label >Titulo 2</label>
      <input type="text" class="form-control" id="inputEmail4" name="titulo2_no" value="<?php echo $dados_no['titulo2_no']; ?>">
    </div>
  <div class="form-group">
    <label >Descrição 3</label>

    <textarea type="text" class="form-control" rows="3"  name="descricao2_no" ><?php echo $dados_no['descricao2_no'];?></textarea>
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_no['imagem2_no'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="file" class="" name="imagem2_no" id="real-file"  onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_no" value="<?php echo $dados_no['id_no'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_informativo_2">Enviar</button>
</form>
</div>

<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_informativo_sql.php" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
      <label >Titulo 3</label>
      <input type="text" class="form-control" id="inputEmail4" name="titulo3_no" value="<?php echo $dados_no['titulo3_no']; ?>">
    </div>
  <div class="form-group">
    <label >Descrição 3</label>

    <textarea type="text" class="form-control" rows="3"  name="descricao3_no" ><?php echo $dados_no['descricao3_no'];?></textarea>
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_no['imagem3_no'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="file" class="" name="imagem3_no" id="real-file"  onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_no" value="<?php echo $dados_no['id_no'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_informativo_3">Enviar</button>
</form>
</div>
<?php
}
else if(!empty($_GET['id_sm'])){

?>

<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_informativo_sql.php" method="POST" enctype="multipart/form-data">
    

 
  <div class="form-group">
  <label>Descrição</label>
      <textarea type="text" class="form-control" rows="3"  name="desc4_sm" ><?php echo $dados_sm['desc4_sm'];?></textarea>


  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_sm['imagem4_sm'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="file" class="" name="imagem4_sm" id="real-file" name="imagem4_sm" onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_sm" value="<?php echo $dados_sm['id_sm'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_informativo_sele">Enviar</button>
</form>
</div>


<?php
} 
else if(!empty($_GET['id_cp'])){

?>


<div class="w-50 text-white" style="margin:auto; margin-top:100px;">
<form action="../funcoes/editar_informativo_sql.php" method="POST" enctype="multipart/form-data">
    
  <div class="form-group">
  <label>Titulo Card</label>
  <input type="text" class="form-control" name="titulo_painel_cp" value="<?php echo $dados_cp['titulo_painel_cp']; ?>">
  </div>
  <div class="form-group">
  <label>Titulo</label>
  <input type="text" class="form-control" name="titulo_cp" value="<?php echo $dados_cp['titulo_cp']; ?>">
  </div>
  <div class="form-group">
  <label>Descrição</label>
        <textarea type="text" class="form-control" rows="3"  name="desc_cp" ><?php echo $dados_cp['desc_cp'];?></textarea>

  </div>
  <div class="form-group">
  <label>Link</label>
  <input type="text" class="form-control" name="link_cp" value="<?php echo $dados_cp['link_cp']; ?>">
  </div>
  <div class="form-group">
    <?php echo '<img width = "300" id="pre_img" src="../../imagem/'.$dados_cp['imagem_cp'].'">'?>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="file" class="" name="imagem_cp" id="real-file" onchange="previewImagem()">
  </div>
  <input type="hidden" name="id_cp" value="<?php echo $dados_cp['id_cp'];?>"> 
  <button type="submit" class="btn btn-primary" name="editar_informativo_cp">Enviar</button>
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