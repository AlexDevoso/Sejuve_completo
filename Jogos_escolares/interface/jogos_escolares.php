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
<link rel="stylesheet" type="text/css" href="../css/style_jogos_escolares.css">



<title>Jogos Escolares</title>

</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 
 




<!--CONTAINER-->
<div class="cot_hj">

<!--DIV 1-->  
<div>


<!--BARRA LATERAL-->
<div id="sidebar" >
<ul>

  <p style="color: #fff;text-align:center;font-size: 15px;font-weight:200 !important;" >Sistema do<br>Jogos Escolares 2020</p>

<hr style="background-color: #3d3d3d;">
<div id="head_sidenav">
<center><img style="margin :10px;" width="140" src="../imagens/sejuve_logo.png"></center>
</div>

<li> <a href="area_adm.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/home1_.png" class="icone_img">  HOME</div>  </a></li>

<li> <a href="cadastrar_escolas_ui.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/cadastrar.png" class="icone_img">ESCOLAS</div>  </a></li>

<hr style="background-color: #3d3d3d;">

<li> <a href="../funcoes/logout_adm.php"> <div class="ct_menu">   <img width="20" src="../imagens/menu_icones/sair1_.png" class="icone_img"> SAIR </div></a></li>

</ul>
</div>
<!--FECHA BARRA LATERAL-->
</div>




<!--DIV 2-->
<div  style="width: 100%;padding:0px 15px px 0px;overflow-y: auto;">
    <!--NAVBAR-->
<nav class="navbar navbar-expand-lg shadow "  >
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
  
<center><h1 style="margin: 20px;">Jogos Escolares - Escolas Cadastradas</h1></center>

<div class="bg_form shadow">
<!--TABELA -->
<table class="table table-hover">
<thead style=" border-bottom: none !important;">

<tr>
  
<td>LOGO</td>
<td>ESCOLA</td>
<td>ENTRAR</td>
<td>EDITAR</td>
<td>DELETAR</td>


</tr>
  
</thead>  


<tbody>
  
<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="#" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="editar_escola.php" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>





<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>




<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>




<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>


<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>


<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>



<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>




<tr>

<td><img width="50" src="../imagens/sejuve_logo.png"></td>

<td>EEEP Alan Pinho Tabosa</td> 

<td style="text-align: center;"><a style="color:#000;" class="btn btn-success" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-primary" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff !important;" class="fas fa-edit"></i></a></td>

<td style="text-align: center;"><a style="color:#000;" class="btn btn-danger" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-trash"> </i></a></td>


</tr>


</tbody>
</table>
<!--FECHA TABELA-->
</div>


<div class="bg_form_2">
<!--BTN DE ATIVAR O MODAL DE CADASTRAR ESCOLA-->
<button class="btn btn-success" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;border-radius:50px;margin-top: 20px;width: 170px; "> Adicionar Escola</button>
</div>



<!--MODAL DE CADASTRAR ESCOLA-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style=" background-color: #fff !important;color: #151719 ;border:none;">
        <h3 class="modal-title" id="exampleModalLabel">Cadastrar Equipe</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img width="15" src="../imagens/sistema/toast/close.png">
        </button>
      </div>
      <div class="modal-body">

<form  enctype="multipart/form-data">

<!-- G_I_1  2 Inputs em uma linha -->
<div class="form-row">
<div class="col ">
<label>Nome da Escola:</label>
<br>
<input type="text" name="nomeequipe" class="form-control">
<br>
</div>


<div class="col">   
<label>Logo da Escola:</label>
<br>
<input type="file" class="" id="real-file" name="logoequipe"  hidden="hidden" >
<button class="btn btn-primary" type="button" id="custom-button" ><i class="fas fa-folder"></i>  Selecionar Arquivo</button>
<span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>
<br>
</div>
</div>
<!--FECHA AQUI G_I_1-->


<!-- G_I_2  2 Inputs em uma linha -->
<div class="form-row">
<div class="col">
<label>Nome do Diretor:</label>
<br>
<input type="text" name="nomeresponsavel" class="form-control">
<br>
</div>


<div class="col">
<label>INEP:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-id-badge"></i></span>
</div>
<input type="text" class="form-control" name="rgresponsavel" id="rg" placeholder="000.000.000-0" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_2-->


<!-- G_I_3  2 Inputs em uma linha -->
<div class="form-row">
<div class="col">
<label>Naturalidade:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-map-marker-alt"></i></span>
</div>
<input type="text" class="form-control" name="naturalidade" id="validationDefaultUsername" placeholder="Brasil" aria-describedby="inputGroupPrepend2" required>
</div>
</div>


<div class="col">
<label>Endereço:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-map-marked-alt"></i></span>
</div>
<input type="text" class="form-control" name="endereco" id="validationDefaultUsername" placeholder="Rua" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_3-->

<!-- G_I_4  2 Inputs em uma linha -->
<div class="form-row">
<div class="col ">
<label>E-mail:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-envelope"></i></span>
</div>
<input type="email" class="form-control" name="email" id="validationDefaultUsername" placeholder="exemplo@email.com" aria-describedby="inputGroupPrepend2" required>
</div>
</div>


<div class="col">
<label>Telfone:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-phone"></i></span>
</div>
<input id="telefone" type="text" class="form-control" name="telefone"  id="telefone" placeholder="(00) 00000-0000" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_4-->

<!-- G_I_5  2 Inputs em uma linha -->
<div class="form-row">
<div class="col ">
<label>Login:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
</div>
<input type="text" class="form-control" name="login" id="validationDefaultUsername" placeholder="Login" aria-describedby="inputGroupPrepend2" required>
</div>
</div>


<div class="col">
<label>Senha:</label>
<div class="input-group">
<br>
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-lock"></i></span>
</div>
<input type="text" class="form-control" name="senha" id="validationDefaultUsername" placeholder="Senha" aria-describedby="inputGroupPrepend2" required>
</div>
</div>
</div>
<!--FECHA AQUI G_I_5-->

<!-- BOTÃO CADASTRAR DO FORM -->
<button  type="submit" name="cadastrar" class="btn btn-success" style="float: right;border-radius: 50px;width:170px;margin: 10px;margin-top:20px; " >Cadastrar</button>
<!-- FECHA O BTN DO FORM-->


</form>
</div>
</div>
</div>
</div>
<!--FECHA MODAL CADASTRAR-->

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