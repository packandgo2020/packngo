<meta charset="utf-8">
<?php
session_start();
include "utilisateur.php";
include "utilisateurc.php";
$client=new utilisateurc();


 if (isset($_POST['email'])) 
 {
     
     
     
    $x=$_POST['email'];
     echo $x;
     if(!$client->emailexiste($x))  
     { $_SESSION['email']=$x;
       $liste=$client->RecuperMdpClient($x);
      $to = $x;
			$subject = "ton sujet";
			$headers="MINE-VERSION : 1.0 \r\n";
            $headers = 	'From: "khaliltrabelsi789@gmail"<khaliltrabelsi789@gmail.com>';
			$headers .= 'content-Type:text/html;charset="uft-8"'."\n";
			$headers .= "\r\n";
			

       foreach ($liste as $value)
       {
       $message = 'votre nom d utilisateur :'.$value['login']."\r\n"; 
        $message='votre mot de passe :'.$value['password']."\r\n";}
      mail($to, $subject, $message,$headers);
      echo'mail envoyé.';
       //header('location:index.html');
     }
    else { 
        echo '<body onLoad="alert(\'ce mail n existe pas dans notre base de données\')">'; 
         // puis on le redirige vers la page d'accueil
         //echo '<meta http-equiv="refresh" content="0;URL=mdp_oublier.html">'; }
        
         
     
     }
    }
    else {echo 'missing information';}
  



?>