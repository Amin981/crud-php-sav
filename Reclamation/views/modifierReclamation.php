<HTML>
<head>

	<link rel="stylesheet" href="qfc-dark.css">
</head>
<body>

<?PHP

include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_GET['cin'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererReclamation($_GET['reference']);
	foreach($result as $row){
		$reference=$row['Reference'];
		$username=$row['Username'];
		$etat=$row['Etat'];
		$adresse=$row['Adresse'];
		$Message=$row['Message'];
		
?>
<div class="qfc-container">
<h2>Modifier les Informations de livreur</h2>

<form method="POST">
	
	




<tr>
<td>Reference/td>
<td><input type="number" name="reference" value="<?PHP echo $reference ?>"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>"></td>
</tr>
<tr>
<td>Etat</td>
<td><input type="text" name="etat" value="<?PHP echo $etat ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Message</td>
<td><input type="text" name="message" value="<?PHP echo $message ?>"></td>
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
	$reclamation=new Reclamation($_POST['reference'],$_POST['username'],$_POST['etat'],$_POST['adresse'],$_POST['message']);
	$reclamationC->modifierReclamation($reclamation,$_POST['reference_ini']);
	echo $_POST['reference_ini'];
	header('Location: afficherReclamation.php');
}
?>
</body>
</HTMl>