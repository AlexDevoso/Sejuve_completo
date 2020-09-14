<?php
session_start();
  include "../funcoes/conexao.php";
  include "../funcoes/verifica_login.php";
  include "../funcoes/mensagem.php";
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
}

a:hover {
  color: #fff !important;
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
html, body {
  overflow: hidden;
}

@media (max-width: 576px) { 

  #btn_add_atleta {

  
    width: 100% !important;
    height: 50px;
  }

 }

  #nav_sejuve:hover {

text-decoration:none;
 }







</style>


  <title>Consultar Comissão</title>



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
        













<a id="idzin" href="consultar_atletas.php"  class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;">   <img width="20" src="../imagens/menu_icones/tshirt.png" class="icone_img" style="margin-right: 10px;"> Meu Time </a>

<a id="idzin" href="consultar_comissao_tecnica.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0);font-size: 18px;display: flex;justify-content: left;align-items: center;" >  <img width="20" src="../imagens/menu_icones/foot.png" class="icone_img" style="margin-right: 10px;"> Comissão Técnica</a>



      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">SEJUVE</a>



<a id="voltar"  href="menu_time.php" style="float: right;">Voltar</a>

      </nav>






















<center><h1>Comissão Técnica</h1></center>






<div class="bg_form shadow" style="margin: 20px;border-radius: 5px;">

<table class="table table-hover">


  <thead class="">
  <tr>
    <th>NOME</th>
    <th>FUNÇÕES</th>
    <th>EXCLUIR</th>
    
  </tr>
</thead>
<tbody>

 <?php
        //verifica quem tá logado
          $verifica = $_SESSION['login'][0];

          $seleciona = "SELECT equipeid_fk from equipe_evento where login = '$verifica'";
          $resus = mysqli_query($conexao, $seleciona);
          $verificaid = mysqli_fetch_row($resus);
          $str = implode($verificaid);

  $sql = "SELECT * FROM comissao_tecnica where equipeid_fk = '$str'";
  $resultado = mysqli_query($conexao, $sql);
 while($dados = mysqli_fetch_array($resultado)){
        ?>



  <tr class="tr_baixo">
    <td> <?php echo $dados['nome'] ?> </td>
    <td style="text-align: center;"> <?php echo $dados['funcao'] ?> </td>


   
    <td > 

       <form action="../funcoes/deletar_comissao_tecnica.php" method="POST">
        <input type="hidden" name="comissao_tecnicaid" value="<?php echo $dados['comissao_tecnicaid'] ?> ">
      <button type="submit" class="btn btn-danger" name="delete"> <i  style="color: #fff;" class="fas fa-trash"></i></button>  

  </form>



    </td>
    

  



     
  </tr>

  </tr>





 
<?php } ?>
</tbody>
</table>


     


</div>



<div class="" style="margin: 20px;">
<!-- Botão para acionar modal -->
<button id="btn_add_atleta"  type="button" class="btn btn-success" data-toggle="modal" data-target="#ExemploModalCentralizado" style="float: right;border-radius: 50px;width: 170px;margin-top: 20px;">
<i class="fas fa-user-plus"></i>  Novo
</button>
</div>














<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #fff !important;border:none;">
        <h3 class="modal-title" id="TituloModalCentralizado">Cadastrar Comissão Técnica</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
         <img width="15" src="../imagens/sistema/toast/close.png">
        </button>
      </div>
      <div class="modal-body">




   <form action="../funcoes/cadastrar_comissao_tecnica.php" method="POST">


    <div class="form-row">
<div class="col">

  <label for="nome_">Nome:</label><br>
    <input type="text" name="nome" id="nome" class="form-control" >

</div>


<div class="col-md-4">
<label>Funções:</label>
      <select class="custom-select" name="funcao" id="funcao" style="float: right;">
      <option value="" disabled selected>Função</option>
        <option value="Técnico">Técnico</option>
        <option value="Massagista">Massagista</option>
        <option value="Auxíliar">Auxíliar</option>
      
    </select>

</div>


</div>




   
    




       
      </div>
      <div class="modal-footer" style="border:none;">
        <button id="btn_cdt" name="cadastrar" type="submit" class="btn btn-success" style="float: right;border-radius: 50px; width: 170px;">Cadastrar</button>
  </form>
        
      </div>
    </div>
  </div>
</div >  










































      
  
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
