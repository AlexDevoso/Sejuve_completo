<?php
session_start();
include "../funcoes/conexao.php";
include "../funcoes/mensagem.php";
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
   border-radius: 100px;
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

.btn-verde {
  background: #38ef7d !important;  /* fallback for old browsers */


color: #fff;
border-radius: 50px !important;
border: none;
height: 50px;
font-size: 18px;
width: 200px !important;


}





#btn_cd_at {

width: 200px;
height: 40px;
border-radius: 50px;
margin:20px;
border:none;
color: #fff;
background: #38ef7d;  /* fallback for old browsers */
}

td {
  text-align: center;
}

form {
  display: flex;
  align-items: center !important;
}


#nav_sejuve:hover {

text-decoration:none;
 }


.table td, .table th {

    border-top: none!important;
    border-bottom: none !important;

}

tr {

}

td {

  text-align: center !important;

}
th {
  text-align: center !important;
  font-weight: 600;
}
</style>


  <title>Cadastrar</title>

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
    <div class="" id="sidebar-wrapper" style="background-color:#2F80ED;">
      <div class="sidebar-heading text-white">
        

        <div style="display: flex;">
        <img width="50" src="../imagens/sejuve_logo.png" style="float: left ;"><h2 style="float: right !important;">Sejuve</h2>
</div>



      </div>
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

       <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">Jogos Escolares</a>



<a id="voltar"  href="../funcoes/logout.php" style="float: right;">Sair</a>

      </nav>

























<center><h1>Cadastrar Escolas</h1></center>


<div style="width: 90%;height: 30%!important; overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;" class="shadow">





    <table class="table table-hover" >
      <thead class="" style="">
        <tr class="">
          <th>LOGO</th>
          <th>NOME DO EVENTO</th>
          <th>MODALIDADE</th>
          <th>DATA</th>
          <th>ENTRAR</th>
          <th>EDITAR</th>
          <th>EXCLUIR</th>
          
        </tr>
      </thead>
      <tbody>
      
        <tr class="active-row">
          <td></td>
          <td></td>
          <td></td>
          <td></td>

      <td style="text-align: center;"><a style="color:#000;" class="btn btn-dark" href="" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>
        
          <td style="text-align: center;"><a class="btn btn-primary" href=""><i style="color: #fff !important;" class="fas fa-pen"></i></a></td>


          <form action="../funcoes/deletar_evento.php" method="POST" >
            <input type="hidden" name="idevento" value="">
          <td style="text-align: center;"> <button class="btn btn-danger" type="submit" name="delete"><i style="color: #fff !important;" class="fas fa-trash" ></i></button></td>
          </form>
         

            
        </tr>

      </tbody>
<br>


 
    </table>

































<div >


<form action="../funcoes/cadastrar_escola.php" method="POST" enctype="multipart/form-data">

  <div class="form-row">
    <div class="col">
      
<label>Nome:</label>
<input type="text" class="form-control" name="nome_escola">

    </div>

<div class="col">
  <label>INEP:</label>
  <input type="text" class="form-control" name="inep">
</div>

  </div>











    <div class="form-row">
    <div class="col">
      
<label>Login:</label>
<input type="text" class="form-control" name="login_escola">

    </div>

<div class="col">
  <label>Senha:</label>
  <input type="text" class="form-control" name="senha_escola">
</div>

  </div>













  <div class="form-row">

<div class="col">
  
<label>Logo:</label>
<input type="file" name="imagem_escola">

</div>

  </div> 
  
<button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>

</form>





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
