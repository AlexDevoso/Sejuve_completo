<?php
  include "./Jogos_escolares/funcoes/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style_home.css">
    <title>Sejuve</title>    
</head>


<body>
<style>
  body{
    font-family: Verdana, sans-serif!important;
    font-weight:bold;
    text-align: justify;
  }
  p{
    font-family: Helvetica, sans-serif!important;
    font-weight:bold;
  }
  h5{
    color:#00ffff!important;
  }
</style>

<div id="nv" class="sticky-top ">
<nav  class="navbar navbar-expand-lg navbar navbar-dark " id="nav" >
  <a class="navbar-brand" href="#">
  <img src="./Jogos_escolares/imagens/sistema/logo_login_user.png" width="50" height="50" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown dropright ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Eventos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Calendário</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class=" dropdown-menu dropdown-item">Sistema de Inscrições</a>
          </div>
          <a class="dropdown-item" href="./Jogos_escolares/">Jogos Escolares</a>
          <a class="dropdown-item" href="./Jogos_escolares/interface/jogos.php">Futebol Municipal</a>
        </div>
      </li>
      <li class="nav-item dropdown dropright">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sobre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="equipe.php">Equipe da Sejuve</a>
          <a class="dropdown-item" href="#">Seleções municipais</a>
          <a class="dropdown-item" href="Jogos_escolares/interface/adm.php">Administrativo</a>
          <a class="dropdown-item" href="#">Contato</a>
          
          
        </div>
      </li>
    </ul>
    
  </div>
</nav>
</div>
<div>
<div class="card mb-3 bg-transparent border-0" style="max-width: 1000px; margin:auto;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="./imagem/brasao_sejuv.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-white text-uppercase">Contato</h5>
        <p >
                <img width="25px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNDYuMDA0MSIgeTE9IjYzNC4xMjA4IiB4Mj0iLTMyLjkzMzQiIHkyPSI2NDcuMTkxNyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgzMiAwIDAgLTMyIDE1MTkgMjA3NTcpIj4NCgk8c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZDMTA3Ii8+DQoJPHN0b3AgIG9mZnNldD0iMC41MDciIHN0eWxlPSJzdG9wLWNvbG9yOiNGNDQzMzYiLz4NCgk8c3RvcCAgb2Zmc2V0PSIwLjk5IiBzdHlsZT0ic3RvcC1jb2xvcjojOUMyN0IwIi8+DQo8L2xpbmVhckdyYWRpZW50Pg0KPHBhdGggc3R5bGU9ImZpbGw6dXJsKCNTVkdJRF8xXyk7IiBkPSJNMzUyLDBIMTYwQzcxLjY0OCwwLDAsNzEuNjQ4LDAsMTYwdjE5MmMwLDg4LjM1Miw3MS42NDgsMTYwLDE2MCwxNjBoMTkyDQoJYzg4LjM1MiwwLDE2MC03MS42NDgsMTYwLTE2MFYxNjBDNTEyLDcxLjY0OCw0NDAuMzUyLDAsMzUyLDB6IE00NjQsMzUyYzAsNjEuNzYtNTAuMjQsMTEyLTExMiwxMTJIMTYwYy02MS43NiwwLTExMi01MC4yNC0xMTItMTEyDQoJVjE2MEM0OCw5OC4yNCw5OC4yNCw0OCwxNjAsNDhoMTkyYzYxLjc2LDAsMTEyLDUwLjI0LDExMiwxMTJWMzUyeiIvPg0KPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNDIuMjk3MSIgeTE9IjYzNy44Mjc5IiB4Mj0iLTM2LjY0MDQiIHkyPSI2NDMuNDg0NiIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgzMiAwIDAgLTMyIDE1MTkgMjA3NTcpIj4NCgk8c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZDMTA3Ii8+DQoJPHN0b3AgIG9mZnNldD0iMC41MDciIHN0eWxlPSJzdG9wLWNvbG9yOiNGNDQzMzYiLz4NCgk8c3RvcCAgb2Zmc2V0PSIwLjk5IiBzdHlsZT0ic3RvcC1jb2xvcjojOUMyN0IwIi8+DQo8L2xpbmVhckdyYWRpZW50Pg0KPHBhdGggc3R5bGU9ImZpbGw6dXJsKCNTVkdJRF8yXyk7IiBkPSJNMjU2LDEyOGMtNzAuNjg4LDAtMTI4LDU3LjMxMi0xMjgsMTI4czU3LjMxMiwxMjgsMTI4LDEyOHMxMjgtNTcuMzEyLDEyOC0xMjgNCglTMzI2LjY4OCwxMjgsMjU2LDEyOHogTTI1NiwzMzZjLTQ0LjA5NiwwLTgwLTM1LjkwNC04MC04MGMwLTQ0LjEyOCwzNS45MDQtODAsODAtODBzODAsMzUuODcyLDgwLDgwDQoJQzMzNiwzMDAuMDk2LDMwMC4wOTYsMzM2LDI1NiwzMzZ6Ii8+DQo8bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzNfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ii0zNS41NDU2IiB5MT0iNjQ0LjU3OTMiIHgyPSItMzQuNzkxOSIgeTI9IjY0NS4zMzMxIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDMyIDAgMCAtMzIgMTUxOSAyMDc1NykiPg0KCTxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkMxMDciLz4NCgk8c3RvcCAgb2Zmc2V0PSIwLjUwNyIgc3R5bGU9InN0b3AtY29sb3I6I0Y0NDMzNiIvPg0KCTxzdG9wICBvZmZzZXQ9IjAuOTkiIHN0eWxlPSJzdG9wLWNvbG9yOiM5QzI3QjAiLz4NCjwvbGluZWFyR3JhZGllbnQ+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOnVybCgjU1ZHSURfM18pOyIgY3g9IjM5My42IiBjeT0iMTE4LjQiIHI9IjE3LjA1NiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />  
                <a class="text-white" href="https://www.instagram.com/sejuvepentas/">@sejuvepentas</a>
                 
        <p>
        <p>
        <img width="25px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6IzIxOTZGMzsiIGQ9Ik0zMjAsODUuMzMzaDY0YzUuODkxLDAsMTAuNjY3LTQuNzc2LDEwLjY2Ny0xMC42Njd2LTY0QzM5NC42NjcsNC43NzYsMzg5Ljg5MSwwLDM4NCwwaC02NA0KCWMtNjQuNzcyLDAuMDcxLTExNy4yNjMsNTIuNTYxLTExNy4zMzMsMTE3LjMzM1YxOTJIMTI4Yy01Ljg5MSwwLTEwLjY2Nyw0Ljc3Ni0xMC42NjcsMTAuNjY3djY0YzAsNS44OTEsNC43NzYsMTAuNjY3LDEwLjY2NywxMC42NjcNCgloNzQuNjY3djIyNGMwLDUuODkxLDQuNzc2LDEwLjY2NywxMC42NjcsMTAuNjY3aDY0YzUuODkxLDAsMTAuNjY3LTQuNzc2LDEwLjY2Ny0xMC42Njd2LTIyNGg3NC42NjcNCgljNC41ODktMC4wMDMsOC42NjItMi45NDIsMTAuMTEyLTcuMjk2bDIxLjMzMy02NGMxLjg2Mi01LjU4OS0xLjE2LTExLjYyOS02Ljc0OS0xMy40OTFjLTEuMDg0LTAuMzYxLTIuMjItMC41NDYtMy4zNjMtMC41NDdoLTk2DQoJdi03NC42NjdDMjg4LDk5LjY2LDMwMi4zMjcsODUuMzMzLDMyMCw4NS4zMzN6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />               
         <a class="text-white" href="https://www.facebook.com/sejuve.pentecoste.33">Sejuve Pentecoste</a>
        </p>

        <p>
        <img width="25px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0NGRDhEQzsiIGQ9Ik00NDMuNDk5LDQxNy45NDFsLTE4MS4zMzMtMTI4Yy0zLjY4OS0yLjYwNi04LjYyLTIuNjA2LTEyLjMwOSwwbC0xODEuMzMzLDEyOA0KCWMtMi44MzcsMS45OTktNC41MjUsNS4yNTQtNC41MjMsOC43MjV2MTAuNjY3QzY0LDQ0My4yMjQsNjguNzc2LDQ0OCw3NC42NjcsNDQ4aDM2Mi42NjdjNS44OTEsMCwxMC42NjctNC43NzYsMTAuNjY3LTEwLjY2Nw0KCXYtMTAuNjY3QzQ0OC4wMDcsNDIzLjIsNDQ2LjMyOCw0MTkuOTQ1LDQ0My40OTksNDE3Ljk0MXoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGQUZBRkE7IiBkPSJNMjYyLjE2NSwyODkuOTQxbC0xODEuMzMzLTEyOGMtNC44MDctMy40MDUtMTEuNDY1LTIuMjY4LTE0Ljg3LDIuNTM5DQoJYy0xLjI4MSwxLjgwOC0xLjk2NywzLjk3LTEuOTYyLDYuMTg2djI1NmMtMC4wMTIsNS44OTEsNC43NTUsMTAuNjc2LDEwLjY0NiwxMC42ODhjMi4yMTYsMC4wMDQsNC4zNzgtMC42ODIsNi4xODYtMS45NjINCglsMTgxLjMzMy0xMjhjNC44MTMtMy4zOTcsNS45NjEtMTAuMDUyLDIuNTY0LTE0Ljg2NWMtMC43MDItMC45OTUtMS41NjktMS44NjItMi41NjQtMi41NjRWMjg5Ljk0MXoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNFRUVFRUU7IiBkPSJNNDQyLjI0LDE2MS4xOTVjLTMuNTQ2LTEuODEyLTcuODAyLTEuNTI1LTExLjA3MiwwLjc0N2wtMTgxLjMzMywxMjgNCgljLTQuODEzLDMuMzk3LTUuOTYxLDEwLjA1Mi0yLjU2NCwxNC44NjVjMC43MDIsMC45OTUsMS41NjksMS44NjIsMi41NjQsMi41NjRsMTgxLjMzMywxMjhjNC44MDcsMy40MDUsMTEuNDY1LDIuMjY4LDE0Ljg3LTIuNTM5DQoJYzEuMjc3LTEuODAyLDEuOTYyLTMuOTU2LDEuOTYyLTYuMTY1di0yNTZDNDQ4LDE2Ni42ODEsNDQ1Ljc3OSwxNjMuMDI4LDQ0Mi4yNCwxNjEuMTk1eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0VDRUZGMTsiIGQ9Ik00NjguOCw3MS4zMzlDNDY3LjM2Miw2Ni45Niw0NjMuMjc1LDY0LDQ1OC42NjcsNjRINTMuMzMzYy01Ljg5MSwwLTEwLjY2Nyw0Ljc3Ni0xMC42NjcsMTAuNjY3DQoJYzAsMy4zNTcsMS41ODEsNi41MTksNC4yNjcsOC41MzNMMjQ5LjYsMjMyLjUzM2MzLjc2MiwyLjc3LDguODg5LDIuNzcsMTIuNjUxLDBMNDY0LjkxNyw4My4yDQoJQzQ2OC42MzEsODAuNDk1LDQ3MC4xOTUsNzUuNzE2LDQ2OC44LDcxLjMzOXoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGNDQzMzY7IiBkPSJNNDU4LjY2Nyw2NGMtMi4zMDgsMC00LjU1NCwwLjc0OS02LjQsMi4xMzNMMjU2LDIxMC43NTJMNTkuNzMzLDY2LjEzMw0KCUM1Ny44ODcsNjQuNzQ5LDU1LjY0MSw2NCw1My4zMzMsNjRDMjMuODc4LDY0LDAsODcuODc4LDAsMTE3LjMzM3YyNzcuMzMzQzAsNDI0LjEyMiwyMy44NzgsNDQ4LDUzLjMzMyw0NDhoMjEuMzMzDQoJYzUuODkxLDAsMTAuNjY3LTQuNzc2LDEwLjY2Ny0xMC42Njd2LTI0Ni4wOGwxNjQuNTAxLDExNi4xMzljMy42ODksMi42MDYsOC42MiwyLjYwNiwxMi4zMDksMGwxNjQuNTIzLTExNi4xMzl2MjQ2LjA4DQoJYzAsNS44OTEsNC43NzYsMTAuNjY3LDEwLjY2NywxMC42NjdoMjEuMzMzQzQ4OC4xMjIsNDQ4LDUxMiw0MjQuMTIyLDUxMiwzOTQuNjY3VjExNy4zMzNDNTEyLDg3Ljg3OCw0ODguMTIyLDY0LDQ1OC42NjcsNjR6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
        <a class="text-white" href="https://www.sejuvepentas@gmail.com">sejuvepentas@gmail.com</a>

        </p>
        <p>
        <img width="25px" src="./imagem/information.png" />
        <a class="text-white" href="https://forms.gle/wuEcCnzz43GD72kA6">Formulário de sugestões</a>

        </p>

        
      </div>
    </div>
  </div>
</div>
  
<div>



<div style="margin-top:10px;">

</div>

<footer style="   position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  margin-top:135px!important;
  color: white;
  text-align: center;">
  <div>
   <center><p  style="color: #fff;font-size: 15px;text-align: center;">©  Copyright 2020 SEJUVE - Secretaria de Esporte e Juventude Municipal de Pentecoste.</p></center>
  </div>

</footer>

<script src="./js/scroll.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>