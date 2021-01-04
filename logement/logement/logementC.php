<?PHP
	include "../config.php";
    require_once 'logement.php';
class LogementC{
    	
		function ajouterLogement1($L){
            $query = $db->prepare($sql);

			$sql="INSERT INTO logement (destination,hotel,arrivee,depart) VALUES (:destination,:hotel,:arrivee,:depart)";
			$db = config::getConnexion();
			try{
				$query->bindValue(':destination',$L->getDestination());
				$query->bindValue(':hotel',$L->getHotel());
                $query->bindValue(':arrivee',$L->getArrivee());
                $query->bindValue(':depart',$L->getDepart());
	            $query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    function ajouterLogement($L)
{
    $db = config::getConnexion();

	$sql="INSERT INTO logement (destination,hotel,arrivee, depart) VALUES (:destination,:hotel,:arrivee,:depart)";    
    
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'destination' => $L->getDestination(),
            'hotel' => $L->getHotel(),
            'arrivee' => $L->getArrivee(),
            'depart' =>$L->getDepart()
         ]);
			
        }

                catch (Exception $e){
                    echo 'erreur :'.$e->getMessage();
                }
    }
    
    function afficherLogement(){
			
        $sql="SELECT * FROM logement";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function recupererLogement1($id){
        $sql="SELECT * from logement where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            
            $Logement = $query->fetch(PDO::FETCH_OBJ);
            return $Logement;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   
    function supprimerLogement($id){
        $sql="DELETE FROM logement WHERE id= :id";
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
    function modifierlogement($L,$id){
        
        
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
            $db = config::getConnexion();
            $query=$db->prepare('UPDATE logement SET 
            destination= :destination, 
           hotel = :hotel,
           arrivee = :arrivee ,
           depart=:depart WHERE id=:id');
 //UPDATE `circuit` SET `destination` = 'azazaazdazd', `depart` = 'zazdea', `information` = 'rrhdjzhjgdhjeczadazd' WHERE `circuit`.`id` = 15;           

            $query->bindValue(':id',$id);
          
            $query->bindValue(':destination',$L->getDestination());
            $query->bindValue(':hotel',$L->getHotel());
            $query->bindValue(':arrivee',$L->getArrivee());
            $query->bindValue(':depart',$L->getDepart());
            $query->execute();
            echo $query->rowCount() . " records UPDATED successfully <br>";
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            

        }

    }

/*function afficherCircuitNord()
{
    
    $sql="SELECT *FROM circuit WHERE destination='nord'";
    $db=config::getConnexion();
    try{
        $lista=$db->query($sql);
       
        return $lista;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
}
}
function afficherCircuitSud()
{
    $sql="SELECT *FROM circuit WHERE destination='sud' ";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
       
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
}
	
}*/
}   
    
    

?>