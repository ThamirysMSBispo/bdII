
<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");


$cat = listaCategorias($conexao);

?>
<html>
	<form action="cadastra-academia.php" method="post">
		<h2>Cadastro</h2> <br>
		Nome: <input type="text" name="nome"> <br> <br>
		Telefone: <input type="tel" name="telefone" value="(00) 00000-0000" id="example-tel-input"> <br> <br>
		Email: <input type="email" name="email"> <br> <br>
		CNPJ: <input type="text" name="cnpj"> <br> <br>
		descrição: <textarea  name="descricao"></textarea><br><br>



		<tr>
    <td></td>
    <td><input type="checkbox" name="validacao" value="true"> Usado</td>
</tr>

		<tr>
		<td>Categoria</td>
		<td>
			<select name="categoria_id">
			<?php foreach ($cat as $categoria): ?>

				<option value="<?= $categoria['id']?>">

						<?= $categoria['nome']?>


				</option>
				
			<?php endforeach ?>
			</select>


		</td>

	</tr>

		<input type="submit" value="cadastrar"> <br>

	</form>	



</html>


<?php include("rodape.php") ?>
