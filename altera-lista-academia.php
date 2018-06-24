<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("banco-academias.php");



$id = $_GET["id"];
$academia = buscaAcademia($conexao, $id);

$validacao = $academia['validacao'] ? "checked = 'checked'" : "";

$cat = listaCategorias($conexao);

?>
<html>

<h1>Atualização do cadastro</h1> <br>
	<form action="altera-academia.php" method="post">
		<input type="hidden" name="id" value="<?= $academia['id'] ?>">
		Nome: <input type="text" name="nome" value="<?= $academia['nome']?>"> <br> <br>
		Telefone: <input type="tel" name="telefone" value="<?= $academia['telefone']?>" id="example-tel-input"> <br> <br>
		Email: <input type="email" name="email" value="<?= $academia['email']?>"> <br> <br>
		CNPJ: <input type="text" name="cnpj" value="<?= $academia['cnpj']?>"> <br> <br>
		descrição: <textarea  name="descricao" > <?= $academia['descricao']?></textarea><br><br>



		<tr>
    
    	<td><input type="checkbox" name="validacao"  <?= $validacao ?> value="true"> Usado</td>
		</tr>

		<tr>
		<td>Categoria</td>
		<td>
			<select name="categoria_id">
			<?php foreach ($cat as $categoria):

				$categoriaSelecionada = $academia['categoria_id'] == $categoria['id'];
				$selecao = $categoriaSelecionada ? "selected = 'selected'" : "";

			?>

				<option value="<?= $categoria['id']?>" <?= $selecao ?>>

						<?= $categoria['nome']?>


				</option>
				
			<?php endforeach ?>
			</select>


		</td>

	</tr>

		<input type="submit" value="alterar"> <br>

	</form>	



</html>


<?php include("rodape.php") ?>
