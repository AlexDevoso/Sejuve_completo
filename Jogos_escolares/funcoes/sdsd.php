<?php
session_start();
  include "../funcoes/conexao.php";
  include "../funcoes/verifica_login.php";
  include "../funcoes/mensagem.php";
?>


<!DOCTYPE html>
<html>
<head>

<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<!--Icons -->
<link href="fontawesome/css/all.css" rel="stylesheet">

<!-- Awesome fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<title>Consultar Comissão Técnica</title>

<style type="text/css">
      





    </style>







</head>
<body>



   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



<center><h1>Comissão Técnica</h1></center>






<div class="bg_form">

<table>


  <thead class="bg-dark">
  <tr>
    <th style="float: left;">Nome</th>
    <th>Funções</th>
    <th>Excluír</th>
    
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



  <tr>
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


<br>
<br>
     
<!-- Botão para acionar modal -->
<button  type="button" class="btn btn-success" data-toggle="modal" data-target="#ExemploModalCentralizado" style="float: right;border-radius: 50px;">
<i class="fas fa-user-plus"></i>  Cadastrar Comissão Técnica
</button>

</div>

<div style="width: 100%;height: 100px;"></div>















<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #151719 !important;">
        <h5 class="modal-title text-white" id="TituloModalCentralizado">CADASTRAR COMISSÃO TÉCNICA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <i style="color: #fff !important;" class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">




   <form action="../funcoes/cadastrar_comissao_tecnica.php" method="POST">
   
    <label for="nome_">Nome:</label><br>
    <input type="text" name="nome" id="nome" >

    
    <select class="custom-select" name="funcao" id="funcao" style="float: right;">
      <option value="" disabled selected>Função</option>
        <option value="Técnico">Técnico</option>
        <option value="Massagista">Massagista</option>
        <option value="Auxíliar">Auxíliar</option>
      
    </select>

<br>
<br>
    <button id="btn_cdt" name="cadastrar" type="submit" class="btn btn-success" style="float: right;border-radius: 50px;">Cadastrar</button>
  </form>



       
      </div>
      <div class="modal-footer">
      
        
      </div>
    </div>
  </div>
</div >  

<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
</script>
</body>
</html>
  