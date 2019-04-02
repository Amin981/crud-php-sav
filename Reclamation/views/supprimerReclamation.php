<?PHP
include "../core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["reference"])){
	$reclamationC->supprimerReclamation($_POST["reference"]);
	header('Location: afficherReclamation.php');
}

?>