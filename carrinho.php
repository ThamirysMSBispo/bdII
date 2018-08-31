

<?php include("conecta.php"); ?>

<?php include("sessao-carrinho.php") ?>
<?php include("cabecalho.php"); ?>



<?php 

verificaUsuario();


 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>fitness.com</title>
</head>
<body>

    <body>
    <table>
        <caption>Carrinho de Compras</caption>
        <thead>
            <tr>
                <th width="244">Produto</th>
                <th width="79">Quantidade</th>
                <th width="89">Pre&ccedil;o</th>
                <th width="100">SubTotal</th>
                <th width="64">Remover</th>
            </tr>
        </thead>
        <form action="?acao=up" method="post">
        <tfoot>
            <tr>
                <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
            <tr>
            <td colspan="5"><a href="index-carrinho.php">Continuar Comprando</a></td>
        </tfoot>
        <tbody>
     <?php
        if(count($_SESSION['carrinho']) == 0){
          echo '
                <tr>
                    <td colspan="5">Não há produto no carrinho</td>
                </tr>
            ';
          } else {
               
                $total = 0;
                foreach($_SESSION['carrinho'] as $id => $qtd){
                        $sql   = "SELECT *  FROM servicos WHERE id= '$id'";
                        $qr    = mysqli_query($conexao, $sql) or die(mysqli_error());
                        $ln    = mysqli_fetch_assoc($qr);
                        $nome  = $ln['nome'];
                        $preco = number_format($ln['valor'], 2, ',', '.');
                        $sub   = number_format($ln['valor'] * $qtd, 2, ',', '.');
                        $total += $ln['valor'] * $qtd;
                         echo '
                            <tr>       
                                <td>'.$nome.'</td>
                                <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                <td>R$ '.$preco.'</td>
                                <td>R$ '.$sub.'</td>
                                <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                            </tr>';
                }
                $total = number_format($total, 2, ',', '.');
                echo '<tr>                         
                            <td colspan="4">Total</td>
                            <td>R$ '.$total.'</td>
                    </tr>';
          }
                   ?>
        
         </tbody>
    </form>
 </table>
 
</body>
</html>

</body>
</html>