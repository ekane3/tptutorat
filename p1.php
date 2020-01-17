<?php
session_start();

$_SESSION['id'] = 1;

echo "Vous venez de la page".$_SESSION['id'];

?>S