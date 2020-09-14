<html>
<head>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!--Icons -->
<link href="fontawesome/css/all.css" rel="stylesheet">

<!-- Awesome fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!--FONTE USADA NO SITE-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 

<!--FAVICON-->
<link rel="shortcut icon" type="image/x-icon" href="../imagens/sistema/fav_icon/fav_icon.ico">

<!--FOLHA DE ESTILO-->
<link rel="stylesheet" type="text/css" href="../css/style_menu_user_jogos_escolares.css">



<title>Bem-Vindo!</title>

</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!--NAVBAR-->
<nav class="navbar navbar-expand-lg bg-primary shadow "  >
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<a class="navbar-brand text-white" href="#">Jogos Escolares</a>
<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<li class="nav-item">
<a id="voltar_h" class="nav-link text-white" href="lista_de_eventos.php">Voltar</a>
</li>
</ul>
</div>
</nav>
<!--FECHA NAVBAR-->


 
 




<!--CONTAINER-->
<div class="cot_hj">

<!--DIV 1-->  
<div>


<!--BARRA LATERAL-->
<div id="sidebar" >
<ul>

  <p style="color: #fff;text-align:center;font-size: 15px;font-weight:200 !important;" >Sistema do<br>Jogos Escolares 2020</p>


<div id="head_sidenav">

</div>

<li> <a href="area_adm.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/home1_.png" class="icone_img">  HOME</div>  </a></li>

<li> <a href="minha_escola.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/cadastrar.png" class="icone_img">MINHA ESCOLA</div>  </a></li>

<li> <a href="cadastrar_aluno.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/aluno_.png" class="icone_img">CADASTRAR ALUNO</div>  </a></li>

<hr style="background-color: #fff;">

<li> <a href="../funcoes/logout_adm.php"> <div class="ct_menu">   <img width="20" src="../imagens/menu_icones/sair1_.png" class="icone_img"> SAIR </div></a></li>

</ul>
</div>
<!--FECHA BARRA LATERAL-->
</div>




<!--DIV 2-->
<div  style="width: 100%;background-color:;margin: 10px;border-radius: 10px;">








</div>






</div>
<!--FECHA O CONTAINER-->

<!--SCRIPT DE MOSTRAR A NOTIFICAÇÃo-->
<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
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

</body>
</html>