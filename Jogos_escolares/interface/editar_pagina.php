<?php
    session_start();
    include "../funcoes/conexao.php";
    include "../funcoes/mensagem.php";
    include "../funcoes/verifica_login_adm.php";

    $sql_noticia_painel = "SELECT * FROM noticia join noticia_painel where id_no = fk_noticia";
    $result_noticia_painel = mysqli_query($conexao, $sql_noticia_painel);
    
    $sql_noticia = "SELECT * FROM noticia";
    $result_noticia = mysqli_query($conexao, $sql_noticia);
    
    $sql_funcionario =  "SELECT * from funcionario";
    $result_funcionario = mysqli_query($conexao, $sql_funcionario);

    $sql_sele =  "SELECT * from selecoes_municipais";
    $result_sele = mysqli_query($conexao, $sql_sele);

    $sql_cp = "SELECT * from card_pagina";
    $resultado_cp = mysqli_query($conexao, $sql_cp);

    $sql_selecoes = "SELECT * from selecoes_municipais where desc4_sm <> 'null'";
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

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>

<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
</script>





<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" style="margin-top:10px;">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Inicio</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Eventos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sobre</a>
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
    <a class="btn btn-primary" href="adicionar_informativo.php?id_no=<?php echo $id;?>">Adicionar</a>
    </div>
    <?php 
    while($dados_noticia_painel = mysqli_fetch_array($result_noticia_painel)){
    ?>


    <div class="form-row text-white w-100 justify-content-center" style="margin:auto;">
        <div class="form-group col-md-6">
        <label >Título</label>
        <p>
        <input type="text" class="form-control font-weight-bold" value="<?php echo $dados_noticia_painel['titulo_no']; ?>">
        <form method="POST" action="../funcoes/deletar_informativo.php" class="w-50" >
        <input type="hidden" name="id_no" value="<?php echo $dados_noticia_painel['id_no'];?>">
        <button type="submit" class="btn btn-danger" name="deletar_noticia">Deletar</button>
        <a class="btn btn-success" name="editar_noticia" href="editar_informativo.php?id_no=<?php echo $dados_noticia_painel['id_no'];?>">Editar</a>
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
        <a class="btn btn-success" href="editar_informativo.php?id_sm=<?php echo $dados_selecoes['id_sm'];?>">Editar</a>
        </form>
        </p>  
        </div>
        
    </div>
            


    <?php
    }
    ?>
  

  
  
  
  <div class="shadow-lg p-3 mb-5 rounded " style="width: 70%; margin: auto; margin-top: 6%;" id="info">
  <p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Novo Painel</p>
  </div>

  <div class="form-row text-white w-50 justify-content-center" style="margin:auto;">
    <a class="btn btn-primary" href="adicionar_informativo.php?id_cp=<?php echo $id;?>">Adicionar</a>
    </div>
  

  <?php
    while($dados_cp = mysqli_fetch_array($resultado_cp)){
  ?>
  <div class="shadow-lg p-3 mb-5 rounded " style="width: 70%; margin: auto; margin-top: 6%;" id="info">
  <p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" ><?php echo $dados_cp['titulo_painel_cp'] ?></p>
  </div>


  <div class="form-row text-white w-100 justify-content-center" style="margin-left:auto;">
        <div class="form-group col-md-6">
        <label >Título</label>
        <p>
        <input type="text" class="form-control font-weight-bold" value="<?php echo $dados_cp['titulo_cp']; ?>">
        <form method="POST" action="../funcoes/deletar_informativo.php" class="w-50" >
        <input type="hidden" name="id_cp" value=" <?php echo $dados_cp['id_cp'];?> ">
        <button type="submit" class="btn btn-danger" name="deletar_card">Deletar</button>
        <a class="btn btn-success" href="editar_informativo.php?id_cp=<?php echo $dados_cp['id_cp'];?>">Editar</a>
        </form>
        </p>  
        </div>
        
    </div>

  <?php
  }
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- final-tab-pane1 -->
  </div>
  
  
  
  
  
  
  
  
  <!--
    Começo tab2
   -->
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <!--
    <div class="shadow-lg p-3 mb-5 rounded " style="width: 70%; margin: auto; margin-top: 6%;" id="info">
    <p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Calendário</p>
    </div>
  -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <div class="shadow-lg p-3 mb-5 rounded " style="width: 70%; margin: auto; margin-top: 6%;" id="info">
    <p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important">Notícia</p>
    </div>






    <div class="form-row text-white w-50 justify-content-center" style="margin:auto;">
    <a class="btn btn-primary" href="adicionar_informativo.php">Adicionar</a>
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
        <button type="submit" class="btn btn-danger" name="deletar_noticia_total">Deletar</button>
        <a class="btn btn-success" name="editar_noticia" href="editar_informativo.php?id_no=<?php echo $dados_noticia['id_no'];?>">Editar</a>
        </form>

        </p>
        </div>
        
    </div>

    <?php
    }
    ?>








    
  <!--
    Final da tab2
  -->
  </div>

















    <!-- 
    começo tab3
    -->
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


    <div class="shadow-lg p-3 mb-5 rounded " style="width: 70%; margin: auto; margin-top: 6%;" id="info">
      <p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important">EQUIPE DA SECRETARIA.</p>
    </div>
    <div class="form-row text-white w-100 justify-content-center" style="margin:auto;">

    <div class="form-row text-white w-50 justify-content-center" style="margin:auto;">
    <a class="btn btn-primary" href="adicionar_sobre.php">Adicionar</a>
    </div>
    <?php 
    while($dados_funcionario = mysqli_fetch_array($result_funcionario)){
    ?>


    <div class="form-row text-white w-100 justify-content-center" style="margin:auto;">
        <div class="form-group col-md-6">
        <label >Nome</label>
        <p>
        <input type="text" class="form-control font-weight-bold" value="<?php echo $dados_funcionario['nome_fun']; ?>">
        <form method="POST" action="../funcoes/deletar_sobre.php" class="w-50">

        <input type="hidden" name="id_fun" value="<?php echo $dados_funcionario['id_fun'];?>">
        
        <button type="submit" class="btn btn-danger" name="deletar_funcionario">Deletar</button>
        <a class="btn btn-success" name="editar_funcionario" href="editar_sobre.php?id_fun=<?php echo $dados_funcionario['id_fun'];?>">Editar</a>
        </form>
        </p>
        </div>
    </div>

    <?php
    }
    ?>
    </div>

























    <div class="shadow-lg p-3 mb-5 rounded " style="width: 70%; margin: auto; margin-top: 6%;" id="info">
      <p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important">Selecoes Municipais.</p>
    </div>
    <div class="form-row text-white w-100 justify-content-center" style="margin:auto;">

    <div class="form-row text-white w-50 justify-content-center" style="margin:auto;">
    <a class="btn btn-primary" href="adicionar_informativo.php?id_sm=<?php echo $id;?>">Adicionar</a>

    </div>
    <?php 
    while($dados_sele = mysqli_fetch_array($result_sele)){
    ?>


    <div class="form-row text-white w-100 justify-content-center" style="margin:auto;">
        <div class="form-group col-md-6">
        <label >Seleção</label>
        <p>
        <input type="text" class="form-control font-weight-bold" value="<?php echo $dados_sele["modalidade_sm"]." ".$dados_sele["naipe_sm"]." ".$dados_sele["categoria_sm"];?>">
        <form method="POST" action="../funcoes/deletar_sobre.php" class="w-50">
        <input type="hidden" name="id_sm" value="<?php echo $dados_sele['id_sm'];?>">
        <button type="submit" class="btn btn-danger" name="deletar_sele">Deletar</button>
        <a class="btn btn-success" name="editar_sele" href="editar_sobre.php?id_sm=<?php echo $dados_sele['id_sm'];?>">Editar</a>
        </form>
        </p>
        </div>
    </div>

    <?php
    }
    ?>
    </div>


   <!-- 
    Final tab3
    -->
  </div>
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

<script>
$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})



</script>

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
 
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>