<?php

	if (empty($_SESSION['usuario'])) {
		header('Location: ../interface/adm.php');
		exit();
	}

?>