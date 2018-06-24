<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-academias.php");
?>




<?php 

$id = $_POST["id"];
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


if (alteraAcademia($conexao, $id, $nome, $telefone, $email, $cnpj, $descricao, $categoria_id, $validacao)){?>

	<p class="text-success">Academia <?= $nome; ?>, <?= $telefone; ?> foi alterada</p>

<?php } else { ?>

	<p class="text-danger">Academia <?= $nome; ?>, <?= $telefone; ?> não foi alterada</p>
<?php

}
mysqli_close($conexao);

?>





<?php include("rodape.php") ?>
