
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <script src="https://www.google.com/recaptcha/api.js"></script>


</head>
    <body>
        <button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
           
        </div>
<html>
    <head>
        <title>Inscrivez-vous</title>
    </head>
        <body>
            <h2>Devenir Un client PACK'N'GO</h2>
            <br>
            <h6 id="promotion">  </h6>
 <a href= "#Acceuil" > Vers L'Acceuil </a>


 <form action="ajouterUtilisateur.php" id="form" method="POST">
        <table border="1" width=80%>
            <caption>Inscrivez-Vous</caption>
            <tr align ="center">
<td rowspan="5">Fiche Personnelle </td>
<td> <label for="name">Nom :</label> </td>
<td> <input name="nom" id="nom" required > </td>
<tr align ="center">
<td> Prenom :</td>
<td> <input type="text" name="prenom" id="prenom" required > </td>
<tr align ="center">
<td> Date de naissance</td>
<td> <input type="date" name="date" id="madate" required > </td>
<tr align ="center">
    <td>Sexe</td>
    <td> Homme : <input type="radio" name="sexe" value="Homme" required> Femme : <input type="radio" name="sexe" value="Femme"> Autre : <input type="radio" name="sexe" value="autre"> </td>
    <tr align ="center">
<td> Telephone :</td>
<td> <input type="phone" name="telephone" placeholder="12-345-678" required > </td>
<tr align ="center">
    <tr align ="center">
        
</tr>
</tr>
</tr>
</tr>
</tr>
</tr>

</tr>
</tr>

            <tr align ="center"> 
            <td rowspan="4">Information De Connexion </td> 
            <td>Email:</td>
            <td> <input type="email" name="email" id="email" onblur="validate()" required> </td>
            <tr align ="center"> 
            <td>Login :</td>
            <td> <input type="text" name="login" id="Login" required minlength="8"> </td>
            <tr align ="center"> 
           
            <td> Mot de passe</td>
            <td><input type="password" name="password" id="mdp1" minlength="8" onblur="testini()" ></td>
            <tr align ="center"> 
            <td>Confirmer Mot de passe</td>
            <td><input type="password" name="mdp2" id="mdp2" onblur=" controlemdp()" minlength="8" required ></td>
</tr>
</tr>
</tr>
</tr>

<tr align="center">
    <td>S'inscrire</td>
    
<td> <button type="button" onclick="final()">Envoyer</button>  </td>
<td> <button type="reset">Annuler</button>  </td>
        </table>
     </form>
     <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LelyQIaAAAAAIxcICmmOgg-O_NluvjuBOMNxPKS
"></div>

    <script>
        function test(texte) 
        {if(texte.substring(0,1).toUpperCase()!=texte.substring(0,1))
{alert('manque une majuscule');}}

function test_date()
{

    var start = new Date(document.getElementById('madate').value);
var k=start.getFullYear();
    alert(k);
    var tawa=new Date();
    var sne=tawa.getFullYear();
    var x=sne-k;
    if(x<18)
    {alert("18 ans SVP !")};


}
function phonenumber (num)
{ if(isNaN(num)==true)
{alert("numero tel stp");}
if ((num.length>8)||(num.length<8))
{
    alert("pas plus que 8 stp");
}
}


   function champvide(inputtx) 
   {
     if (inputtx.value.length == 0)
      { 
         alert("Veuillez Ne pas laisser ce champ vide ");  	
         return false; 
      }  	
      return true; 
    } 

    function checkEmail(email) {
             var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
             return re.test(email);
         }
         function validate() {
             var email = document.getElementById("email").value;
         
             if (!checkEmail(email)) {
                 
                 alert('Adresse e-mail non valide');
             }
             return false;
         }
function controlemdp() 
{ var ch1= document.getElementById("mdp1").value;
var ch2=document.getElementById("mdp2").value;

if(ch1!=ch2)
{
    alert("Veuillez Bien Confirmer Votre Mot De Passe");

    return false;
}
return true;

}


    </script>
    <script> 
    function validMail() {
	const email = document.getElementById("email").value
	jQuery.ajax({
	    type: "POST",
	    url: 'checkEmail.php',
	    dataType: 'json',
	    data: {functionname: 'checkEmail', arguments: [email]},

	    success: function (obj, textstatus) {
	      if( !('error' in obj) ) {
	          existe = obj.result;
	          if(!existe){
	          	alert("L'email Existe.");
                  
	         }
             else {        imprimer();
document.getElementById("form").submit() }
	      }

	      else {
	          alert(obj.error);
              
	      }
		}
	});
}
function verifrecap()
{
    var response = grecaptcha.getResponse();

if(response.length == 0)
    {
        
        alert("veuillez verifier recaptcha");
    }
    else {
        return true;
    }

   
}
</script>
<SCRIPT LANGUAGE="JavaScript">
function popup() {
w=open("",'popup','width=400,height=200,toolbar=no,scrollbars=no,resizable=yes');
w.document.write("<BODY>");
w.document.write("Nom: "+document.getElementById("nom").value+"<BR><BR>");
w.document.write("Prénom: "+document.getElementById("prenom").value+"<BR><BR>");
w.document.write("Courriel: "+document.getElementById("email").value+"<BR><BR>");
w.document.write("</BODY>");
w.document.close();
w.print();

}
</script> 
<script>

function imprimer ()
{
    if ( confirm( "Voulez vous imprimer vos données ?" ) ) {
        popup();
} 
}

function final()
{
    if (verifrecap())
    {
validMail();}




}


function testini ()
{ var myvar = <?php if (empty($_SESSION['e']))
{
    echo true;
}
else {
echo json_encode($_SESSION['e']);} ?>;
alert(myvar);

}

</script> 


<div>Vous avez deja un compte ? <a href="connexion.php"> Connectez-Vous! </a> </div>
        </body>
   
</html>