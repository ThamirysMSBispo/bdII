<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("banco-academias.php");



$id = $_GET["id"];
$academia = buscaAcademia($conexao, $id);

$validacao = $academia['validacao'] ? "checked = 'checked'" : "";

$cat = listaCategorias($conexao);

?>



	<div class="page-header">
		<h1>Atualização do cadastro</h1>
	</div>


	<div class="row">
		<div class="col-md-6">

			<form action="altera-academia.php" method="post">

				<div class="form-group">

				<input type="hidden"  name="id" value="<?= $academia['id'] ?>">

</div>
				<div class="form-group">
						<label>Nome</label>
							<input type="text" class="form-control" name="nome" value="<?= $academia['nome']?>">
					
				</div>


				<div class="form-group">
						<label>Telefone</label>
							<input type="tel"  class="form-control" name="telefone" value="<?= $academia['telefone']?>" id="example-tel-input">
					
				</div>

			<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" value="<?= $academia['email']?>">
					
				</div>

			<div class="form-group">
					<label>CNPJ</label>
					<input type="text" class="form-control" name="cnpj" value="<?= $academia['cnpj']?>">
					
				</div>

		<div class="form-group">
					<label>Descrição</label>
					<textarea  name="descricao" class="form-control" > <?= $academia['descricao']?></textarea>
					
				</div>

		
			<div>
					<select name="categoria_id" class="form-control">
						<?php foreach ($cat as $categoria):

							$categoriaSelecionada = $academia['categoria_id'] == $categoria['id'];
							$selecao = $categoriaSelecionada ? "selected = 'selected'" : "";

						?>

						<option value="<?= $categoria['id']?>" <?= $selecao ?>>

							<?= $categoria['nome']?>


						</option>
				
						<?php endforeach ?>
					</select>
			

					<div class="checkbox">
						<label>
							<input type="checkbox"  name="validacao"  <?= $validacao ?> value="true"> Validacao
						</label>
					
					</div>
			</div>
			


		

		<input type="submit" value="alterar"> <br>

	</form>	


</div>
</div>


<?php include("rodape.php") ?>
