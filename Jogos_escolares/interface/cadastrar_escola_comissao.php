<?php
session_start();
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



</style>


  <title>Bem-Vindo! - Área Administrativa</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
  




  <script type="text/javascript">
    
    window.onload = function (){
      document.getElementById('trmodalidae').style.display = 'none'
      document.getElementById('trnaipe').style.display = 'none'

      document.getElementById('tr_ec').style.display = 'none'
      document.getElementById('tr_ei').style.display = 'none'
      document.getElementById('trbutao').style.display = 'none'
    }
    function selecionaCategoria(){

      var categoria = document.getElementById("categoria").value
      
      if(categoria != ''){
        document.getElementById('trnaipe').style.display = ''
        
      }  
      
    }

    function selecionaNaipe(){

      var naipe = document.getElementById("naipe").value
      if(naipe != ''){
        
        document.getElementById('trmodalidae').style.display = ''
      }
    }
    function selecionaModalidade(){

      var modalidade = document.getElementById("modalidade").value
      if(modalidade == "coletiva"){
        document.getElementById('tr_ei').style.display = 'none'
        document.getElementById('tr_ec').style.display = ''

      }
      else
      {   
        document.getElementById('tr_ei').style.display = ''
        document.getElementById('tr_ec').style.display = 'none'
      }
    }
    function selecionaEsporte(){
      var esporte = document.getElementById("esportes_ct").value
      var esporte2 = document.getElementById("esportes_in").value
      if(esporte != '' || esporte2 != ''){
        document.getElementById('trbutao').style.display = ''
      }

    }
  </script>















  

  
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
        <a id="idzin" href="cadastrar_escola_comissao.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Técnico</a>

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
























<center><h1>Cadastrar Técnico - Jogos Escolares</h1></center>


<div style="width: 40%;height: 70%!important; overflow-y: auto;overflow-x: auto;margin-left: auto;margin-right: auto;border-radius: 5px;margin-top: 20px;padding: 50px;" class="shadow">


<div >

<form action="cadastrar_comissao_jogos.php" enctype="multipart/form-data" method="POST" style="margin-left: auto !important;margin-right: auto !important;"> 
    <table style="">
      


        
      <tr >
        <td>
        <label>CATEGORIA</label>
        <select id="categoria" onchange="selecionaCategoria()" name="categoria" class="form-control" style="width: 340px !important;">
            <option value="" disabled selected>Categoria</option>
            <option value="12a14">12a14</option>
            <option value="15a17">15a17</option>
          </select>
        </td>
      </tr>
   
   
      <tr id="trnaipe">
        <td>
        <label>NAIPE</label>
        <select id="naipe" onchange="selecionaNaipe()" name="naipe" class="form-control" style="width:  340px !important;">
            <option value="" disabled selected>Naipe</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
          </td>
      </tr>

      <tr id="trmodalidae">
        <td>
        <label>MODALIDADE</label>
        <select  id="modalidade" onchange="selecionaModalidade()" name="modalidade" class="form-control" style="width:  340px !important;">
            <option value="" disabled selected>Modalidade</option>
            <option value="coletiva">Coletiva</option>
            <?php
            
            date_default_timezone_set('America/Fortaleza');
            $dataatual = date('d/m/Y');
            $data = '04/31/2020';
              if(strtotime($data) != strtotime($dataatual)){
            ?>
            <option value="individual" disabled default>individual</option>
            <?php 
            }
            else{
            ?>
            <option value="individual" >individual</option>
              <?php
                }  
              ?>
            
            
          </select>
          </td>
      </tr >

      <tr id="tr_ec">
        <td>
        <label>Esportes Coletivos</label>
        <select id="esportes_ct" onchange="selecionaEsporte()" name="esporte" class="form-control" style="width:   340px !important;">

            <option value="" disabled selected>Esporte</option>
            
            <?php 
    $mt = "SELECT nome_mc from modalidade_coletiva";
    $re = mysqli_query($conexao, $mt);   
  ?>
          <?php
          $a = 0;
            while($dados = mysqli_fetch_array($re)){
              
              $b = $dados['nome_mc'];
              if($b !== $a){
           ?>
            <option value="<?php echo $dados['nome_mc']; ?>"><?php echo $dados['nome_mc']; ?></option>
            <?php
            
            }
              $a = $b;
          }
         
            ?>
          </select>
          </td>
      </tr>

      <tr id="tr_ei">
        <td>
        <label>Esportes Individuais</label>
        <select id="esportes_in" onchange="selecionaEsporte()" name="esporte" class="form-control" style="width:   340px !important;">
            <option value="" disabled selected>Esporte</option>
           <?php 
    $mt1 = "SELECT nome_mi from modalidade_individual";
    $re1 = mysqli_query($conexao, $mt1);   
  ?>
          <?php
          $a1 = 0;
            while($dados1 = mysqli_fetch_array($re1)){
              
              $b1 = $dados1['nome_mi'];
              if($b1 !== $a1){
           ?>
            <option value="<?php echo $dados1['nome_mi']; ?>"><?php echo $dados1['nome_mi']; ?></option>
            <?php
            
            }
              $a1 = $b1;
          }
         
            ?>
            
          </select>
          </td>

      </tr>



      <tr id="trbutao">
        <td>
        <button class="shadow" type="submit" name="enviar" id="btn_cd_at">Cadastrar Técnico</button>
        </td>
      </tr>
    </table>
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
