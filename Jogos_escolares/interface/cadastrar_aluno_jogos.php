<?php
session_start();
include "../funcoes/conexao.php";
include "../funcoes/mensagem.php";



@$categoria = mysqli_escape_string($conexao, $_POST['categoria']);
@$naipe = mysqli_escape_string($conexao, $_POST['naipe']);
@$modalidade = mysqli_escape_string($conexao, $_POST['modalidade']);
@$esporte = mysqli_escape_string($conexao, $_POST['esporte']);
if($categoria != ''){
$_SESSION['modalidade'] = array($categoria, $naipe, $modalidade, $esporte, '','');
    $categoria_m = $_SESSION['modalidade'][0];
    $naipe_m = $_SESSION['modalidade'][1];
    $modalidade_m = $_SESSION['modalidade'][2];
    $esporte_m = $_SESSION['modalidade'][3];

}
else{
    $categoria_m = $_SESSION['modalidade'][0];
    $naipe_m = $_SESSION['modalidade'][1];
    $modalidade_m = $_SESSION['modalidade'][2];
    $esporte_m = $_SESSION['modalidade'][3];

}

  
if($_SESSION['modalidade'][2] == "coletiva"){
    $sqlm = "SELECT modalidade_coletivaid from modalidade_coletiva where nome_mc = '$esporte_m' and categoria_mc = '$naipe_m' and naipe_mc = '$categoria_m'";
    $resultm = mysqli_query($conexao, $sqlm);
    $rowm = mysqli_fetch_row($resultm);
    $strm = implode($rowm);
    
    $_SESSION['modalidade'][4] = $strm;
    $_SESSION['modalidade'][5] = null;
  }
  elseif($_SESSION['modalidade'][2] == "individual"){

    $sqlm = "SELECT modalidade_individualid from modalidade_individual where nome_mi = '$esporte_m' and categoria_mi = '$naipe_m' and naipe_mi = '$categoria_m'";
    $resultm = mysqli_query($conexao, $sqlm);
    $verificam = mysqli_fetch_row($resultm);
    $strm = implode($verificam);

    $_SESSION['modalidade'][4] = null;
    $_SESSION['modalidade'][5] = $strm;
  }

//idescola
  $login_escola = $_SESSION['login_escola'][0];
  $idescola = "SELECT escola_id from escola where login = '$login_escola'";
  $resultid = mysqli_query($conexao, $idescola);
  $row = mysqli_fetch_row($resultid);
  $str = implode($row); 
  //
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

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

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


  <title>Bem-Vindo! - Área Administrativa</title>

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
      <a id="idzin" href="home_jogos_escolares_usuario.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">Home</a>


      

<a id="idzin" href="cadastrar_escola_je.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Alunos</a>

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
























<center><h1>Cadastrar Aluno - Jogos Escolares 2020</h1></center>


<div style="width: 60%;margin-left: auto;margin-right: auto;border-radius:5px;padding: 40px;" class="shadow">
<h5>Categoria: <?php echo $_SESSION['modalidade'][0]; ?></h5>
<h5>Naipe: <?php echo $_SESSION['modalidade'][1]; ?></h5>
<h5>Modalidade: <?php echo $_SESSION['modalidade'][3]; ?></h5>


<br>


<form action="../funcoes/cadastrar_aluno.php" enctype="multipart/form-data" method="POST">
  <input type="hidden" name="idescola" value="<?php echo $str; ?>">
  <input type="hidden" name="mcid" value="<?php echo $modalidade_coletivaid_fk; ?>">
  <input type="hidden" name="mi" value="<?php echo $mdi_fk; ?>">

  <div class="form-row">


    <div class="col">
      <label>Nome:</label>
      <input type="text" name="nome_aluno" class="form-control" placeholder="Nome Completo">
    </div>



 <div class="col-md-4">
    
    <label>RG:</label>
    <input type="text" name="rg" class="form-control" placeholder="000.000.000-0">

  </div>




    <div class="col-md-4">
      <label>Data de Nascimento:</label>
      <input type="date" class="form-control" name="data">
    </div>


 



  </div>

  <br>




<div class="form-row">
  
<div class="col">
  

<label>Foto:</label>

<div style="display: flex;align-items: center;justify-content: center;">
  <img width="150" id="pre_img" src="../imagens/sistema/pre_def.jpg">

</div>

<br>

  <input type="file" class="" id="real-file" name="imagem_escola" onchange="previewImagem()" hidden="hidden" >
  <button class="btn btn-primary" type="button" id="custom-button" name="cadastar"><i class="fas fa-folder"></i>  Selecionar Arquivo</button>
 <span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>


</div>

</div>
<br>





<div class="form-row">

<div class="col">
  
  <button name="cadastrar" type="submit" class="btn btn-success"  style="width: 170px;border-radius: 50px;float: right;"> Cadastrar</button>
</div> 
  


</div>



</form>








  

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



      <script>



            function previewImagem(){
                var imagem = document.querySelector('input#real-file').files[0];
                var preview = document.getElementById("pre_img");
                var reader = new FileReader();
                reader.onloadend = function(){
                    preview.src = reader.result;
                }
                if(imagem){
                    reader.readAsDataURL(imagem);
                }else{
                    preview.src = "";
                }
            }
    </script>













































      
  
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
