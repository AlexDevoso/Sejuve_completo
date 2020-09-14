<?php
session_start();
include "verifica_login.php";
include "conexao.php";

$verifica = $_SESSION['login'][0];
$seleciona = "SELECT idevento_fk from equipe_evento where login ='{$verifica}'";
          $resus = mysqli_query($conexao, $seleciona);
          $verificaid = mysqli_fetch_row($resus);
          $str = implode($verificaid);
$sql = "SELECT contadorinput from evento where idevento = '$str'";
?>
<!DOCTYPE html>
<html>

<head>

  <script src="jquery/external/jquery/jquery.js"></script>

  <script src=" jquery/jquery-ui.min.js"></script>

  <link href="jquery/jquery-ui.min.css" rel="stylesheet" />



  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <!--Icons -->
  <link href="fontawesome/css/all.css" rel="stylesheet">

  <!-- Awesome fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">











  <title>Cadastrar Atleta</title>

  <style type="text/css">
    nav {
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.20);

    }

    h1 {
      font-size: 3em;
    }

    button {

      border: none;

    }


    label {
      font-size: 20px;
      color: #000;
    }


    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"] {
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
    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="date"]:focus {
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
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #3ca9e2;
    }

    input[type="text"]:focus:invalid,
    input[type="email"]:focus:invalid,
    input[type="password"]:focus:invalid {
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
  </style>






</head>




<body>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#rg").mask("999.999.999-W", {
        translation: {
          'W': {
            pattern: /[X0-9]/
          }
        },
        reverse: true
      })
    });
  </script>






  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand text-white" href="menu_time.php">Sejuv</a>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link text-white" href="consultar_atleta.php">Voltar</a>
        </li>

      </ul>

    </div>
  </nav>
  <div style="width: 100%;height: 50px;"></div>





  <center>
    <h1>Cadastrar Atleta</h1>
  </center>

  <div id="bg_form" style="width: 600px;">

    <form method="POST" action="cadastrar_atleta.php" enctype="multipart/form-data" name="cadastro">
      <label>Nome:</label>
      <input type="text" name="nome_atleta" style="text-transform: uppercase;" required><br>
      <br>

      <label>Data de nascimento:</label>
      <input type="date" name="data_nascimento_atleta" required><br>
      <br>

      <label>RG:</label>

      <input type="text" name="rg_atleta" id="rg" required>
      <br>

      <br>
      <label>Naturalidade:</label>
      <input type="text" name="naturalidade_atleta" style="text-transform: uppercase;" required><br>

      <br>

      <br>
      <label>IMAGEM DO RG:</label>
      <input type="file" name="imagem" />

      <br>


      <button type="submit" class="btn btn-success" style="float: right;" name="cadastrar">Cadastrar</button>




    </form>
  </div>

  <div style="width: 100%;height: 100px;"></div>
</body>

</html>