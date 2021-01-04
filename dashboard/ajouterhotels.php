<?php
include_once "../../controller/hotelC.php";
include_once "../../model/hotel.php";
if(isset($_POST["btn"]) && isset($_POST["nomhotel"]) && isset($_POST["etoile"])&& isset($_POST["description"])&& isset($_POST["dest"])) {
    $v = new hotel( $_POST["nomhotel"], $_POST["etoile"],$_POST["description"],$_POST["dest"]);
    $vc = new hotelC();
    $vc->ajouterHotel($v);
    header('Location: hotels.php');
}
    ?>
