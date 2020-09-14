<?php
   session_start();
    include "../funcoes/conexao.php";
    include "../funcoes/verifica_login_adm.php";
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
width: 50% !important;
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


#nav_sejuve:hover {

text-decoration:none;
 }


 @media (max-width: 576px) { 

#bg_ {
  height: 55% !important;
}

#btn_ {
width: 100% !important;
height: 50px;

}
 

 }








</style>


  <title>Lista de Eventos</title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
	<title>Lista de Eventos</title>
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
        <a id="idzin" href="area_adm.php" class="list-group-item list-group-item-action" style="background-color: rgba(255,255,255,0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/home2_.png" style="margin-right: 10px;">    Home</a>

        <a id="idzin" href="lista_de_eventos.php" class="list-group-item list-group-item-action" style="background-color: rgba(255,255,255,0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/competicao.png" style="margin-right: 10px;">  Eventos</a>

        <a id="idzin" href="atletas_database.php" class="list-group-item list-group-item-action" style="background-color: rgba(255,255,255,0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/usu_.png" style="margin-right: 10px;">  Atletas</a>

        <a id="idzin" href="editar_pagina.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/clipboard.png" style="margin-right: 10px;">  Editar Página</a>

        <a id="idzin" href="../interface/home_jogos_escolares_adm.php" class="list-group-item list-group-item-action" style="background-color: rgba(255, 255, 255, 0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/list_.png" style="margin-right: 10px;">  Jogos Escolares</a>

         <a id="idzin" href="../funcoes/logout.php" class="list-group-item list-group-item-action" style="background-color: rgba(255,255,255,0.0); font-size: 18px;display: flex;justify-content: left;align-items: center;"><img width="20" height="20" src="../imagens/menu_icones/off.png" style="margin-right: 10px;">  Sair</a>


    

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar">
        
<button style="background: rgb(0, 0, 0) transparent !important;" class="btn " id="menu-toggle" style="font-size: 20px;"> <i style="color: #fff;font-size: 20px;" class="fas fa-bars"></i></button>
<a id="nav_sejuve" href="#" style="font-size: 20px;font-weight: 700;">SEJUVE</a>





<a id="voltar"  href="area_adm.php" style="float: right;">Voltar</a>


      </nav>
      <br>



<center><h1>Lista de Eventos</h1></center>
<br>



<div id="bg_" class="shadow" style="margin-left: auto;margin-right: auto;border-radius: 5px;overflow-y: auto;overflow-x:auto;width: 90%;height:40%;overflow-y: auto; ">
  





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
       <?php 
        $sql = "SELECT * FROM evento";
        $resultado = mysqli_query($conexao, $sql);
       while($dadosevento = mysqli_fetch_array($resultado)){
       ?>
        <tr class="active-row">
          <td><?php echo "<img width='50' src='../imagens/".$dadosevento['logoevento']."'/>";?></td>
          <td><?php echo $dadosevento['nomeevento']; ?></td>
          <td><?php echo $dadosevento['modalidade']; ?></td>
          <td><?php echo $dadosevento['dataevento']; ?></td>

      <td style="text-align: center;"><a style="color:#000;" class="btn btn-dark" href="times_cadastrados.php?idevento=<?php echo $dadosevento['idevento'];?>" ><i style="color: #fff;" class="fas fa-sign-in-alt"> </i></a></td>
        
          <td style="text-align: center;"><a class="btn btn-primary" href="editar_evento.php?idevento=<?php echo $dadosevento['idevento'];?>"><i style="color: #fff !important;" class="fas fa-pen"></i></a></td>


          <form action="../funcoes/deletar_evento.php" method="POST" >
            <input type="hidden" name="idevento" value="<?php echo $dadosevento['idevento'] ?>">
          <td style="text-align: center;"> <button class="btn btn-danger" type="submit" name="delete"><i style="color: #fff !important;" class="fas fa-trash" ></i></button></td>
          </form>
         

            
        </tr>

     <?php } ?>
      </tbody>
<br>


 
    </table>















</div>

<div style="margin-left: auto;margin-right: auto;width: 90%;">
<button id="btn_" style="float: right !important;margin-top: 10px;border-radius: 50px;width: 170px;" class="btn btn-success"  data-toggle="modal" data-target=".bd-example-modal-lg"> Novo Evento </button>
</div>

















<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #fff !important;border-bottom: none !important;
">
        <h3 class="modal-title" id="TituloModalCentralizado" style="color: #000;">Criar Evento</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" >
         


<img width="15" src="../imagens/sistema/toast/close.png">

        </button>
      </div>
      <div class="modal-body">




  <form action="../funcoes/cadastrar_eventos.php" enctype="multipart/form-data" method="POST">






<div class="form-row">



 <div class="col">

<label>Nome:</label>

 <input type="text" class="form-control" name="nome_evento" id="validationDefaultUsername" placeholder="Campeonato" aria-describedby="inputGroupPrepend2" required>



 </div>
















    <div class="col">
      
       <label>Modalidade:</label>
     <select class="custom-select" name="modalidade" id="modalidade" style="float: right;">
      <option value="" disabled selected>Selecionar</option>
        <option value="futsal">Futsal</option>
        <option value="futebol">Futebol</option>
        
    </select>





    </div>


    <div class="col">



<label>Data de Ínicio:</label>


         
      
        
        <input class="form-control" type="date" name="data_evento" placeholder="" aria-describedby="inputGroupPrepend2" required>
      

    </div>








  </div>


<label>Logo do Evento:</label>

<div style="display: flex;align-items: center;justify-content: center;">
  <img width="150" id="pre_img" src="../imagens/sistema/pre_img.png">

</div>

<br>

  <input type="file" class="" id="real-file" name="imagem_evento" onchange="previewImagem()" hidden="hidden" >
  <button class="btn btn-primary" type="button" id="custom-button" ><i class="fas fa-folder"></i>  Selecionar Arquivo</button>
 <span id="custom-text" style="color: #000;">  Nenhum Arquivo selecionado.</span>



       
      </div>
      <div class="modal-footer " style="border-top: none !important;">
      

   <button name="cadastrar" style="float: right; margin-top:10px;border-radius: 50px;width: 170px;" type="submit" class="btn btn-success"> Criar </button>
    
    
</form>

      </div>
    </div>
  </div>
</div >  





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






































































</body>
</html>