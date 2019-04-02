<?PHP
include "../config.php";

class reclamationC {
function afficherReclamation ($reclamation){
	echo "Reference: ".$reclamation->getReference()."<br>";
		echo "Username: ".$reclamation->getUsername()."<br>";
		echo "Etat: ".$reclamation->getEtat()."<br>";
		echo "Adresse: ".$reclamation->getAdresse()."<br>";
		echo "Message : ".$reclamation->getMessage()."<br>";
		
	}

	
	function ajoutReclamation($reclamation){
		$sql="insert into reclamation (Reference,Username,Etat,Adresse,Message) values ( :Reference,:Username,:Etat,:,:Adresse,:Message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    
		$reference=$reclamation->getReference();
         $username=$reclamation->getUsername();
        $etat=$reclamation->getEtat();
        $adresse=$reclamation->getAdresse();
        $message=$reclamation->getMessage();
        

		
		$req->bindValue(':Reference',$reference);
		$req->bindValue(':Username',$username);
		$req->bindValue(':Etat',$etat);
		$req->bindValue(':Adresse',$adresse);
		$req->bindValue(':Message',$message);
	
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$res=$db->query($sql);
		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($reference){
		$sql="DELETE FROM reclamation where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$reference){
		$sql="UPDATE reclamation SET reference=:reference_new, username=:username,etat=:etat,adresse=:adresse,message=:message WHERE reference=:reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$reference_new=$reclamation->getReference();
        $username=$reclamation->getusername();
        $etat=$reclamation->getEtat();
        $adresse=$reclamation->getAdresse();
        $message=$reclamation->getMessage();
      

		$datas = array(':reference_new'=>$reference_new, ':reference'=>$reference, ':username'=>$username,':etat'=>$etat,':adresse'=>$adresse,':message'=>$message);

		$req->bindValue(':reference_new',$reference_new);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':username',$username);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':message',$message);
	
		
		
            $req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function recupererReclamation($reclamation){
		$sql="SELECT * from reclamation where reference=$reference";
		$db = config::getConnexion();
		try{
		$res=$db->query($sql);
		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
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