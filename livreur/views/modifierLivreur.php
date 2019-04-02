<HTML>
<head>

	<link rel="stylesheet" href="qfc-dark.css">
</head>
<body>

<?PHP

include "../entities/livreur.php";
include "../core/livreurC.php";

if (isset($_GET['cin'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererLivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['Cin'];
		$nom=$row['Nom'];
		$prenom=$row['Prenom'];
		$destination=$row['Destination'];
		$dispo=$row['Dispo'];
		$date_livraison=$row['Date_livraison'];
?>
<div class="qfc-container">
<h2>Modifier les Informations de livreur</h2>

<form method="POST">
	
	




<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Destination</td>
<td><input type="text" name="destination" value="<?PHP echo $destination ?>"></td>
</tr>
<tr>
<td>Disponibilité</td>
<td><input type="text" name="dispo" value="<?PHP echo $dispo ?>"></td>
</tr>
<tr>
	<td>date de livraison
	</td>
	<td><input type="date" name="date_livraison" value="<?PHP echo $date_livraison ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>

</table>
</div>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new Livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['destination'],$_POST['dispo'],$_POST['date_livraison']);
	$livreurC->modifierLivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherLivreur.php');
}
?>
</body>
</HTMl>