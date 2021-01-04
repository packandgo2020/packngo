<?php





class  FormC{
	


	function ajouterform($form)
	{

 	$sql="INSERT INTO `form`( `titre`, `image`, `contenu`, `likes`, `Date`, `id_User`) VALUES (:titre,:image,:contenu,:likes,:Datte,:id_User)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);		
		$titre=$form->gettitre();
		$image=$form->getimage();	
		$contenu=$form->getcontenu();
		$likes=$form->getlikes();
		$Datte=$form->getDate();
		$id_User=$form->getid_User();




		$req->bindValue(':titre',$titre);
		$req->bindValue(':image',$image);
		$req->bindValue(':contenu',$contenu);
		$req->bindValue(':likes',$likes);
		$req->bindValue(':Datte',$Datte);
		$req->bindValue(':id_User',$id_User);
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	    function afficherlist_form(){

		$sql="SELECT f.id, `titre`, `image`, `contenu`, `likes`, `Date`, `id_User`,nom,prenom FROM `form`f INNER JOIN user u where u.id = f.id_User
";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function modifierform($form,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE `form` SET `titre`=:titre,`image`=:image,`contenu`=:contenu,`likes`=:likes,`Date`=:Datte,`id_User`=:id_User WHERE `id`=:id";
 		try{

        $req=$db->prepare($sql);		
		$titre=$form->gettitre();
		$image=$form->getimage();	
		$contenu=$form->getcontenu();
		$likes=$form->getlikes();
		$Datte=$form->getDate();
		$id_User=$form->getid_User();




		$req->bindValue(':titre',$titre);
		$req->bindValue(':image',$image);
		$req->bindValue(':contenu',$contenu);
		$req->bindValue(':likes',$likes);
		$req->bindValue(':Datte',$Datte);
		$req->bindValue(':id_User',$id_User);
		$req->bindValue(':id',$id);		
        $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



		function recupererform($id){
		$sql="SELECT * FROM `form` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$form= $req->fetchALL(PDO::FETCH_OBJ);
		return $form;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimerform($id){
		$sql="DELETE  from form where  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
		function incrementerlike($id){
		$sql="SELECT * FROM `form` WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$form= $req->fetchALL(PDO::FETCH_OBJ);

$nbr_likes=$form[0]->likes + 1;

$formm=$form[0];



$newform = new form(0,$formm->titre,$formm->image,$formm->contenu,$nbr_likes,$formm->Date,$formm->id_User);

$this->modifierform($newform,$id);



		return $newform;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

		
	
}


?>