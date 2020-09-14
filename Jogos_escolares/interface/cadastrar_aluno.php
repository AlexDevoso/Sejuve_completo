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

<!--FONTE USADA NO SITE-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 

<!--FAVICON-->
<link rel="shortcut icon" type="image/x-icon" href="../imagens/sistema/fav_icon/fav_icon.ico">

<!--FOLHA DE ESTILO-->
<link rel="stylesheet" type="text/css" href="../css/style_cadastrar_aluno.css">



<title>Bem-Vindo!</title>

</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>








 
 




<!--CONTAINER-->
<div class="cot_hj">

<!--DIV 1-->  
<div>


<!--BARRA LATERAL-->
<div id="sidebar" >
<ul>

  <p style="color: #fff;text-align:center;font-size: 15px;font-weight:200 !important;" >Sistema do<br>Jogos Escolares 2020</p>

<hr style="background-color: #fff;">
<div id="head_sidenav">

</div>

<li> <a href="area_adm.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/home1_.png" class="icone_img">  HOME</div>  </a></li>

<li> <a href="cadastrar_escolas_ui.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/cadastrar.png" class="icone_img">MINHA ESCOLA</div>  </a></li>

<hr style="background-color: #fff;">

<li> <a href="../funcoes/logout_adm.php"> <div class="ct_menu">   <img width="20" src="../imagens/menu_icones/sair1_.png" class="icone_img"> SAIR </div></a></li>

</ul>
</div>
<!--FECHA BARRA LATERAL-->
</div>




<!--DIV 2-->
<div  style="width: 100%;">







    <!--NAVBAR-->
<nav class="navbar navbar-expand-lg shadow "  >
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<a class="navbar-brand text-white" href="#">Jogos Escolares</a>
<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<li class="nav-item">
<a id="voltar_h" class="nav-link text-white" href="lista_de_eventos.php">Voltar</a>
</li>
</ul>
</div>
</nav>
<!--FECHA NAVBAR-->





<center><h1>Cadastrar Atletas em uma Modalidade </h1></center>


















  <div class="bg_form shadow">
    <form action="testeboxcadastrar.php" method="POST" >
    <table class="table">
      
      <tr >
        <label>CATEGORIA</label>
        <select id="categoria" onchange="selecionaCategoria()" name="categoria" class="form-control">
            <option value="" disabled selected>Categoria</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
      </tr>

      <tr id="trnaipe">
        <td>
        <label>NAIPE</label>
        <select id="naipe" onchange="selecionaNaipe()" name="naipe" class="form-control">
            <option value="" disabled selected>Naipe</option>
            <option value="12a14">12 a 14</option>
            <option value="15a17">15 a 17</option>
          </select>
          </td>
      </tr>

      <tr id="trmodalidae">
        <td>
        <label>MODALIDADE</label>
        <select id="modalidade" onchange="selecionaModalidade()" name="modalidade" class="form-control">
            <option value="" disabled selected>Modalidae</option>
            <option value="coletiva">Coletiva</option>
            <option value="indivual">Individual</option>
          </select>
          </td>
      </tr >

      <tr id="tr_ec">
        <td>
        <label>Esportes Coletivos</label>
        <select id="esportes_ct" onchange="selecionaEsporte()" name="esporte" class="form-control">
            <option value="" disabled selected>Esporte</option>
            <option value="handebol">Handebol</option>
            <option value="basquete">Basquete</option>
          </select>
          </td>
      </tr>

      <tr id="tr_ei">
        <td>
        <label>Esportes Individuais</label>
        <select id="esportes_in" onchange="selecionaEsporte()" name="esporte" class="form-control">
            <option value="" disabled selected>Esporte</option>
            <option value="tenis">Tênis de Mesa</option>
            <option value="atletismo">Atletismo</option>
          </select>
          </td>

      </tr>

      <tr id="trbutao">
        <td>
        <button class="btn btn-success" type="submit" name="enviar" style="border-radius: 50px;width: 170px;float: right;">Cadastrar atletas</button>
          </td>
          
      </tr>
    </table>
    </form>
  </div>








</div>






</div>
<!--FECHA O CONTAINER-->













      <script type="text/javascript">
    window.onload = function (){
      document.getElementById('trmodalidae').style.display = 'none';
      document.getElementById('trnaipe').style.display = 'none';

      document.getElementById('tr_ec').style.display = 'none';
      document.getElementById('tr_ei').style.display = 'none';
      document.getElementById('trbutao').style.display = 'none';
    }
    function selecionaCategoria(){

      var categoria = document.getElementById("categoria").value;
      if(categoria != ''){
        document.getElementById('trnaipe').style.display = '';
        
      }
      
    }

    function selecionaNaipe(){

      var naipe = document.getElementById("naipe").value;
      if(naipe != ''){
        
        document.getElementById('trmodalidae').style.display = '';
      }
    }
    function selecionaModalidade(){

      var modalidade = document.getElementById("modalidade").value;
      if(modalidade == "coletiva"){
        document.getElementById('tr_ei').style.display = 'none';
        document.getElementById('tr_ec').style.display = '';

      }
      else
      {   
        document.getElementById('tr_ei').style.display = '';
        document.getElementById('tr_ec').style.display = 'none';  
      }
    }
    function selecionaEsporte(){
      var esporte = document.getElementById("esportes_ct").value;
      var esporte2 = document.getElementById("esportes_in").value;
      if(esporte != '' || esporte2 != ''){
        document.getElementById('trbutao').style.display = '';
      }

    }
  </script>































<!--SCRIPT DE MOSTRAR A NOTIFICAÇÃo-->
<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
</script>

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

</body>
</html>