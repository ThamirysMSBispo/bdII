<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Academia</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/academia.css">
	 		<link href="css/signin.css" rel="stylesheet">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


 </head>
 <body>
 	

 	

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              
              <a class="navbar-brand" href="index.php">FITNESS</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li><a href="academias-lista.php">Academias</a></li>
                <!-- <li><a href="index.php">Home</a></li> -->
                <li><a href="academia-formulario.php">Cadastro</a></li>

                


                <li><a href="index-carrinho.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>




                <?php if(isset($_SESSION["teste"]) && $_SESSION["teste"] == 2) { ?>
    
                <li><a href=#></a></li>
        
            <li><a href="#"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>

            <li role="presentation" class="active"><a href="logout.php">Sair</a></li>
            
          
                
                      

                      <?php
                    }

                 ?>

                 <?php if(isset($_SESSION["teste"]) && $_SESSION["teste"] !== 2) { ?>
    
                <li><a href=#></a></li>
        
            <li><a href="#"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>
             <li><a href="c#p"></a></li>

            <li role="presentation" class="active"><a href="login-formulario.php">Entrar</a></li>
            
          
                                     

                      <?php
                    }

                 ?>


              
              </ul>
            </div>
          </div>
        </nav>

      </div>
    



 	<div clss="container">
 		<div class="principal">
     <?php $_GET['i'] = 1 ?>



