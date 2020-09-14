<?php
  session_start();
  include "verifica_login.php";
  include "conexao.php";
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

<style type="text/css">
  

  nav {
background: #396afc; 
background: -webkit-linear-gradient(to right, #2948ff, #396afc); 
background: linear-gradient(to right, #2948ff, #396afc); 


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

background-color: #4f63db !important;



}


#voltar:hover {
   width: 100px !important;
   text-align: center;
   border-radius: 50px;
   background-color: #445df2;
}

#voltar {
   width: 100px !important;
   text-align: center;
}


.bg_form_2 {
width: 80%;
margin-right: auto; 
margin-left: auto;

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

td {
  text-align: center !important;
}






</style>


  <title>Editar Comissão Técnica</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <div class="" id="sidebar-wrapper" style="background-color: #2948ff;">
      <div class="sidebar-heading text-white">Sejuve</div>
      <div class="list-group list-group-flush  ">
        <a id="idzin" href="#" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="lista_de_eventos.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/competicao.png" style="margin-right: 10px;">  Eventos</a>

        <a id="idzin" href="atletas_database.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Atletas</a>

         <a id="idzin" href="#" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/off.png" style="margin-right: 10px;">  Sair</a>

    

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg ">
        <button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>


         <a style="" class="nav-link" href="#">Sejuve</a>


        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a id="voltar" style="" class="nav-link" href="#">Voltar <span class="sr-only">(current)</span></a>
            </li>
          
        
          </ul>
        </div>
      </nav>
























  <center><h1>Editar Comissão Técnica</h1></center>


<div style="width: 80%;height: border-radius: 5px;padding: 40px;margin-left: auto;margin-right: auto;" class="shadow">



<?php
  if (isset($_GET['comissao_tecnicaid'])) {
  $comissao_tecnicaid = mysqli_escape_string($conexao, $_GET['comissao_tecnicaid']);
  $sql = "SELECT * FROM comissao_tecnica where comissao_tecnicaid = '$comissao_tecnicaid'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_array($resultado);
}
?>










   <form action="editar_comissao_tecnica.php" method="POST">
    <input type="hidden" name="comissao_tecnicaid" value="<?php echo $dados['comissao_tecnicaid'] ?>">











<div class="form-row">
    <div class="col">



    <label for="nome_">Nome:</label><br>
    <input type="text" name="nome" id="nome" class="form-control"> value="<?php echo $dados['nome'] ?>">

    
         
    </div>








    <div class="col">

       <select class="custom-select" name="funcao" id="funcao" style="float: right;">
      <option value="" disabled selected>Função</option>
        <option value="Técnico">Técnico</option>
        <option value="Massagista">Massagista</option>
        <option value="Auxíliar">Auxíliar</option>
      
    </select>

      
    </div>
  </div>


























    
  



    <button class="btn btn-success" type="submit" name="editar" style="float: right;margin: 5px;border-radius: 50px;width: 170px;">
      Atualizar</button>

     



    

   
  </form>






  

</div>










































      
  
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
