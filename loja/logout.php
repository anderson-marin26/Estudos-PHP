<?php
include('logica-usuario.php');
logout();
$_SESSION["logout"] = "Deslogado com sucesso";
header("Location: index.php");
die();
?>