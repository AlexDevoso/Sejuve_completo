<?php
include('conexao.php');

if(isset($_POST['adicionar_informativo'])){
    $id_no = mysqli_escape_string($conexao, $_POST['id_no']);
}


$sql = "SELECT fk_noticia from noticia_painel";
$result = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);

if($row >= 6){
    header('Location:../interface/editar_pagina.php');
}
else{
    $sql = "INSERT INTO noticia_painel (fk_noticia) values('$id_no')";
    if(mysqli_query($conexao, $sql)){
        header('Location:../interface/editar_pagina.php');
    }
    else{
        header('Location:../interface/editar_pagina.php');

    }
}
?>