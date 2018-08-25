<?php include("autentica-usuario.php");
logout();
header("Location: index.php?logout=true");
die();