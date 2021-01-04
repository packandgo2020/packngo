<?php
session_start();
session_destroy();
echo "<script>alert(\"Deconnection avec succés\")</script>";
header('Location:index.php');
?>