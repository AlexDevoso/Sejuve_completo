<html>
<head>

	<title>Login Escola</title>

<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" type="image/x-icon" href="../imagens/sistema/fav_icon/fav_icon.ico">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--Icons -->
<link href="fontawesome/css/all.css" rel="stylesheet">

<!-- Awesome fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

      



<style type="text/css">
	
  body{

 background: #56CCF2;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2F80ED, #56CCF2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


  }
 





#bg_form {

    margin-left: auto;
    margin-right: auto;
    width: 30%;
    box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
    padding: 25px 50px 50px;
    background-color: #fff;
    border-radius: 5px;

}

#adm_h:hover {
  background-color: rgba(3, 119, 191, 1);
  border-radius: 40px;

}

 .btn-azul {


background: #36D1DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color: #fff;
border-radius: 50px;
border: none;
height: 50px;
font-size: 18px;



 }

.btn-verde {
  background: #38ef7d;  /* fallback for old browsers */


color: #fff;
border-radius: 50px;
border: none;
height: 50px;
font-size: 18px;


}

input {
  width: 100%;
  border: none !important;
  background-color: #f5f5f5 !important;
  border-radius: 5px !important;
  height: 50px !important;
  padding-left: 20px !important;
}


@media (max-width: 576px) { 

#bg_form {
  width: 90% !important;
  box-shadow: none;

}

#sejuve_logo {
  width: 150px !important;
}


footer {

   position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;

  color: white;
  text-align: center;
}


 }



 #voltar_h:hover {
background-color:  #4FCFF9;
border-radius: 50px;
width: 100px;
text-align: center;
margin: 5px;
font-size: 20px;
}

#voltar_h {

width: 100px;
text-align: center;
color: #fff;
text-decoration: none;
float:right;
margin: 5px;
font-size: 20px;
}


#sejuve {

color: #fff;
font-size: 25px;
text-decoration: none;
margin: 20px;
font-weight:700;

}

</style>




</head>
<body>





    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>






<nav style="background: rgb(0, 0, 0) transparent !important;">
  
<a id="sejuve" href="adm.php">Sejuve</a>

<a id="voltar_h" href="adm.php">Voltar</a>

</nav>
<br>



 <center style="display: flex;flex-direction: row;align-items: center;justify-content: center;margin: 10px;" ><h2 class="text-white">Jogos Escolares</h2></center>
 <div id="bg_form">

 	 <center><h1 style="color: #424242;margin-bottom:30px ; ">Login</h1></center>
  <form action="../funcoes/login_escolares.php" method="POST">    
    <input name="login" placeholder="Login" id="login_user" type="text" class="form-control" required>
 <br>
    <input name="senha" placeholder="Senha" id="senha_user" type="password" class="form-control" required>
<br>  
    <button style="width: 100%;" type="submit" class="btn-verde shadow"  >Entrar</button>

  </form>
</div>


<footer style="   position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
 
  color: white;
  text-align: center;">
  <div>
   <center><p  style="color: #fff;font-size: 15px;text-align: center;">©  Copyright 2020 SEJUVE - Secretaria de Esporte e Juventude.</p></center>
  </div>

</footer>
</body>
</html>