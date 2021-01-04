<?php
session_start();

include_once 'utilisateur.php';
include_once 'utilisateurc.php';
$message="";
$userC = new utilisateurc();

if (isset($_POST["email"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["password"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
         $_SESSION['e'] = $_POST["email"];
         $_SESSION['id']=$userC->recupererUtilisateur1($_POST["email"]);
         //$user=$userC->recupererUtilisateur($_SESSION['id']);
         //echo $user['nom'];
         
         // on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){
            
                  header('location:afficherUtilisateurs.php');


}

        else{
            echo "<script>alert(\"MDP OU EMAIL INCORRECTE \")</script>";

        }}
    else
        $message = "Missing information";}
        $x=$userC->verifconnecter();
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
<form name="frmUser" method="POST" action="">
   <div class="message">


    
    </div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
        <tr class="tableheader">
            <td align="center" colspan="2">Authentification</td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="email">Email:</label>
            </td>
            <td>
                <input type="text" name="email" placeholder="Email" class="login-input" onblur="tet()" required>
            </td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="password">Password:</label>
            </td>
            <td>
                <input type="password" name="password" placeholder="Password" class="login-input" required></td>
        </tr>
        <tr class="tableheader">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" onclick="" class="btnSubmit"></td>
        </tr>
    </table>
</form>
<div> <a href="mdp.php">Mot De Passe oublié ? </a> </div>
<script>

function tet()
{var x=<?php if($userC->verifconnecter())

{
    echo true;
}
else {echo false;}
?>;
alert(x);

}


</script>
</body>
</html>