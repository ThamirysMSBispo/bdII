<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-academias.php");
?>




<?php 


$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$cnpj = $_POST["cnpj"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];	


if(array_key_exists('validacao', $_POST)) {
    $validacao = 1;
} else {
    $validacao = 0;
}


if (inseriAcademia($conexao, $nome, $telefone, $email, $cnpj, $descricao, $categoria_id, $validacao)){?>

	<p class="text-success">Academia <?= $nome; ?>, <?= $telefone; ?> foi cadastrada</p>

<?php } else { ?>

	<p class="text-danger">Academia <?= $nome; ?>, <?= $telefone; ?> não foi cadastrada</p>
<?php

}
mysqli_close($conexao);

?>





<?php include("rodape.php") ?>
