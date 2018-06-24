<?php 	include("cabecalho.php"); 
 		include("conecta.php"); 
 		include("banco-academias.php"); 



	$id = $_POST['id'];


	removeAcademia($conexao, $id);

	header("Location:academias-lista.php?removido=true");

	die();
	?>																															