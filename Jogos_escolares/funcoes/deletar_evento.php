<?php
    session_start();
    include('conexao.php');

        if(isset($_POST['delete'])){
            $eventoid = mysqli_escape_string($conexao, $_POST['idevento']);
            
            $sqlimg = "SELECT logoevento, idevento from evento where idevento = '$eventoid'";
            $resultimg = mysqli_query($conexao, $sqlimg);
            $dadosimg = mysqli_fetch_array($resultimg);
            $sqlee = "SELECT equipeid_fk from equipe_evento where idevento_fk = '$eventoid'";
            $resultee = mysqli_query($conexao, $sqlee);
            $dadosee = mysqli_fetch_row($resultee);
            $str = implode($dadosee);
            $sql2 = "UPDATE equipe_evento set idevento_fk = null where idevento_fk = '$eventoid'";
            
            $sql3 = "DELETE FROM equipe where equipeid = '$str'";
            
            $sql = "DELETE FROM evento where idevento = '$eventoid'";
            if(mysqli_query($conexao, $sql2) && mysqli_query($conexao, $sql3)){
                if(mysqli_query($conexao, $sql)){
                    unlink("../imagens/".$dadosimg['logoevento']);
                header('Location: ../interface/lista_de_eventos.php');
                $_SESSION['login'][1] = "DELETADO COM SUCESSO";
                }
            }else{
                header('Location: ../interface/lista_de_eventos.php');
                 $_SESSION['login'][1] = "IMPOSSIVEL DELETAR";
            }             
        }
?>