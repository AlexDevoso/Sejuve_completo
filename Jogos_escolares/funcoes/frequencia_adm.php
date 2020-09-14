<?php
session_start();
include "conexao.php";
if(isset($_POST['confirmar'])){
  $horario_inicial = mysqli_escape_string($conexao, $_POST['horario_inicial']);
  $horario_final = mysqli_escape_string($conexao, $_POST['horario_final']);
  $nome = mysqli_escape_string($conexao, $_POST['nome']);
  $dia = date('d');
  $dia_nome = date('l');
  $mes = date('m');
  $ano = date('Y');

  $sql_id = "SELECT id_fun from funcionario where nome_fun = '{$nome}'";
  $resultado_id = mysqli_query($conexao, $sql_id);
  $row_id = mysqli_fetch_row($resultado_id);
  $id = implode($row_id);

  $sql_insert = "INSERT INTO frequencia_fun(mes_ff, dia_ff, ano_ff, horario_inicial_ff, horario_final_ff, fk_id, dia_nome_ff)
  values('$mes','$dia','$ano','$horario_inicial','$horario_final','$id','$dia_nome')";
  if($result = mysqli_query($conexao, $sql_insert)){
    header('Location: ../interface/area_adm_frequencia.php');
  }
  else{
    header('Location: ../interface/area_adm_frequencia.php');
  }

}

else{
  header('Location: ../interface/err.php');
}


?>

