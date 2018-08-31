<?php

session_start();

function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
  	     header("Location: index.php?falhaDeSeguranca=true");
     die();
  }
}

function usuarioLogado() {
	
   return $_SESSION["usuario_logado"];
}


function logaUsuario($email) {
	$_SESSION["teste"] = 2;
  $_SESSION["usuario_logado"] = $email;
}


function logout() {
	//	unset($_SESSION['carrinho']);
    session_destroy();
    session_start();
    $_SESSION["teste"] = 0;

}