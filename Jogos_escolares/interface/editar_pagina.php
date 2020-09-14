<?php
    include "../funcoes/conexao.php";
    $sql_noticia_painel = "SELECT * FROM noticia_painel";
    $result_noticia = mysqli_query($conexao, $sql_noticia_painel);
    $dados_noticia = mysqli_fetch_array($result_noticia);

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style_home.css">
    <title>Sejuve</title>


</head>
<body >
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" style="margin-top:50px;">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Páginal Inicial</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Eventos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sobre</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  


  <div class="shadow-lg p-3 mb-5 rounded" style="width: 50%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Informátivo.</p>
</div>

  <form class="w-50" style="margin:auto;">
  <div class="form-row text-white">
    <div class="form-group col-md-6">
      <label >Título</label>
      <input type="text" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Link</label>
      <input type="text" class="form-control">
    </div>
  </div>
  <div class="form-group text-white">
    <label >Text</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group text-white">
    <label >Imagem</label>
    <br>
    <input type="file">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



<div class="shadow-lg p-3 mb-5 rounded" style="width: 50%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Seleções Municipais.</p>
</div>

  <form class="w-50" style="margin:auto;">
  <div class="form-row text-white">
    <div class="form-group col-md-6">
      <label >Título</label>
      <input type="text" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Link</label>
      <input type="text" class="form-control">
    </div>
  </div>
  <div class="form-group text-white">
    <label >Text</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group text-white">
    <label >Imagem</label>
    <br>
    <input type="file">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  
  
<div class="shadow-lg p-3 mb-5 rounded" style="width: 50%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" > Eventos.</p>
</div>

  <form class="w-50" style="margin:auto;">
  <div class="form-row text-white">
    <div class="form-group col-md-6">
      <label >Nome</label>
      <input type="text" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Data</label>
      <input type="date" class="form-control">
    </div>
  </div>
  <div class="form-group text-white">
    <label >Descrição</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group text-white">
    <label >Imagem</label>
    <br>
    <input type="file">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
  
  
  

  
  
  
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  
  
  
  
  
  <div class="shadow-lg p-3 mb-5 rounded" style="width: 50%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Equipe Sejuve.</p>
</div>

  <form class="w-50" style="margin:auto;">
  <div class="form-row text-white">
    <div class="form-group col-md-6">
      <label >Nome</label>
      <input type="text" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Data</label>
      <input type="date" class="form-control">
    </div>
  </div>
  <div class="form-group text-white">
    <label >Descrição</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group text-white">
    <label >Imagem</label>
    <br>
    <input type="file">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

  
<div class="shadow-lg p-3 mb-5 rounded" style="width: 50%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Seleções Municipais.</p>
</div>

  <form class="w-50" style="margin:auto;">
  <div class="form-row text-white">
    <div class="form-group col-md-6">
      <label >Nome</label>
      <input type="text" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Data</label>
      <input type="date" class="form-control">
    </div>
  </div>
  <div class="form-group text-white">
    <label >Descrição</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group text-white">
    <label >Imagem</label>
    <br>
    <input type="file">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
  
  
  </div>
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

<script type="text/javascript">
      
      const realFileBtn = document.getElementById('real-file');
      const customBtn = document.getElementById('custom-button');
      const customTxt = document.getElementById('custom-text');
      
      
      customBtn.addEventListener('click',function() {
      
      realFileBtn.click();
      
      });
      
      
      realFileBtn.addEventListener("change",function() {
      
      if (realFileBtn.value) {
      
        customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
      } else {
      customTxt.innerHTML ="Nenhum arquivo selecionado.";
      
      }
      
      });
      
          </script>
      
      
      
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