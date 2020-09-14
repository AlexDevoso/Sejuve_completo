<?php
  session_start();
  include "../funcoes/conexao.php";
  include "../funcoes/mensagem.php";
?>
<html>
<head>




 <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">






     <meta charset="utf-8">


    

    <!--Icons -->
      <link href="fontawesome/css/all.css" rel="stylesheet">

      <!--Icons -->
      <link href="fontawesome/css/all.css" rel="stylesheet">

        <!-- Awesome fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <!-- Awesome fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        
       
      


        <title>Adicionar Comissão Técnica</title>
<style type="text/css">



</style>


      
</head>
<body>
 <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-white" href="menu_time.php">Sejuv</a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
   
      <li class="nav-item">
        <a class="nav-link text-white" href="consultar_comissao_tecnica.php">Voltar</a>
      </li>
     
    </ul>
   
  </div>
</nav>
<div style="width: 100%;height: 50px;"></div>







<center><h1>Cadastrar Comissão Técnica</h1></center>








  <div id="bg_form"  style="width:600px ;">
   <form action="cadastrar_comissao_tecnica.php" method="POST">
   
    <label for="nome_">Nome:</label><br>
    <input type="text" name="nome" id="nome" >

    
    <select class="custom-select" name="funcao" id="funcao" style="float: right;">
      <option value="" disabled selected>Função</option>
        <option value="Técnico">Técnico</option>
        <option value="Massagista">Massagista</option>
        <option value="Auxíliar">Auxíliar</option>
      
    </select>

<br>
<br>
    <button id="btn_cdt" name="cadastrar" type="submit" class="btn btn-success" style="float: right;">Cadastrar</button>
  </form>
<div style="width: 100%;height: 100px;"></div>
</body>
</html>

