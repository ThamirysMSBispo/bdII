
<?php include("cabecalho.php");
	include("conecta.php");

?>

<?php 
function inseriUsuario($conexao, $email, $senha){

	$senhaMd5 = md5($senha);

	 $query = "insert into usuarios (email, senha) values ('{$email}', '{$senhaMd5}')";


	 return mysqli_query($conexao, $query);
}

$email = $_GET["email"];
$senha = $_GET["senha"];


if (inseriUsuario($conexao, $email, $senha)){?>

	<p class="text-success">Usuário <?= $email; ?>, <?= $senha; ?> foi cadastrado</p>

<?php } else { ?>

	<p class="text-danger">Usuário <?= $email; ?>, <?= $senha; ?> não foi cadastrado</p>
<?php

}
mysqli_close($conexao);

?>





<?php include("rodape.php") ?>
