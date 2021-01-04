<?php
session_start();
include_once 'utilisateur.php';
include_once 'utilisateurc.php';
$message="";
$userC = new utilisateurc();
?>
<html> 
<body>
<form action="verifier_mail.php" method='POST' >
<div> Veuillez saisir votre email <input type="email" name="email" id="email" > </input> </div>
<div><input type="submit" name="submit" value="Submit"></div>
</form>
</body>

</html>
