
 <?php include("cabecalho.php") ?>
 <?php if(isset($_GET["login"]) && $_GET["login"]==true) {?>
 			<p class="alert-success">está logado no sistema</p>

<?php } ?>


<?php if(isset($_GET["login"]) && $_GET["login"]==false) {?>
 			<p class="alert-danger">não está logado no sistema</p>

<?php } ?>


 			<h1> ACADEMIA </h1>
 		</div>
		
	</div>


 </body>
 </html>