<?php
session_start();
session_destroy();
header('Location: ../interface/adm.php');
?>