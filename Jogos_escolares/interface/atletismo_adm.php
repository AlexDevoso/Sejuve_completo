<?php
session_start();
include "../funcoes/conexao.php";
//selecionando id da escola

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
background: #003061; 
box-shadow: 0 1px 6px 0 rgba(32,33,36,0.28);


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

body {

  background: url(../imagens/atle5.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

}


html, body {
  overflow: hidden;
}







</style>


  <title>Atletismo</title>

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
    <div class="" id="sidebar-wrapper" style="background-color: #003061;">
      <div class="sidebar-heading text-white">
        

<div style="display: flex;align-items: center;justify-content: center;">
        <img width="50" src="../imagens/sejuve_logo.png"><h2>Sejuve</h2>
</div>
        
      </div>
      <div class="list-group list-group-flush  ">
        <a id="idzin" href="#" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="escolas_jogos_escolares.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/notebook.png" style="margin-right: 10px;">    Escolas</a>

      

        <a id="idzin" href="alunos_jogos_escolares.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Alunos</a>

        <a id="idzin" href="modalidades.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/handball.png" style="margin-right: 10px;">  Modalidades</a>

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
























<center><h1 style="color: #fff;text-shadow: 1px 1px 1px #000;" >Atletismo</h1></center>


<div style="width: 90%;height: 40%!important; overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;background-color: #fff;" >


<table class="table table-hover" style="background-color: #fff;"> 

  <thead style="background-color:#fff;color: #000;">
    
    <tr>
      
<td>FOTO</td>
<td>NOME</td>
<td>RG</td>
<td>DATA NASCIMENTO</td>
<td>NAIPE</td>
<td>CATEGORIA</td>

    </tr>

  </thead>
  
  <tbody>
    <?php 
      
      $sqlEscola = "SELECT * FROM aluno join modalidade_individual where escola_id_fk = '$id' and modalidade_individualid_fk = '$idModalidade' and modalidade_individualid = '$idModalidade'";
      $resultado = mysqli_query($conexao, $sqlEscola);  
      $total = mysqli_num_rows($resultado);
      while($dados = mysqli_fetch_array($resultado)) {
      ?>
    <tr>
      
<td><?php echo "<img style='margin-bottom:20px;' width='50' src='../imagens/".$dados['imagem_aluno']."'/>"; ?></td>
<td><?php echo $dados['nome']; ?></td>
<td><?php echo $dados['rg']; ?></td>
<td><?php echo $dados['data_nascimento_aluno']; ?></td>
<td><?php echo $dados['categoria_mc']; ?></td>
<td><?php echo $dados['naipe_mc']; ?></td>




    </tr>
<?php 
}
?>
  </tbody>



</table>






  

</div>



<div style="width: 90%; margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;" >


<div class="shadow" style="width: 400px;height:150px;background-color: #fff;border-radius: 5px;padding: 20px;display: flex;align-items: center;justify-content: center;">
  

<div>
  
<img width="70" src="../imagens/cards/atle_c.png" style="margin-right: 20px;">

</div>


  <div>
  <center><h4>Total de Jogadores</h4></center>
  <center><h2> <?php echo $total;?>/20 </h2></center>
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
