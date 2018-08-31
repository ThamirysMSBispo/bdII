<?php include("conecta.php"); ?>
<?php include("banco-academias.php"); ?>

<?php include("autentica-usuario.php"); ?>
  

<?php include("cabecalho.php"); ?>





 <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta charset="UTF-8" />
    <title>Video Aula sobre Carrinho de Compras</title>
    </head>
 
    <body>

    <?php
          
           
          $sql = "SELECT * FROM servicos";
          $qr = mysqli_query($conexao, $sql) or die(mysqli_error());
          while($ln = mysqli_fetch_assoc($qr)){
             echo '
<h2>'.$ln['nome'].'</h2>
 
';
             echo 'Preço : R$ '.number_format($ln['valor'], 2, ',', '.').'
';
             echo '<img src="img/'.$ln['nome'].'" /> 
';
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
             echo '
<hr />
 
';
          }
    ?>
 
    </body>
 
    </html>

