
 <?php include_once("cabecalho.php") ?>
<?php include("autentica-usuario.php"); ?>

 <div class="teste2">
 	
 <?php if(isset($_GET["login"]) && $_GET["login"]==true) {?>
 			<p class="alert-success">está logado no sistema</p>

<?php } ?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false) {?>
 			<p class="alert-danger">não está logado no sistema</p>

<?php } ?>



<?php
if(isset($_GET["falhaDeSeguranca"])) {
?>
  <p class="alert-danger">Você não tem acesso a esta funcionalidade!</p>
<?php
}
?>


<?php
if(usuarioEstaLogado()) {

?>
<p class="text-success">Você está logado como <?= usuarioLogado() ?></p>
<a href="logout.php">Deslogar</a></p>

<?php
}
?>

<?php
     if(isset($_GET["logout"]) && $_GET["logout"]==true) {
?>
    <p class="alert-danger">Deslogado com sucesso</p>
<?php
     }
?>

 			<h1> ACADEMIAS </h1><br><br><br><br>

<?php if(!isset($_GET["pagina"])) {

$pagina = 0;
$_GET["pagina"] = $pagina;

	?>


<?php } ?>

  <?php include("carousel/c.php") ?>
		
		

<?php include("rodape.php") ?>



</div>