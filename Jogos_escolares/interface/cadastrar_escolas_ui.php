
<?php
      session_start();
    
    include "../funcoes/conexao.php";
    include "../funcoes/verifica_login_adm.php";
    include "../funcoes/mensagem.php";
?>
<html>


    <!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!--Icons -->
<link href="fontawesome/css/all.css" rel="stylesheet">

<!-- Awesome fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="shortcut icon" type="image/x-icon" href="../imagens/sistema/fav_icon/fav_icon.ico">



<style type="text/css">
body{
    font-family: "Nunito", Arial, sans-serif;
  }


  a {
    color: #fff;
  }
a:hover {
  color: #fff;
}

nav {
  background: #151719 !important;
}

span {
color: #fff;
}

#sidebar i {
   color: #2ed573;
   font-size: 20px;
   margin-right: 15px;

}

li {

  font-size: 14px;
}

li:hover {
  background-color: #3d3d3d;
  border-radius: 50px;
  
}

body {
  font-size: 0.9rem;
}


#head_sidenav {
  border-bottom: 1px solid #3d3d3d;
  margin-bottom: 20px ;
}


  * {

    margin: 0px;
    padding: 0px;
    
  }


  a {
    text-decoration: none;
    
  }

a:hover {

  text-decoration: none;
}


  #sidebar {
  
    width: 100%;
    height: 100%;
    background-color: #151719;
    left: 0px;
    transition: all 200ms linear;
    padding: 20px;
  


  }

  #sidebar ul li {

 
  list-style: none;
 
  }

  #sidebar li {
    margin:10px;
  }




.bg_form {

 margin-left: auto;
    margin-right: auto;
   
      
      width: 60%;
      
      
      padding: 30px;
      overflow-x:auto;
    
    

}







table {
  border-collapse: collapse;
  width: 100%;

}

 td {
  text-align: center;
  padding: 8px;

}


tr:nth-child(even){background-color: #f2f2f2}

th {

  color: white;
  text-align:center;
   padding: 8px;
   font-weight: 1;
 
}




tbody tr:last-of-type {
  
}








h1 {
font-size: 3em;
}








body {

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}



.ct {

display: flex;
flex-flow: row nowrap;
justify-content: center;
align-items: center;


}


.ct_menu {

display: flex;

align-items: center;


}


.card_ {

  width: 300px;
  height: 100px;

  margin:10px;
  border-radius: 5px;
  background-color: #2ecc71;
  display: flex;
flex-flow: row nowrap;
justify-content: center;
align-items: center;
}

.card_ct {

  display: flex;
flex-flow: row nowrap;
justify-content: center;
align-items: center;
}

.icone_img {

  margin: 10px;
}

.toast {

  position: relative !important;
  top: 100px !important;
  left:  !important;

}

#voltar_h {

  width: 100px;
text-align: center;
}


.cot_hj {

  display: flex;
  flex-direction: row;
  width: 100%;
  height: 100%;
  padding: none;
  margin: none !important;

}



</style>

<head>
	<title>Cadastrar Escolas</title>
</head>
<body>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 

<script type="text/javascript">
  $(document).ready(function(){
  $('.toast').toast('show');
});
</script>
 





   <nav class="navbar navbar-expand-lg " >
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





<div class="cot_hj">
  
<div>
  

  <div id="sidebar" >

  <ul>

<div id="head_sidenav">
    <center><img style="margin :10px;" width="140" src="../imagens/sejuve_logo.png"></center>
</div>


<li> <a href="area_adm.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/home1_.png" class="icone_img">  HOME</div>  </a></li>

<li> <a href="cadastrar_escolas_ui.php"> <div class="ct_menu">  <img width="20" src="../imagens/menu_icones/cadastrar.png" class="icone_img">ESCOLAS</div>  </a></li>

<li> <a href="../funcoes/logout_adm.php"> <div class="ct_menu">   <img width="20" src="../imagens/menu_icones/sair1_.png" class="icone_img"> SAIR </div></a></li>






  </ul>
  

</div>

</div>





<div  style="width: 100%;padding: 50px;">
  

<center><h1>Jogos Escolares</h1></center>





<div class="card shadow" style="border:none;">
  <div class="card-body">
    Bem-Vindo Escola .
  </div>
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


</body>
</html>