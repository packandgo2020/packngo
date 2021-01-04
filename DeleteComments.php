<?PHP
include "CommentsC.php";
include "comments.php";



if (isset($_POST["id"])){
	$CommentsC=new CommentsC();
	$CommentsC->Supprimercomments($_POST["id"]);


header('Location: AfficherForms.php');
}

?>