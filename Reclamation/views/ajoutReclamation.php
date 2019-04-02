<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['Reference']) and isset($_POST['Username']) and isset($_POST['Etat']) and isset($_POST['Adresse']) and isset($_POST['Message'])){
$reclamation=new Reclamation($_POST['Reference'],$_POST['Username'],$_POST['Etat'],$_POST['Adresse'],$_POST['Message']) or die("<br />Erreur de requete : ".mysql_error());
//Partie2
/*
var_dump($livreur);
}
*/
//Partie3
$reclamationC=new ReclamationC();
$reclamationC->ajoutReclamation($reclamation);
header('Location:afficherReclamation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>