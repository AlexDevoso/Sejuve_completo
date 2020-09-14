<?php
session_start();
include "../funcoes/conexao.php";
include "../funcoes/verifica_login_adm.php";
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


  <title>Gerenciar Modalidades</title>

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

      

        <a id="idzin" href="alunos_jogos_escolares.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Alunos</a>

        <a id="idzin" href="gerenciar_modalidades_jogos_escolares.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Gerenciar Modalidades</a>

         <a id="idzin" href="../funcoes/logout.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/off.png" style="margin-right: 10px;">  Sair</a>

    

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
























<center><h1>Gerenciar Modalidades</h1></center>


<div style="width: 80%;margin-left: auto;margin-right: auto;">
<h3>Coletivas</h3>
</div>
<div style="width: 80%;height: 20%!important; overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;" class="shadow">





  <table class="table table-hover">
    
<thead>
  

<tr> 

<td>Nome</td>
<td>Excluir</td>
<td>Adicionar</td>
  </tr>

</thead>


<tbody>
  


<tr>

  <td>Basquete</td>
  <td><a href="" class="btn btn-danger shadow"><i class="fas fa-trash"></i></a></td>
  <td><a href="" class="btn btn-success shadow" data-toggle="modal" data-target="#ExemploModalCentralizado"> <i class="fas fa-plus"></i></a></td>



</tr>

</tbody>



  </table>







  

</div>

<br>
<br>

<div style="width: 80%;margin-left: auto;margin-right: auto;">
<h3>Individuais</h3>
</div>
<div style="width: 80%;height: 20%!important; overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;" class="shadow">


  <table class="table table-hover">
    
<thead>
  

<tr> 

<td>Nome</td>
<td>Excluir</td>
<td>Adicionar</td>
  </tr>

</thead>


<tbody>
  


<tr>

  <td>Atletismo</td>
  <td><a href="" class="btn btn-danger shadow"><i class="fas fa-trash"></i></a></td>
  <td><a href="" class="btn btn-success shadow" data-toggle="modal" data-target="#ExemploModalCentralizado2"> <i class="fas fa-plus"></i></a></td>



</tr>

</tbody>



  </table>


</div>







<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border:none!important;">
        <h3 class="modal-title" id="TituloModalCentralizado">Cadastrar Modalidade Coletiva</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          
          <img width="15" src="../imagens/sistema/toast/close.png">

        </button>
      </div>
      <div class="modal-body">
      
<form>
  
<label>Nome:</label>
<input type="text" name="modalidade_i" class="form-control">
<br>
<button type="submit" class="btn btn-success" style="width: 170px;border-radius: 50px;float: right;">Adicionar</button>


</form>



      </div>
      
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado2" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border:none!important;">
        <h3 class="modal-title" id="TituloModalCentralizado">Cadastrar Modalidade Individual</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          
          <img width="15" src="../imagens/sistema/toast/close.png">

        </button>
      </div>
      <div class="modal-body">
      
<form>
  
<label>Nome:</label>
<input type="text" name="modalidade_i" class="form-control">
<br>
<button type="submit" class="btn btn-success" style="width: 170px;border-radius: 50px;float: right;">Adicionar</button>


</form>



      </div>
      
    </div>
  </div>
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
