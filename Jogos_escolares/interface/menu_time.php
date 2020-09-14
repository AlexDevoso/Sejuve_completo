<?php
  session_start();
  include '../funcoes/conexao.php';
  include '../funcoes/verifica_login.php';
  $l = $_SESSION['login'][0];
  $sql = "SELECT * FROM equipe join equipe_evento on equipeid = equipeid_fk where login = '$l'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_array($resultado);

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

               <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<style type="text/css">
  

  nav {
  

 background: #2F80ED;  


  }

  .btn.focus, .btn:focus {

    outline: 0;
    box-shadow: none !important;

}

a {

  color: #fff !important;
  text-decoration: none;
}

a:hover {
  color: #fff !important;
  text-decoration:none;

}

a#idzin:hover {

background-color: #2279f0 !important;



}


#voltar:hover {
   width: 50px !important;
   text-align: center;
   border-radius: 50px;
   background-color:#1372f2;
   text-decoration:none;

 
}

#voltar {
   width: 50px !important;
   text-align: center;
   text-decoration:none;
}


.bg_form_2 {
width: 80%;
margin-right: auto; 
margin-left: auto;

}

.btn-verde {
  background: #38ef7d !important;


color: #fff;
border-radius: 50px !important;
border: none;
height: 50px;
font-size: 18px;
width: 200px !important;


}


.table th {

    border-top: none!important;
    text-align: center !important;
    font-weight: 600;
    border: none !important;  

}

.table td {

    
    text-align: center !important;
    
    border: none !important;  

}



@media (max-width: 576px) { 


  #div_dados_times {
  
    border-radius: 5px;
  }


#bg_do_cards {

 
  flex-direction: column;

}

 }




 #nav_sejuve:hover {

text-decoration:none;
 }

#jogadores {
  width: 300px;
  height: 100px;
  display: flex;
  flex-direction: row;
  align-items: center;
  margin: 10px;
  background-color: #fff;

}









</style>


  <title>Bem-Vindo! - Home</title>



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
        













<a id="idzin" href="consultar_atletas.php"  class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;">   <img width="20" src="../imagens/menu_icones/tshirt.png" class="icone_img" style="margin-right: 10px;"> Meu Time </a>

<a id="idzin" href="consultar_comissao_tecnica.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;" >  <img width="20" src="../imagens/menu_icones/foot.png" class="icone_img" style="margin-right: 10px;"> Comissão Técnica</a>

 

         <a id="idzin" href="../funcoes/logout.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/off.png" style="margin-right: 10px;">  Sair</a>



      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">


      <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">SEJUVE</a>



<a id="voltar"  href="../funcoes/logout.php" style="float: right;">Sair</a>

      </nav>

      
        


        


        
        























<center><h1>Bem-Vindo!</h1></center>



<div id="bg_do_cards" style="width: 90%;margin-left: auto;margin-right: auto;padding: 20px;display: flex;align-items: center;justify-content: center;">
<div id="div_dados_times" style="width: 300px;height:100px;padding: 20px;display: flex;flex-direction: row;margin: 10px;" class="shadow" >


<div >
<?php echo "<img width='50' src='../imagens/".$dados['logoequipe']."'/>";?>
</div>



<div> 


<h3 style="margin-left: 10px;"><?php echo $dados['nomeequipe'];?></h3>

</div>

</div>




<div style="width: 300px;height: 100px;border-radius: 5px;padding: 20px;margin: 10px;" class="shadow">

  <div>
    <h6>Dono do Time:</h6>
    <h5><?php echo $dados['nomeresponsavel'];?></h5>

  </div>
  
</div>
</div>







<div id="bg_do_cards" style="width: 90%;margin-left: auto;margin-right: auto;padding: 20px;display: flex;align-items: center;justify-content: center;" class="">

  <a id="jogadores" href="consultar_atletas.php" class="btn shadow">
    

    <img width="60" height="60" src="../imagens/jogadores.png">
   
    
<h2 style="color: #424242 ;margin-left: 10px;">JOGADORES</h2>
  </a>


  <a id="jogadores"  href="consultar_comissao_tecnica.php" class="btn shadow">
    <img width="50" height="50" src="../imagens/comi.png">
    <h2 style="color: #424242 ;margin-left: 10px;">COMISSÃO TÉCNICA</h2>
  </a>






 



</div>







      
  
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
