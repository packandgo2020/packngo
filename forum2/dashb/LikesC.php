<?php

 class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
class  LikesC{
	


	function ajouterLikes($Likes)
	{

 	$sql="INSERT INTO `likes`( `id_User`, `id_Form`) VALUES (:id_User,:id_Form)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);		

		$id_Form=$Likes->getid_Form();
		$id_User=$Likes->getid_User();




		
		$req->bindValue(':id_Form',$id_Form);
		$req->bindValue(':id_User',$id_User);
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	   




		function recupererlikes($id_Form,$id_User){
		$sql="SELECT count(*) as nbr FROM `likes` WHERE  id_Form=:id_Form and id_User=:id_User  ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id_Form',$id_Form);
		$req->bindValue(':id_User',$id_User);
 	    $req->execute();
 		$form= $req->fetchALL(PDO::FETCH_OBJ);
		return $form;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimerlikes($id_Form,$id_User){
		$sql="DELETE  FROM `likes` WHERE  id_Form=:id_Form and id_User=:id_User  ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id_Form',$id_Form);
		$req->bindValue(':id_User',$id_User);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


		
	
}


?>