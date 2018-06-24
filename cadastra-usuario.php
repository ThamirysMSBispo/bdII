
<?php include("cabecalho.php");
	include("conecta.php");

?>

<?php 
function inseriUsuario($conexao, $nome, $senha){

	$senhaMd5 = md5($senha);

	 $query = "insert into usuarios (nome, senha) values ('{$nome}', '{$senhaMd5}')";


	 return mysqli_query($conexao, $query);
}

$nome = $_GET["nome"];
$senha = $_GET["senha"];


if (inseriUsuario($conexao, $nome, $senha)){?>

	<p class="text-success">Usuário <?= $nome; ?>, <?= $senha; ?> foi cadastrado</p>

<?php } else { ?>

	<p class="text-danger">Usuário <?= $nome; ?>, <?= $senha; ?> não foi cadastrado</p>
<?php

}
mysqli_close($conexao);

?>





<?php include("rodape.php") ?>
