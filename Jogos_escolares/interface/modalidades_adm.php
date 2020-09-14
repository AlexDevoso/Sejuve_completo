<?php
session_start();
include "../funcoes/conexao.php";
include "../funcoes/verifica_login_adm.php";
if(isset($_GET['escola_id'])){
  $escola_id = $_GET['escola_id'];
}
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


#div1 {

  background-color: #c0392b;

}

#div2 {

  background-color: #2ecc71;


}


#div3 {

background: #2F80ED; 

}

#div4 {
background: #FFC837; 

}

#div5 {
  background: #DA4453;  

}

#div6 {
  background-color: #2c3e50;
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
   text-decoration:none;
}
#nav_sejuve:hover {

text-decoration:none;
 }

  @media (max-width: 576px) { 

#div1 {
  width: 100% !important;
}

#div2 {
 width: 100% !important;
}

#div3 {
 width: 100% !important;
}

#div4 {
 width: 100% !important;
}

#div5 {
  width: 100% !important;
}

#div6 {
  width: 100% !important;

}

#tm {
  font-size: 25px !important;
  
}




 }




</style>


  <title>Modalidades Jogos Escolares</title>

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
        <a id="idzin" href="home_jogos_escolares_adm.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="escolas_jogos_escolares.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/notebook.png" style="margin-right: 10px;">    Escolas</a>

      

        


         

         <a id="idzin" href="../funcoes/logout_adm.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/off.png" style="margin-right: 10px;">  Sair</a>

    

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











<div style="width: 100%;overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 0px;padding:;" class="">



<center><h1>Modalidades</h1></center>


<div style="width: 80%;height: 40%!important; margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;padding: ;" class="">






<h3>COLETIVAS</h3>


<div class="form-row">
  






<a class="btn shadow col" id="div1" style="width: 100px;height: 80px;border-radius: 10px;margin: 10px;" href="basquete_adm.php?escola_id=<?php echo $escola_id;?>">


 <div style="display: flex;align-items:center;justify-content: center;padding: 10px;">
  
<img width="40" src="../imagens/sistema/modalidades/basketball.png" style="margin: 5px;float: left!important;">

<h1 style="color: #fff;font-size: 40px">Basquete</h1>

</div></a>







<a class="btn shadow col" id="div2" style="width: 100px;height: 80px;border-radius: 10px;margin: 10px;" href="futsal_adm.php?escola_id=<?php echo $escola_id;?>"> 

 <div style="display: flex;align-items:center;justify-content: center;padding: 10px;">
  
<img width="40" src="../imagens/sistema/modalidades/soccer.png" style="margin: 5px;float: left!important;">

<h1 style="color: #fff;font-size: 40px">Futsal</h1>

</div></a>









</div>








<div class="form-row">



<a class="btn shadow col" id="div3" style="width: 100px;height: 80px;border-radius: 10px;margin: 10px;" href="volei_adm.php?escola_id=<?php echo $escola_id;?>">

 <div style="display: flex;align-items:center;justify-content: center;padding: 10px;">
  
<img width="40" src="../imagens/sistema/modalidades/volleyball.png" style="margin: 5px;float: left!important;">

<h1 style="color: #fff;font-size: 40px">Vôlei</h1>



  </div>
</a>


<a class="btn shadow col" id="div4" style="width: 100px;height: 80px;border-radius: 10px;margin: 10px;" href="handball_adm.php?escola_id=<?php echo $escola_id;?>"> 

 <div style="display: flex;align-items:center;justify-content: center;padding: 10px;">
  
<img width="40" src="../imagens/sistema/modalidades/handball.png" style="margin: 5px;float: left!important;">

<h1 style="color: #fff;font-size: 40px">Handebol</h1>



  </div>
</a>






  

</div>




















</div>



<div style="width: 80%;height: 30%!important; margin-left: auto;margin-right: auto;border-radius: 5px;margin-top:;padding:;" class="">




  <h3>INDIVIDUAIS</h3>


<div class="form-row">
  
<a class="btn shadow col" id="div5" style="width: 100px;height: 80px;border-radius: 10px;margin: 10px;" href="#"> 

 <div style="display: flex;align-items:center;justify-content: center;padding: 10px;">
  
<img width="40" src="../imagens/sistema/modalidades/atletismo.png" style="margin: 5px;float: left!important;">

<h1 style="color: #fff;font-size: 40px">Atletismo</h1>



  </div>
</a>






<a class="btn shadow col" id="div6" style="width: 100px;height: 80px;border-radius: 10px;margin: 10px;" href="#"> 

 <div style="display: flex;align-items:center;justify-content: center;padding: 10px;">
  
<img width="40" src="../imagens/sistema/modalidades/ping-pong.png" style="margin: 5px;float: left!important;">

<h1 id="tm" style="color: #fff;font-size: 40px">Tênis de Mesa</h1>



  </div>
</a>
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

