<?php
session_start();
session_destroy();
//Redirecionar o usuario para página de LogicException
header("Location: index_gride.php");
?>
