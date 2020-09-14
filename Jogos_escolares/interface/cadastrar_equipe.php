<?php
  include "../funcoes/conexao.php";
  if (isset($_GET['idevento'])) {
  $idevento = mysqli_escape_string($conexao, $_GET['idevento']);
  $_SESSION['id'][0] = $idevento; 
  $sql = "SELECT * FROM evento where idevento = '$idevento'";
  $resultado = mysqli_query($conexao, $sql);
  
}
else{
  $a = $_SESSION['id'][0];
  $sql = "SELECT * FROM evento where idevento = '$a'";
  $resultado = mysqli_query($conexao, $sql);
}
?>
<!DOCTYPE html>
<html>

<head>

  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Icons -->
  <link href="fontawesome/css/all.css" rel="stylesheet">

  <!-- Awesome fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



  <title>Equipes Cadastradas</title>


  <style type="text/css">
body{
    font-family: "Nunito", Arial, sans-serif;
  }




 


  a {
    color: #fff;
  }
a:hover {
  color: #fff;
}

nav {
  background: #151719 !important;
}

span {
color: #fff;
}

#sidebar i {
   color: #2ed573;
   font-size: 20px;
   margin-right: 15px;

}

li {

  font-size: 14px;
}

li:hover {
  background-color: #3d3d3d;
  border-radius: 50px;
  
}

body {
  font-size: 0.9rem;
}


#head_sidenav {
  border-bottom: 1px solid #3d3d3d;
  margin-bottom: 20px ;
}


  * {

    margin: 0px;
    padding: 0px;
    
  }


  a {
    text-decoration: none;
    
  }

a:hover {

  text-decoration: none;
}


  #sidebar {
    position: fixed;
    width: 250px;
    height: 100%;
    background-color: #151719;
    left: 0px;
    transition: all 200ms linear;
    padding: 20px;
  


  }

  #sidebar ul li {

 
  list-style: none;
 
  }

  #sidebar li {
    margin:10px;
  }



.ct {

display: flex;
flex-flow: row nowrap;
justify-content: center;
align-items: center;


}


.ct_menu {

display: flex;

align-items: center;


}


.card_ {

  width: 300px;
  height: 100px;

  margin:10px;
  border-radius: 5px;
  background-color: #2ecc71;
  display: flex;
flex-flow: row nowrap;
justify-content: center;
align-items: center;
}

.card_ct {

  display: flex;
flex-flow: row nowrap;
justify-content: center;
align-items: center;
}

.icone_img {

  margin: 10px;
}


#ctn {

display: flex;
flex-flow: row nowrap;
width: 100%;

}


    .bg_form {

    

    width: 70%;
    float: right;
    padding-right: 100px ; 



    }

    .content-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      border-radius: 5px;
      overflow-x: auto;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      white-space: nowrap;
      display: block;



    }


    .content-table thead tr {

      color: #ffffff;
      text-align: center;


    }

    .content-table th,
    .content-table td {
      padding: 12px 15px;

    }

    .content-table td {
      font-size: 15px;

    }

    .content-table th {
      font-size: 20px;
      font-weight: 1;    }







    .content-table tbody tr {
      border-bottom: 1px solid #dddddd;

    }

    .content-table tbody tr:nth-of-type(even) {

      background-color: #f3f3f3;
    }


    .content-table tbody tr:last-of-type {
      border-bottom: 1px solid #009879;
    }







  </style>

</head>

<body>

  <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>











 


<script type="text/javascript">
  
  $('.content-table').perfectScrollbar();
</script>

 <nav class="navbar navbar-expand-lg fixed-top " >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-white" href="#">Sejuve</a>

    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">


   
      <li class="nav-item">
        <a class="nav-link text-white" href="adm.php">Área Administrativa</a>
      </li>
     
    </ul>
   
  </div>
</nav>

<div style="width: 100%;height: 50px;"></div>


  <div id="sidebar" >




  <ul>

<div id="head_sidenav">
    <center><img style="margin :10px;" width="140" src="../imagens/sejuve_logo.png"></center>
</div>


<li onclick="window.location='area_adm.php';" > <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/home1_.png" class="icone_img">  <a href="area_adm.php"> HOME</a></div>  </li>


<li  onclick="window.location='lista_de_eventos.php';"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/eventos2_.png" class="icone_img"> <a href="lista_de_eventos.php">EVENTOS</a>   </div></li>

<!--<li onclick="window.location='times_cadastrados.php';"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/tshirt.png" class="icone_img"><a href="times_cadastrados.php"> TIMES</a> </div></li>-->

<li onclick="window.location='atletas_database.php';"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/male.png" class="icone_img"><a href="atletas_database"> ATLETAS</a> </div></li>

<li> <div class="ct_menu">   <img width="20" src="../imagens/menu_icones/sair1_.png" class="icone_img"> <a href="lista_de_eventos.php"> SAIR</a> </div></li>






  </ul>
  

</div>

<div style="width: 100% ;height: 50px;"></div>



  <center>
    <h1>Equipes Cadastradas</h1>
  </center>



  <div class="bg_form">
    <h5 class="modal-title" id="exampleModalLabel" style="color: #fff !important;">Adicionar Equipe</h5>
    

    <br>



<form action="../funcoes/cadastrar_equipe.php" method="POST" enctype="multipart/form-data">
<?php 
  while($dados = mysqli_fetch_array($resultado)){

?>
<input type="hidden" name="idevento" value="<?php echo $dados['idevento']; ?>">
<?php 
}
?>

  <div class="form-row">
    <div class="col ">
    

      <label>Nome da Equipe:</label>
<br>
<input type="text" name="nomeequipe" class="form-control">
<br>
    </div>
    <div class="col">
      


      <label>Logo da Equipe:</label>
<br>

<div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="logoequipe">
  <label class="custom-file-label" for="customFile">Nome do Arquivo...</label>
</div>
 <br>

    </div>
  </div>






<div class="form-row">
    <div class="form-group col-md-6">
      <label>Nome do Responsável:</label>
<br>
<input type="text" name="nomeresponsavel" class="form-control">
<br>
</div>



<div class="form-group col-md-6">



<label>RG do Responsável:</label>
<div class="input-group">

          <br>
        <div class="input-group-prepend">

          <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-id-badge"></i></span>
        </div>
        
        <input type="text" class="form-control" name="rgresponsavel" id="validationDefaultUsername" placeholder="0000000-0" aria-describedby="inputGroupPrepend2" required>
      </div>


</div>

    </div>
  





<div class="form-row">

<div class="form-group col-md-6">
  

<label>Naturalidade:</label>
<div class="input-group">

          <br>
        <div class="input-group-prepend">

          <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-map-marker-alt"></i></span>
        </div>
        
        <input type="text" class="form-control" name="naturalidade" id="validationDefaultUsername" placeholder="Brasil" aria-describedby="inputGroupPrepend2" required>
      </div>



</div>



<div class="form-group col-md-6">

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
        
        <input type="text" class="form-control" name="telefone" id="validationDefaultUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>




















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

          <span class="input-group-text" id="inputGroupPrepend2">

            <i class="fas fa-lock"></i></span>
        </div>
        
        <input type="text" class="form-control" name="senha" id="validationDefaultUsername" placeholder="Senha" aria-describedby="inputGroupPrepend2" required>
      </div>


    </div>
  </div>




<button type="submit" class="btn btn-success" style="border-radius: 50px;width: 150px;float: right;margin: 10px;margin-bottom: 100px;" name="cadastrar">Salvar</button>
</form>
<p>*Atenção!Preencha todos os campos corretamente.</p>








 

  </div>


  <div style="width: 100% ;height: 100px;"></div>






  <div style="width: 100% ;height: 100px;"></div>
</body>

</html>