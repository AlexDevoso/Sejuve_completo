<?php
    if (session_status() !== PHP_SESSION_ACTIVE)
 {
    session_start();
}
    include "conexao.php";
    include "mensagem.php";
  ?>
  <html>
    <head>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--Icons -->
<link href="fontawesome/css/all.css" rel="stylesheet">

<!-- Awesome fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


      <title>Sejuv</title>


<style type="text/css">
  

body {
 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}


nav {

box-shadow: 0 5px 10px rgba(0,0,0,0.20);

}

h1 {
  font-size: 3em;
}

button {

border:none;

}


label {
font-size: 20px;
color: #000;
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

input[type="text"]:focus,
input[type="email"]:focus,input[type="password"]:focus,input[type="date"]:focus {
  border-color: #3ca9e2;
}



#bg_form {

 margin-left: auto;
    margin-right: auto;
     width: 35%;
      box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
      padding: 70px;

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
  border-radius: 5px;
}

.btn_ {
  margin: 5px;
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
    <a class="navbar-brand text-white" href="#">Sejuv</a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
   
      <li class="nav-item">
        <a class="nav-link text-white" href="adm.php">Área Administrativa</a>
      </li>
     
    </ul>
   
  </div>
</nav>












  <h3 style="color: #fff;">Login do Usuário</h3>



 <div id="bg_form">
  <center><h1>Login</h1></center>
  <form action="login_user_dados.php" method="POST">
    <p>
   
    <input name="login" placeholder="Login" id="login_user" type="text" required>
    </p>
    <p>
    
    <input name="senha" placeholder="Senha" id="senha_user" type="password" required>

    </p>
    <p>
    
    <button style="float: right;" type="submit" class="btn btn-success btn_"  >Entrar</button>
    <button style="float: right;" class="btn btn-primary btn_" data-toggle="modal" data-target="#modalExemplo" >Cadastra-se</button>

    </p>












<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Para conseguir um login Siga os passos abaixo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Envia os dados pra o example@gmail.com</p>
      </div>
      
    </div>
  </div>
</div>



  </form>
  
</div>



































<div style="width: 100%;height: 100px;"></div>
        <!-- Footer -->
<footer class="page-footer font-small bg-dark">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-white">Sejuv</h5>
        <p class="text-white">Secretaria de Esporte e Juventude</p>

      </div>
  

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-white">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class="text-white" style="te" href="#!"><i class="fab fa-instagram"></i>  Instagram</a>
          </li>
          <li>
          <a class="text-white"  href="#!"><i class="fab fa-facebook-square"></i>  Facebook</a>
          </li>
         
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white">© 2019 Copyright - SEJUV - Secretaria de Esporte e Juventude
  
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

        </body>
        </html>
            