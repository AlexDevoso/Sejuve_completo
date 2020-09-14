<?php
session_start();
  include "../funcoes/conexao.php";
  include "../funcoes/mensagem.php";
  include "../funcoes/verifica_login.php";
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <!--Icons -->
      <link href="fontawesome/css/all.css" rel="stylesheet">

      <!--Icons -->
      <link href="fontawesome/css/all.css" rel="stylesheet">

        <!-- Awesome fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <!-- Awesome fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link rel="shortcut icon" type="image/x-icon" href="../imagens/sistema/fav_icon/fav_icon.ico">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

                       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<style type="text/css">
  html,body {
    overflow: hidden;
  }

  nav {

 background: #2F80ED; 



  }

  .btn.focus, .btn:focus {

    outline: 0;
    box-shadow: none !important;

}

a {

  color: #fff !important;
}

a:hover {
  color: #fff !important;
}

a#idzin:hover {

background-color: #2279f0 !important;



}


#voltar:hover {
   width: 100px !important;
   text-align: center;
   border-radius: 50px;
   background-color:#1372f2;
   text-decoration:none;

 
}

#voltar {
   width: 100px !important;
   text-align: center;
   text-decoration:none;
}


.bg_form_2 {
width: 80%;
margin-right: auto; 
margin-left: auto;

}

.bg_form {

width: 80%;
height: 30%;
margin-right: auto; 
margin-left: auto;
overflow-x: auto;
overflow-y: auto;
border-radius:5px ;


}

.btn-verde {
  background: #38ef7d !important;  /* fallback for old browsers */


color: #fff;
border-radius: 50px !important;
border: none;
height: 50px;
font-size: 18px;
width: 200px !important;


}


.table td, .table th {

    border-top: none!important;

}

.table th {

    border: none!important;
    font-weight: 600;
    text-align: center;

}

td {
  text-align: center !important;
}


html, body {
  overflow: hidden;
}

@media (max-width: 576px) { 

  #btn_add_atleta {

  
    width: 100% !important;
    height: 50px;
  }


  #voltar:hover {
   width: 50px !important;
   text-align: center;
   border-radius: 50px;
   background-color:#1372f2;
   text-decoration:none;

 
}

#voltar {
   width: 50px !important;
   text-align: center;
   text-decoration:none;
}

.bg_form {
  height: 55%;
}


 }

 #nav_sejuve:hover {

text-decoration:none;
 }





</style>


  <title>Consultar Atletas</title>


  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  
<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
</script>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="" id="sidebar-wrapper" style="background-color: #2F80ED;">
      <div class="sidebar-heading text-white">
        

<div style="display: flex;">
        <img width="50" src="../imagens/sejuve_logo.png" style="float: left ;"><h2 style="float: right !important;">Sejuve</h2>
</div>

      </div>
      <div class="list-group list-group-flush  ">
        





<a id="idzin" href="consultar_atletas.php"  class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;">   <img width="20" src="../imagens/menu_icones/tshirt.png" class="icone_img" style="margin-right: 10px;"> Meu Time </a>

<a id="idzin" href="consultar_comissao_tecnica.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;" >  <img width="20" src="../imagens/menu_icones/foot.png" class="icone_img" style="margin-right: 10px;"> Comissão Técnica</a>



      
    

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

           <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">SEJUVE</a>



<a id="voltar"  href="menu_time.php" style="float: right;">Voltar</a>

      </nav>





















<center><h1>Atletas do Meu Time</h1></center>








 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
      $("#rg_atleta").mask("999.999.999-W", {
        translation: {
          'W': {
            pattern: /[X0-9]/
          }
        },
        reverse: true
      }) });  


    </script>




  <?php
        $verifica = $_SESSION['login'][0];
          $seleciona = "SELECT equipeid_fk from equipe_evento where login ='{$verifica}'";
          $resus = mysqli_query($conexao, $seleciona);
          $verificaid = mysqli_fetch_row($resus);
          $str = implode($verificaid);
   ?>


  




<div class="bg_form shadow">


    <table class="table table-hover">
      <thead class="">
        <tr>
          <th>FOTO</th>
          <th>NOME</th>
          <th >DATA DE NASCIMENTO</th>
          <th >RG</th>
          <th >NATURALIDADE</th>
         
        </tr>
      </thead>
      <tbody>
        <?php
        
        
          $sql = "SELECT * FROM atleta where equipeid_fk = '{$str}'";
          $resultado = mysqli_query($conexao, $sql);
          while($dados = mysqli_fetch_array($resultado)){
        ?>
       
        <tr>

          <td ><?php echo "<img width='50' src='../imagens/".$dados['imagem_rg']."'/>";?></td>
          <td><?php echo $dados['nome_atleta'] ?></td>
          <td><?php echo $dados['data_nascimento_atleta'] ?></td>
          <td><?php echo $dados['rg_atleta'] ?></td>
          <td><?php echo $dados['naturalidade_atleta'] ?></td>
         
         
          
        </tr>















      <?php } ?>
      </tbody>
    </table>
    <br>
   









   




  </div>
<br>

<div style="width: 80%;margin-left: auto;margin-right: auto;">
<button id="btn_add_atleta" type="button" class="btn btn-success"data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;border-radius: 50px;width: 200px;">
<i class="fas fa-user-plus" ></i> Novo Atleta
</button>
</div>










<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

       <div class="modal-header" style="background-color: #fff;border:none !important;">
        <h3 class="modal-title " id="TituloModalCentralizado">Cadastrar Atleta</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <img width="15" src="../imagens/sistema/toast/close.png">
        </button>
      </div>


  <div class="modal-body">




  <form method="POST" action="../funcoes/cadastrar_atleta.php" enctype="multipart/form-data">


    <div class="form-row">
      
<div class="col">
  
<label>Nome:</label>
    <input type="text" name="nome_atleta" class="form-control"  required>

</div>



<div class="col">
  
<label>RG:</label>

        
        <input type="text" class="form-control" name="rg_atleta" id="rg_atleta" placeholder="000.000.000-0" aria-describedby="inputGroupPrepend2" required>

</div>



    </div>


<br>
<br>



    <div class="form-row">
      

<div class="col">
  

<label>Data de Nascimento:</label>
<input class="form-control" type="date" name="data_nascimento_atleta" placeholder="" aria-describedby="inputGroupPrepend2" required>



</div>


<div class="col">
  
  <label>Naturalidade:</label>
<input type="text" class="form-control" name="naturalidade_atleta" id="validationDefaultUsername" placeholder="Brasil" aria-describedby="inputGroupPrepend2" required>


</div>

    </div>


<br>
<br>


  













<div style="display: flex;align-items: center;justify-content: center;">
  <img width="200" id="pre_img" src="../imagens/sistema/pre_def.jpg">

</div>

<br>

  <input type="file" class="" id="real-file" name="imagem" onchange="previewImagem()" hidden="hidden" >
  <button class="btn btn-primary" type="button" id="custom-button" ><i class="fas fa-folder"></i>  Selecionar Arquivo</button>
 <span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>





    

















      <div class="modal-footer" style="border: none;">
      
          <button type="submit" class="btn btn-success" style="float: right;border-radius: 50px;width: 170px;" name="cadastrar">Cadastrar</button>

   
    
  </form>



</div>






  </div>
</div>
</div>
































 





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
































      
  
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


</body>
</html>



