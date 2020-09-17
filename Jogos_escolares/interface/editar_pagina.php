<?php
    include "../funcoes/conexao.php";
    $sql_noticia_painel = "SELECT * FROM noticia join noticia_painel where id_no = fk_noticia";
    $result_noticia = mysqli_query($conexao, $sql_noticia_painel);
    
    $sql_selecoes = "SELECT * from selecoes_municipais";
    $result_selecoes = mysqli_query($conexao, $sql_selecoes);
    $id = 1;
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
<body>

<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" style="margin-top:10px;">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Inicio</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>

<!-- Começo da div que guarda o conteudo dos tab-pane -->
<div class="tab-content" id="pills-tabContent">

<!-- tab-pane1 -->
  <div class=" tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  
  
  <div class="shadow-lg p-3 mb-5 rounded " style="width: 70%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Informativo Sejuve</p>
</div>
    <div class="form-row text-white w-50 justify-content-center" style="margin:auto;">
    <a class="btn btn-primary" href="adicionar_informativo.php?id_no=<?php echo $id?>">Adicionar</a>
    </div>
    <?php 
    while($dados_noticia = mysqli_fetch_array($result_noticia)){
    ?>


    <div class="form-row text-white w-100 justify-content-center" style="margin:auto;">
        <div class="form-group col-md-6">
        <label >Título</label>
        <p>
        <input type="text" class="form-control font-weight-bold" value="<?php echo $dados_noticia['titulo_no']; ?>">
        <form method="POST" action="../funcoes/deletar_informativo.php" class="w-50" >
        <input type="hidden" name="id_no" value="<?php echo $dados_noticia['id_no'];?>">
        <button type="submit" class="btn btn-danger" name="deletar_noticia">Deletar</button>
        <a class="btn btn-success" name="editar_noticia" href="editar_informativo.php?id_no=<?php echo $dados_noticia['id_no'];?>">Editar</a>
        </form>

        </p>
        </div>
        
    </div>

    <?php
    }
    ?>

    <div class="shadow-lg p-3 mb-5 rounded" style="width: 70%; margin: auto; margin-top: 6%;" id="info">
    <p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Seleções Municipais.</p>
    </div>
    <div class="form-row text-white w-50 justify-content-center" style="margin:auto;">
    <a class="btn btn-primary" href="adicionar_informativo.php?id_sm=<?php echo $id;?>">Adicionar</a>
    </div>
    <?php 
    while($dados_selecoes = mysqli_fetch_array($result_selecoes)){
    ?>

    
    <div class="form-row text-white w-100 justify-content-center" style="margin-left:auto;">
        <div class="form-group col-md-6">
        <label >Título</label>
        <p>
        <input type="text" class="form-control font-weight-bold" value="<?php echo $dados_selecoes['desc4_sm']; ?>">
        <form method="POST" action="../funcoes/deletar_informativo.php" class="w-50" >
        <input type="hidden" name="id_sm" value="<?php echo $dados_selecoes['id_sm'];?>">
        <button type="submit" class="btn btn-danger" name="deletar_selecoes">Deletar</button>
        <a class="btn btn-success" name="editar_noticia" href="editar_informativo.php?id_sm=<?php echo $dados_selecoes['id_sm'];?>">Editar</a>
        </form>
        </p>  
        </div>
        
    </div>
            
    </div>

    <?php
    }
    ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- final-tab-pane1 -->
  </div>
  
  
  
  
  
  
  
  
  
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>












































<!-- Final da div que guarda o conteudo dos tab-pane -->
</div>

<div style="margin-top:10px;">
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