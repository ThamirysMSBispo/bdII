<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-academias.php"); ?>
<?php  include("autentica-usuario.php"); ?>

<?php 

verificaUsuario();


 ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>

<p class="alert-success">Produto apagado com sucesso.</p>

<?php } ?>




<div class="page-header">
	<h1>Academias cadastradas</h1>
</div>
<table class="table table-striped table-bordered table-hover">

	<thead>
		<tr class="info">
			<th>Academia</th>
			<th>Telefone</th>
			<th>Descrição</th>
			<th>Categoria</th>
		</tr>
	</thead>

<?php


$lista = listaAcademias($conexao);

foreach($lista as $academias) {

	?>

<tbody>
	<tr>
		<td><?=$academias['nome']?></td>
		<td><?= $academias['telefone']?></td>
		<td><?=$academias['descricao']?></td>
		<td><?=$academias['categoria_nome']?></td>
		<td><a href="altera-lista-academia.php?id=<?= $academias['id']?>" class="btn btn-primary">alterar</a></td>
		<td>

			<script type="text/javascript">
				function RemoveItem() {
  					if (confirm("Deseja deletar a academia?") == true) {
   						 return true;
  				} else {
    					return false;
  					    }
										}
			</script>


			<form action="remove-academias.php" method="post">
            	<input type="hidden" name="id" value="<?=$academias['id']?>" />
            <button class="btn btn-danger" onclick="return RemoveItem();"">remover</button>
        </form>
					
		</td>

	</tr>

</tbody>
	
	 


<?php


};



		
		

		



?>

</table>

