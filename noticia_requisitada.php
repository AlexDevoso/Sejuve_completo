<?php
  include "./Jogos_escolares/funcoes/conexao.php";
    if(isset($_GET['id_no'])){
        $id_no = $_GET['id_no'];
    }
    $sql_no = "SELECT * from noticia where id_no = '$id_no'";
    $resultado_no = mysqli_query($conexao, $sql_no);
    $dados_no = mysqli_fetch_array($resultado_no);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style_home.css">
  <title>Sejuve</title>


<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="C932Sa19"></script>

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
  }
 a:hover{
    color:#00ffff!important;
 }
</style>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="x1i3DTJK"></script>


<div id="nv" class="sticky-top ">
<nav  class="navbar navbar-expand-lg navbar navbar-dark " id="nav" >
  <a class="navbar-brand" href="#">
  <img src="./Jogos_escolares/imagens/sistema/logo_login_user.png" width="50" height="50" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php ">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown dropright ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Eventos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="eventos.html">Calendário</a>
          <a class="dropdown-item" href="./noticia.php">Notícia</a>
          <a class="dropdown-item" href="./Jogos_escolares/">Jogos Escolares</a>
          <a class="dropdown-item" href="./Jogos_escolares/interface/jogos.php">Futebol Municipal</a>
        </div>
      </li>
      <li class="nav-item dropdown dropright">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sobre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="equipe.php">Equipe da Sejuve</a>
          <a class="dropdown-item" href="#">Seleções municipais</a>
          <a class="dropdown-item" href="Jogos_escolares/interface/adm.php">Administrativo</a>
          <a class="dropdown-item" href="sejuve_sobre.php">Contato</a>
          
        </div>
      </li>
    </ul>
    
  </div>
</nav>
</div>
<div style="margin-left:5%; margin-top:25px;">
</div>


<div class="card mb-3 border-0 bg-transparent" style="max-width: 1200px; margin:auto; height:400px;!important;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <?php 
        echo '<img src="./imagem/'.$dados_no['imagem_no'].'" class="card-img" alt="..." style="width:400px; height:400px;">'
      ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $dados_no["titulo_no"];?></h5>
        <p class="card-text text-white"><?php echo $dados_no["descricao_no"];?></p>
        <p class="card-text">
        <?php
        echo '<a class="text-dark btn bg-warning" href='.$dados_no['link_no'].'>Ver na rede social  <a>'
        ?>
          <a class="text-white btn bg-primary " href="./noticia.php">Voltar</a>
          </p>
      </div>
      
    </div>
  
  </div>

</div>


<div style="margin-top:20px">
</div>        

<div style="margin-top:500px;">
</div>

<footer style="position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
 
  color: white;
  text-align: center;">
  <div>
   <center><p  style="color: #fff;font-size: 15px;text-align: center;">©  Copyright 2020 SEJUVE - Secretaria de Esporte e Juventude Municipal de Pentecoste.</p></center>
  </div>

</footer>

<script src="./js/scroll.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>