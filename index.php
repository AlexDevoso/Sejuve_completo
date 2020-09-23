<?php
  include "./Jogos_escolares/funcoes/conexao.php";

  $sql_np = "SELECT * from noticia join noticia_painel where id_no = fk_noticia";
  $resultado_np = mysqli_query($conexao, $sql_np);


  $sql_sele = "SELECT * from selecoes_municipais where imagem4_sm != 'null'";
  $resultado_sele = mysqli_query($conexao, $sql_sele);
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
    font-weight:bold;
  }
  h5{
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
        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown dropright ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Eventos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="eventos.html">Calendário</a>
          <a class="dropdown-item" href="noticia.php">Notícia</a>
          <a class="dropdown-item" href="Jogos_escolares/">Jogos Escolares</a>
          <a class="dropdown-item" href="Jogos_escolares/interface/jogos.php">Futebol Municipal</a>
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


<div class="card mb-3 "  id="painelSejuve">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="./Jogos_escolares/imagens/sistema/logo_login_user.png" class="card-img" alt="..." id="imgSejuve">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title font-weight-bold" id="titulo">Secretaria de Esporte e Juventude de Pentecoste</h5>
        <p class="card-text" id="texto">A prática esportiva também ajuda num mundo melhor com tudo de bom que traz para nós: saúde, auto-estima, espírito de equipe, objetivos, entre outros atributos que com certeza, vem junto com o esporte...
"Gustavo Borges".
        </p>
        
      </div>
    </div>
  </div>
</div>


<div class="shadow-lg p-3 mb-5 rounded" style="width: 60%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Informativo Sejuve.</p>
</div>

<?php
  
  $a = 1;
  while($dados = mysqli_fetch_array($resultado_np)){

  if($a == 1){
?>

<div class="" style="width: 90%; margin: auto; margin-top: 6%;" >
<div class="card-deck " style="width: 99%; margin: auto; margin-top: 1%; ">
  <div class="card bg-transparent border-0 text-white">
  <?php
    echo "<img id='img_card' class='card-img-top' src='./imagem/".$dados['imagem_no']."'>";
  ?>
    
    <div class="card-body">
      <h5 class="card-title text-uppercase font-weight-bold"><?php echo $dados['titulo_no']?></h5>
      <p class="card-text text-uppercase"><?php echo substr($dados['descricao_no'],0, 100)."..."?></p>
      <?php echo "<a href='".$dados['link_no']."' class='btn btn-primary'>Mais sobre</a>"?>
      <?php echo '<div class="fb-share-button" data-href="'.$dados['link_no'].'" data-layout="button_count" data-size="small"><a target="_blank" href="'.$dados['link_no'].'" class="fb-xfbml-parse-ignore">Compartilhar</a></div>'?>
    </div>
  </div>
  
  
  

<?php
    $a++;
    
  }
  
  elseif($a > 1 && $a < 4){
?>
<div class="card bg-transparent border-0 text-white">
<?php
    echo "<img id='img_card' class='card-img-top' src='./imagem/".$dados['imagem_no']."'>";
  ?>
    <div class="card-body">
      <h5 class="card-title text-uppercase font-weight-bold"><?php echo $dados['titulo_no']?></h5>
      <p class="card-text text-uppercase"><?php echo substr($dados['descricao_no'],0, 100)."..."?></p>
      <?php echo "<a href='".$dados['link_no']."' class='btn btn-primary'>Mais sobre</a>"?>
      <?php echo '<div class="fb-share-button" data-href="'.$dados['link_no'].'" data-layout="button_count" data-size="small"><a target="_blank" href="'.$dados['link_no'].'" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
'?>
    </div>
  </div>
<?php
$a++;
  }
  elseif($a == 4){
  ?>
</div>
<div class="card-deck " style="width: 99%; margin: auto; margin-top: 1%;">
  <div class="card bg-transparent border-0 text-white">
  <?php
    echo "<img id='img_card' class='card-img-top' src='./imagem/".$dados['imagem_no']."'>";
  ?>
    <div class="card-body">
      <h5 class="card-title text-uppercase font-weight-bold"><?php echo $dados['titulo_no']?></h5>
      <p class="card-text text-uppercase"><?php echo substr($dados['descricao_no'],0, 100)."...";?></p>
      <?php echo "<a href='".$dados['link_no']."' class='btn btn-primary'>Mais sobre</a>"?>
      <?php echo '<div class="fb-share-button" data-href="'.$dados['link_no'].'" data-layout="button_count" data-size="small"><a target="_blank" href="'.$dados['link_no'].'" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
'?>
    </div>
  </div>
<?php
$a++;
}
else{


?>

<div class="card bg-transparent border-0 text-white">
<?php
    echo "<img id='img_card' class='card-img-top' src='./imagem/".$dados['imagem_no']."'>";
  ?>
    <div class="card-body">
      <h5 class="card-title text-uppercase font-weight-bold"><?php echo $dados['titulo_no']?></h5>
      <p class="card-text text-uppercase"><?php echo substr($dados['descricao_no'],0, 100)."..."?></p>
      <?php echo "<a href='".$dados['link_no']."' class='btn btn-primary'>Mais sobre</a>"?>
      <?php echo '<div class="fb-share-button" data-href="'.$dados['link_no'].'" data-layout="button_count" data-size="small"><a target="_blank" href="'.$dados['link_no'].'" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
'?>
      
    </div>
  </div>
<?php
}

}

?>
</div>

<div style="margin-left:45%!important;">
<button  class="btn btn-primary text-uppercase" style="font-size: 20px!important;"><a href="noticia.php" class="text-white">Ver mais <a></button>
</div>
</div>



<div class="shadow-lg p-3 mb-5 rounded" style="width: 60%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Seleções Municipais.</p>
</div>

<div class="container" id="contSele">
<div class="card-group" >

<div class="row">

<?php
  while($dados_sele = mysqli_fetch_array($resultado_sele)){
?>

<div class="col-sm-4" id="div_sele">
<div class="card bg-transparent text-white" id="card_sele" style="width: 17rem; border:none; margin-left:50px;">
  <?php
  echo'<img src="./imagem/'.$dados_sele['imagem4_sm'].'" id="img_card" class="card-img-top"  style="border-radius:50%;">';
  ?>
  <div class="card-body">
    <h5 class="card-title text-uppercase font-weight-bold"><?php echo $dados_sele['modalidade_sm']." ".$dados_sele['naipe_sm']; ?> </h5>
    <p class="card-text text-uppercase"><?php echo $dados_sele['desc4_sm'] ?></p>
    <p ><a href="#" class="btn btn-primary ">Mais sobre</a></p>
  </div>
</div>
</div>
<?php
  }
?>
</div>
    </div>

    <div class="shadow-lg p-3 mb-5 rounded" style="width: 60%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Time Sejuve.</p>
</div>

<div>
<div class="card mb-3 bg-transparent border-0">
  <img src="./imagem/sejuve.jpg" class="card-img-top" alt="...">
  <div class="card-body text-white text-uppercase">
    <h5 class="card-title font-weight-bold">Conheça o time da Secretaria</h5>
    <p class="card-text">Assim como jogadores que a cada partida dão seu melhor, nosso time a cada dia faz o melhor para o esporte e a juventude de Pentecoste.</p>
    <p class="card-text text-capitalize "><small><a href="./equipe.php" class="btn btn-primary">Escalação</a></small></p>
  </div>
</div>
<div>

<div class="shadow-lg p-3 mb-5 rounded" style="width: 60%; margin: auto; margin-top: 6%;" id="info">
<p class="text-center font-weight-bold text-uppercase" style="font-size: 30px!important" >Fala Jovem.</p>
</div>

<div>
<div class="card mb-3 bg-transparent border-0" >
  <img src="./imagem/falajovem.jpeg" class="card-img-top" alt="..." height="600">
  <div class="card-body text-white text-uppercase">
    <h5 class="card-title font-weight-bold">Deixe suas sugestões e ajude a construir um Pentecoste melhor.</h5>
    <p class="card-text"></p>
    <p class="card-text text-capitalize "><small><a href="https://forms.gle/XrPumZZDZYYDt4zG6" class="btn btn-primary">Click aqui</a></small></p>
  </div>
</div>
<div>

<div style="margin-top:10px;">

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