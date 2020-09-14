<?php
session_start();
include "../funcoes/conexao.php";
include "../funcoes/mensagem.php";
include "../funcoes/verifica_login_adm.php";
?>
<html>
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



#nav_sejuve:hover {

text-decoration:none;
 }







</style>

<title>Escolas - Jogos Escolares</title>

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

















<?php 
if (isset($_GET['escola_id'])) {
  $escola_id = mysqli_escape_string($conexao, $_GET['escola_id']);
  $sql = "SELECT * FROM escola where escola_id = '$escola_id'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_array($resultado);
}

?>





<center><h1>Editar Escola</h1></center>






<div style="width: 95%;height:400px!important; overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;" class="shadow">
<br>
<form action="../funcoes/editar_escola.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="escola_id" value="<?php echo $dados['escola_id']; ?>">
<!-- G_I_1  2 Inputs em uma linha -->
<div class="form-row">
<div class="col ">
<label>Nome da Escola:</label>
<br>
<input type="text" name="nome" class="form-control" value="<?php echo $dados['nome']?>">
<br>
</div>


<div class="col">   
<label>Logo da Escola:</label>
<br>
<input type="file" class="" id="real-file" name="imagem"  hidden="hidden" >
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
<input type="text" name="diretor_escola" class="form-control" value="<?php echo $dados['diretor_escola']?>">
<br>
</div>


<div class="col">
<label>INEP:</label>
<div class="input-group">
<br>

<input type="text" class="form-control" name="inep" value="<?php echo $dados['inep']?>">
</div>
</div>
</div>
<!--FECHA AQUI G_I_2-->


<!-- G_I_3  2 Inputs em uma linha -->
<div class="form-row">
<div class="col">
<label>Responsável pela Inscrição:</label>
<div class="input-group">
<br>

<input type="text" class="form-control" name="nome_responsavel_escola" value="<?php echo $dados['nome_responsavel_escola']?>">
</div>
</div>


<div class="col">
<label>Endereço:</label>
<div class="input-group">
<br>

<input type="text" class="form-control" name="endereco_escola" placeholder="Rua" value="<?php echo $dados['endereco_escola']?>">
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

<input type="email" class="form-control" name="email" placeholder="exemplo@email.com" value="<?php echo $dados['email']?>">
</div>
</div>


<div class="col">
<label>Telefone:</label>
<div class="input-group">
<br>

<input id="telefone" type="text" class="form-control" name="telefone_escola"  id="telefone_escola" placeholder="(00) 00000-0000" value="<?php echo $dados['telefone_escola']?>">
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

<input type="text" class="form-control" name="login" placeholder="Login" value="<?php echo $dados['login']?>">
</div>
</div>


<div class="col">
<label>Senha:</label>
<div class="input-group">
<br>

<input type="text" class="form-control" name="senha" placeholder="Senha" value="<?php echo $dados['senha']?>">
</div>
</div>
</div>
<!--FECHA AQUI G_I_5-->

<!-- BOTÃO CADASTRAR DO FORM -->
<button  type="submit" name="editar" class="btn btn-success" style="float: right;border-radius: 50px;width:170px;margin-top:20px; " >Salvar</button>
<!-- FECHA O BTN DO FORM-->


</form>











</div>
</div>





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
      