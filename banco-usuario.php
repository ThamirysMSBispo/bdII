<?php 

function buscaUsuario($conexao, $email, $senha){
	 $senhaMd5 = md5($senha);
	$query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'"; 
		 	echo $query;


	$resultado = mysqli_query($conexao, $query);

	$usuario = mysqli_fetch_assoc($resultado);

	return $usuario;
}

 ?>