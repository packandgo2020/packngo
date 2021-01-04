<?php
include_once "../../controller/destinationC.php";
include_once "../../model/destination.php";
if(isset($_POST["btn"]) && isset($_POST["pays"]) && isset($_POST["ville"])) {
    $v = new destination( $_POST["pays"], $_POST["ville"]);
    $vc = new destinationC();
    $vc->ajouterDestination($v);
    header('Location: destination.php');
}
    ?>
