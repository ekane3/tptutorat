<?php
session_start();
unset($_SESSION['nom']);
session_destroy();
header('Location: login.php');
/*$sql = "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$name, $surname, $sex, $id]);*/
?>