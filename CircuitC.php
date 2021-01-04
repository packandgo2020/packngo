<?PHP
	include "config.php";
    require_once 'circuit.php';
    
class CircuitC{
    	
		function ajouterCircuit1($C){
			$sql="INSERT INTO circuit (destination, depart, information ,tarif) VALUES (:destination,:depart,:information, :tarif)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->bindValue(':destination',$C->getDestination());
				$query->bindValue(':depart',$C->getDepart());
                $query->bindValue(':information',$C->getInformation());
                $query->bindValue(':tarif',$C->getTarif());
	            $query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    function ajouterCircuit($C)
{
    $sql="INSERT INTO circuit (destination, depart, information,tarif) VALUES (:destination, :depart, :information, :tarif)";
    
    $db = config::getConnexion();
    
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'destination' => $C->getDestination(),
            'depart' => $C->getDepart(),
            'information' => $C->getInformation(),
            'tarif' => $C->getTarif()
            
         ]);
			
        }

                catch (Exception $e){
                    echo 'erreur :'.$e->getMessage();
                }
    }
    
    function afficherCircuit(){
			
        $sql="SELECT * FROM circuit";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function recupererCircuit1($id){
        $sql="SELECT * from circuit where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            
            $Circuit = $query->fetch(PDO::FETCH_OBJ);
            return $Circuit;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   /* function modifierCircuit($Circuit,$id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE circuit SET 
                    destination= :Destination, 
                    depart = :Depart,
                    information = :Information
                WHERE id = :id'
            );
            $query->execute([
                'Destination'=>$Circuit->getDestination(),
                'Depart'=>$Circuit->getDepart(),
                'Information'=>$Circuit->getInformation(),
            
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }*/
   
    function supprimerCircuit($id){
        $sql="DELETE FROM circuit WHERE id= :id";
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
    function modifierCircuit($Circuit,$id){
        
        
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
            $db = config::getConnexion();
            $query=$db->prepare('UPDATE circuit SET 
            destination= :destination, 
           depart = :depart,
           information = :information ,
           tarif=:tarif WHERE id=:id');
 //UPDATE `circuit` SET `destination` = 'azazaazdazd', `depart` = 'zazdea', `information` = 'rrhdjzhjgdhjeczadazd' WHERE `circuit`.`id` = 15;           

            $query->bindValue(':id',$id);
          
            $query->bindValue(':destination',$Circuit->getDestination());
            $query->bindValue(':depart',$Circuit->getDepart());
            $query->bindValue(':information',$Circuit->getInformation());
            $query->bindValue(':tarif',$Circuit->getTarif());
            $query->execute();
            echo $query->rowCount() . " records UPDATED successfully <br>";
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            

        }

    }

function afficherCircuitNord()
{
    
    $sql="SELECT *FROM circuit WHERE destination='nord' ";
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
	
}
function ajoutReservation($C)
{
    $sql="INSERT INTO reservation (type, date, information,tarif,id_user) VALUES (:destination, :depart, :information, :tarif, :id_user)";
    
    $db = config::getConnexion();
    
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'destination' => $C->getDestination(),
            'depart' => $C->getDepart(),
            'information' => $C->getInformation(),
            'tarif' => $C->getTarif(),
            'id_user'=> $_SESSION['id']
            
         ]);
			
        }

                catch (Exception $e){
                    echo 'erreur :'.$e->getMessage();
                } 
}


}   
    
    

?>