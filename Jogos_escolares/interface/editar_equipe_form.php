<?php
  session_start();
  include "../funcoes/verifica_login_adm.php";
  include "../funcoes/conexao.php";
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
  
#nav_sejuve:hover {

text-decoration:none;
 }

#voltar:hover {
   width: 100px !important;
   text-align: center;
   border-radius: 50px;
   background-color:#1372f2;
   text-decoration:none;

 
}

#voltar {
   width: 100px !important;
   text-align: center;
   text-decoration:none;
}


a#idzin:hover {

background-color: #2279f0 !important;



}

  nav {
background: #2F80ED;  
  }

    html,body {
    overflow: hidden;
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
   border-radius: 50px;
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


.table td, .table th {

    border-top: none!important;

}

td {
  text-align: center !important;
}

.input-group-text {
  border: none !important;
  background-color: #fff !important;
  color: #424242 !important;
}


.input-group > .custom-select:not(:first-child), .input-group > .form-control:not(:first-child) {
  border-top-left-radius: 5px !important;

border-bottom-left-radius: 5px !important;
}



</style>


  <title>Editar Equipe</title>



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
    <div class="" id="sidebar-wrapper" style="background-color: #2F80ED;">
      <div class="sidebar-heading text-white">
        
        <div style="display: flex;">
        <img width="50" src="../imagens/sejuve_logo.png" style="float: left ;"><h2 style="float: right !important;">Sejuve</h2>
</div>
        
      </div>
      <div class="list-group list-group-flush  ">
        <a id="idzin" href="area_adm.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="lista_de_eventos.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/competicao.png" style="margin-right: 10px;">  Eventos</a>

        <a id="idzin" href="atletas_database.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Atletas</a>

         

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">SEJUVE</a>



<a id="voltar"  href="times_cadastrados.php" style="float: right;">Voltar</a>

      </nav>













<?php
  if(isset($_GET['equipeid'])){
    $equipeid = $_GET['equipeid'];
    $mostrardados = "SELECT * from equipe join equipe_evento on equipeid = equipeid_fk where equipeid = '$equipeid'";
    $resultado = mysqli_query($conexao, $mostrardados);
    
  }
  while ($dadosequipe = mysqli_fetch_array($resultado)) {
 ?>
   

<center><h1>Editar Dados da Equipe</h1></center>

<div class="bg_form shadow  bg-white rounded" style="width: 80%;height:;margin-right: auto;margin-left: auto;padding: 50px !important;">

<form action="../funcoes/editar_equipe.php" method="POST" enctype="multipart/form-data">

  <input type="hidden" name="equipeid" value="<?php echo $equipeid ?>">



<!--1-->
  <div class="form-row">
    <div class="col ">
    

      <label>Nome da Equipe:</label>

<input type="text" name="nomeequipe" class="form-control" value="<?php echo $dadosequipe['nomeequipe']; ?>">

    </div>


    <div class="col">

      <label>Nome do Responsável:</label>
<br>
<input type="text" name="nomeresponsavel" class="form-control" value="<?php echo $dadosequipe['nomeresponsavel']; ?>">


    </div>


    <div class="col">
      
      <label>RG do Responsável:</label>
        <input id="rg" value="<?php echo $dadosequipe['rgresponsavel']; ?>" type="text" class="form-control" name="rgresponsavel" id="validationDefaultUsername" placeholder="000.000.000-0" aria-describedby="inputGroupPrepend2" required>

    </div>



 
  </div>
  <br>
<!--1#-->




 <div class="form-row">

    <div class="col ">
<label>E-mail:</label>
<input type="email" class="form-control" name="email" id="validationDefaultUsername" placeholder="exemplo@email.com" aria-describedby="inputGroupPrepend2" required value="<?php echo $dadosequipe['email']; ?>">
    </div>


    <div class="col">
<label>Telfone:</label>
<input id="telefone"  type="text" class="form-control" name="telefone" id="validationDefaultUsername" placeholder="(00) 00000-0000" aria-describedby="inputGroupPrepend2" required value="<?php echo $dadosequipe['telefone']; ?>">
    
    </div>


     <div class="col">

      <label>Endereço:</label>

        <input type="text" class="form-control" name="endereco" id="validationDefaultUsername" placeholder="Rua" aria-describedby="inputGroupPrepend2" required value="<?php echo $dadosequipe['endereco']; ?>">
      </div>

  </div>
<br>







 <div class="form-row">



<div class="col"> 
<label>Naturalidade:</label>

        
        <input type="text" class="form-control" name="naturalidade" id="validationDefaultUsername" placeholder="Brasil" aria-describedby="inputGroupPrepend2" required value="<?php echo $dadosequipe['naturalidade']; ?>">
      </div>
  

    <div class="col ">
<label>Login:</label>
 <input type="text" class="form-control" name="login" id="validationDefaultUsername" placeholder="Login" aria-describedby="inputGroupPrepend2" required value="<?php echo $dadosequipe['login']; ?>">
    </div>



    <div class="col">


<label>Senha:</label>

        
        <input type="text" class="form-control" name="senha" id="validationDefaultUsername" placeholder="Senha" aria-describedby="inputGroupPrepend2" required value="<?php echo $dadosequipe['senha']; ?>">
   
    </div>
</div>



  
<br>








 
  <input type="file" class="" id="real-file" name="logoequipe" onchange="previewImagem()" hidden="hidden" >
  <button style="width: ;" class="btn btn-primary" type="button" id="custom-button" ><i class="fas fa-folder"></i> Selecionar Arquivo </button>
 <span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>


  <button type="submit" name="editar" class="btn btn-success" style="float: right;width: 170px;border-radius: 50px;" > Salvar</button>



</form>

<?php 
  }
?>
</div>











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




  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
      $("#rg").mask("999.999.999-W", {
        translation: {
          'W': {
            pattern: /[X0-9]/
          }
        },
        reverse: true
      }) });  


    </script>

 <script type="text/javascript">
   
   $(document).ready(function(){
$('#telefone').mask('(00) 00000-0000');

   });

 </script>










































      
  
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
