<?PHP
class Reclamation{
	private $reference;
	private $username;
	private $etat;
	private $adresse;
	private $message;

	function __construct($reference,$username,$etat,$adresse,$message){
		$this->reference=$reference;
		$this->username=$username;
		$this->etat=$etat;
		$this->adresse=$adresse;
		$this->message=$message;
	}
	
	function getReference(){
		return $this->reference;
	}
	function getUsername(){
		return $this->username;
	}
	function getEtat(){
		return $this->etat;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getmessage(){
		return $this->message;
	}
	

	function setUsername($username){
		$this->username=$username;
	}
	function setEtat($etat){
		$this->etat;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setMessage($message){
		$this->message=$message;
	}
	
	
}

?>