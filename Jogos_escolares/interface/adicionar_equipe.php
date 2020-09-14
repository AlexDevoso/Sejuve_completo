<?php
session_start();
  include "conexao.php";
  include "verifica_login_adm.php";

?>
  <!DOCTYPE html>
  <html>

    <head>
     <meta charset="utf-8">


<title>Cadastrar Equipe</title>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--Icons -->
<link href="fontawesome/css/all.css" rel="stylesheet">

<!-- Awesome fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



<style type="text/css">


nav {
   box-shadow: 0 5px 10px rgba(0,0,0,0.20);

}

h1 {
  font-size: 3em;
}



#bg_form {

 margin-left: auto;
    margin-right: auto;
    width: 90%;
      box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
      padding: 20px;

}

input[type="text"]:focus,
input[type="email"]:focus,input[type="password"]:focus {
  border-color: #3ca9e2;
}
input[type="text"]:focus:invalid,
input[type="email"]:focus:invalid,input[type="password"]:focus:invalid {
  color: none;
  border-color: none;
}

input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  outline: none;
  height: 60px;
  line-height: 60px;
  border-radius: 4px;
}

input[type="text"],
input[type="email"],input[type="password"],input[type="date"] {
  width: 100%;
  padding: 0 0 0 10px;
  margin: 0;
  
  height: 40px;
  border: 1px solid #c2c0ca;
  border-radius: 5px;
  font-style: normal;
  font-size: 16px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: relative;
  display: inline-block;
  background: none;
}



 .ctn {
display: flex;
justify-content: center;


 }


.box_esquerda {
display: flex;
flex-flow: column;
width: 40%;
}



.box_direita {
  width: 35%;
display: flex;
flex-flow: column;
}

.item {
flex: 1;
margin: 10px;

}





</style>
  



  </head>
  <body>


     <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 



<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-white" href="area_adm.php">Sejuv</a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
   
      <li class="nav-item">
        <a class="nav-link text-white" href="area_adm.php">Voltar</a>
      </li>
     
    </ul>
   
  </div>
</nav>
<div style="width: 100%;height: 50px;"></div>


    
<center><h1>Cadastrar Equipe</h1></center>

<div id="bg_form" style="">
  <form method="POST" action="cadastrar_equipe.php">

 



<div class="ctn">



<div class="box_direita">


<div class="item">
   <label>E-mail:</label>
  <input type="email" name="email" placeholder="example@email.com">

</div>

<div class="item">
    <label>RG do Responsável:</label>
    <input  type="text" name="rgresponsavel" id="rg" placeholder="00.000.000-0">
</div>

<div class="item">
      <label>Telefone:</label><br>
    <input  type="text" name="telefone" id="tel" placeholder="(00) 0000-0000">
</div>

<div class="item">
  <label>Login:</label><br>
    <input type="text" name="login">
  
</div>

<div class="item">
  <label>Senha:</label><br>
    <input  type="password" name="senha">
</div>











</div>

































<div class="box_esquerda">



<div class="item">
    <label>Nome da Equipe:</label>
    <input type="text" name="nomeequipe">
</div>



<div class="item">
    <label>Nome do Responsável:</label><br>
    <input type="text" name="nomeresponsavel">
</div>



<div class="item">
    <label>Endereço:</label>
    <input type="text" name="endereco">
</div>



<div class="item">
    <label>Naturalidade:</label>
    <input type="text" name="naturalidade">

</div>


<div class="item">
  <button type="submit" name="cadastrar" class="btn btn-success" style="float: right;margin-top: 10px;">Cadastrar</button>
</div>






</div>







</div>

















  <!--
      <label>E-mail:</label>
  <input type="email" name="email" placeholder="example@email.com">



  <label>RG do Responsável:</label>
    <input  type="text" name="rgresponsavel" id="rg" placeholder="00.000.000-0">



    <label>Telefone:</label><br>
    <input  type="text" name="telefone" id="tel" placeholder="(00) 0000-0000">


    <label>Login:</label><br>
    <input type="text" name="login">





    <label>Senha:</label><br>
    <input  type="password" name="senha">
    <button type="submit" name="cadastrar" class="btn btn-success" style="float: right;margin-top: 10px;">Cadastrar</button> -->
 



















    
</form>
</div>


    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
      $("#rg").mask("999.999.999-W", {
        translation: {
          'W': {
            pattern: /[X0-9]/
          }
        },
        reverse: true
      }) 

      $("#tel").mask("(00) 0000-0000")});


    </script>


<div style="width: 100%;height: 100px;"></div>
  </body>
  </html>