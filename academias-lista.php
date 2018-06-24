<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-academias.php"); ?>



<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>

<p class="alert-success">Produto apagado com sucesso.</p>

<?php } ?>





<table class="table-striped table-bordered">

<?php


$lista = listaAcademias($conexao);

foreach($lista as $academias) {

	?>

	<tr>
		<td><?=$academias['nome']?></td>
		<td><?= $academias['telefone']?></td>
		<td><?=$academias['descricao']?></td>
		<td><?=$academias['categoria_nome']?></td>
		<td><a href="altera-lista-academia.php?id=<?= $academias['id']?>" class="btn btn-primary">alterar</a></td>
		<td>
			<form action="remove-academias.php" method="post">
            	<input type="hidden" name="id" value="<?=$academias['id']?>" />
            <button class="btn btn-danger">remover</button>
        </form>
					
		</td>

	</tr>


	
	 
<?php

}

?>

</table>