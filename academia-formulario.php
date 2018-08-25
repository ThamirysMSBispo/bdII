
<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("autentica-usuario.php");


verificaUsuario();

$cat = listaCategorias($conexao);

?>



	<div class="page-header">
		<h1>FORMULÁRIO</h1>

	</div>

	<div class="row">
		<div class="col-md-6">
			<h3>Cadastre-se</h3>
			<form action="cadastra-academia.php" method="post">
				
				<div class="form-group">
					<label>Nome</label>
					<input type="text" class="form-control" name="nome">
					
				</div>
				<div class="form-group">
					<label>Telefone</label>
					<input type="tel" class="form-control" name="telefone">
					
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email">
					
				</div>
				<div class="form-group">
					<label>CNPJ</label>
					<input type="text" class="form-control" name="cnpj">
					
				</div>
				<div class="form-group">
					<label>Descrição</label>
					<textarea  name="descricao" class="form-control"></textarea>
					
				</div>


				

				<div>
					<select name="categoria_id" class="form-control">
						<?php foreach ($cat as $categoria): ?>

						<option value="<?= $categoria['id']?>">

							<?= $categoria['nome']?>


						</option>
				
						<?php endforeach ?>
					</select>
			

					<div class="checkbox">
						<label>
							<input type="checkbox" name="validacao" value="true"> Validacao
						</label>
					
			</div>
				</div>

					<input type="submit" value="cadastrar"> <br>

			</form>
			
		</div>
		
	</div>



	

<?php include("rodape.php") ?>
