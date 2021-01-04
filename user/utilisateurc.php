<?PHP
	include "config1.php";
	require_once 'utilisateur.php';

	class UtilisateurC {
		
		function ajouterUtilisateur($utilisateur){
			$sql="INSERT INTO utilisateur (nom, prenom, email, login, password, telephone, sexe, date) 
			VALUES (:nom,:prenom,:email, :login, :password, :telephone, :sexe, :date)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->bindValue(':nom',$utilisateur->getNom());
				$query->bindValue(':prenom',$utilisateur->getPrenom());
				$query->bindValue(':email',$utilisateur->getEmail());
				$query->bindValue(':login',$utilisateur->getLogin());
				$query->bindValue(':password',$utilisateur->getPassword());
				$query->bindValue(':sexe',$utilisateur->getSexe());
				$query->bindValue(':telephone',$utilisateur->getTelephone());
				$query->bindValue(':date',$utilisateur->getDate());



				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM utilisateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		

function bilan ($id_bilan,$id_user,$is_circuit,$is_voyage,$is_logement,$is_destination)
{
	$sql="INSERT INTO bilan 
	VALUES (:id_bilan,:id_user,:is_circuit,:is_voyage,:is_logement,:is_destination)";
	$db = config::getConnexion();
	try{
		$query = $db->prepare($sql);
		$query->bindValue(':id_bilan',$id_bilan);
		$query->bindValue(':id_user',$utilisateur->getPrenom());
		$query->bindValue(':is_voyage',$utilisateur->getEmail());
		$query->bindValue(':login',$utilisateur->getLogin());
		$query->bindValue(':password',$utilisateur->getPassword());
		$query->bindValue(':sexe',$utilisateur->getSexe());
		$query->bindValue(':telephone',$utilisateur->getTelephone());
		$query->bindValue(':date',$utilisateur->getDate());



		$query->execute();			
	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}	
}
		function supprimerUtilisateur($id){
			$sql="DELETE FROM utilisateur WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierUtilisateur($utilisateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						login = :login,
						password = :password,
                        telephone = :telephone,
                        sexe = :sexe,
                        date = :date
					WHERE id = :id'
				);
				
				$query->bindValue(':nom',$utilisateur->getNom());
				$query->bindValue(':prenom',$utilisateur->getPrenom());
				$query->bindValue(':email',$utilisateur->getEmail());
				$query->bindValue(':login',$utilisateur->getLogin());
				$query->bindValue(':password',$utilisateur->getPassword());
				$query->bindValue(':sexe',$utilisateur->getSexe());
				$query->bindValue(':telephone',$utilisateur->getTelephone());
				$query->bindValue(':date',$utilisateur->getDate());
				$query->bindValue(':id',$id);
				$query->execute();
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererUtilisateur($id){
			$sql="SELECT * from utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererUtilisateur1($email){
			$sql="SELECT * from utilisateur where email=$email";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				
				return $user->id;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererUtilisateur2($id){
			$sql="SELECT * from bilan where id_user=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function emailexiste($email){

			$sql="SELECT * from utilisateur where email=:email";
			$db = config::getConnexion();
			
		
		 try{   
			$query=$db->prepare($sql);
			$query->bindValue('email',$email);
			$query->execute();
		
			if( $query->rowCount() > 0 ) { # If rows are found for query
				
				return false;
		   }
		   else {
				return true;
		   }
			   }
				 catch (Exception $e)
			{ die('Erreur:'.$e->getMessage());}
		}
		function LoginClientExiste($login){
			$connection = @mysql_connect('localhost', 'root', ''); //The Blank string is the password
		mysql_select_db('projetweb-1');
			$sql="select * from utilisateur where login='".$login."'";
		
		 try{   
				$req=@mysql_query($sql);
			   
			 $count=0;
					while($row=@ mysql_fetch_array($req)){
					 $count++;
					 
					}
		   
					if($count>=1) {return true ;}
					else {return false ;}
			   }
				 catch (Exception $e)
			{ die('Erreur:'.$e->getMessage());}
		}
		function RecuperMdpClient($email)
		{
			$sql="SELECT * from utilisateur where email='$email' ";
			$db =config::getConnexion();
			try{
			 $list=$db->query($sql);
			 return $list;
			}
			  catch (Exception $e)
		 { die('Erreur:'.$e->getMessage());}
		}
		
		function Logedin($conn,$login,$password)
		{
			$req="select * from client   where login='$login' && password='$password'";
			$rep=$conn->query($req);
			return $rep->fetchAll();
		}	 
	
		function connexionUser($email,$password){
            $sql="SELECT * FROM Utilisateur WHERE email='" . $email . "' && password = '". $password."'";
			$db = config::getConnexion();
			$message='';
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
				
                    $message=$query->fetch();
                   
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
		}	
		function imprimer($email){
			
			$sql="SELECT * FROM utilisateur where email='$email' "; 
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			
		}

	
	}

?>