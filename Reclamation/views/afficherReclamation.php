<!DOCTYPE html>
<html>
<head>
	<title>Liste des Reclamations</title>
	<link rel="stylesheet" href="qfc-dark.css">
</head>

<body>

</body>
</html>
<?PHP
include "../core/reclamationC.php";
$reclamation1C=new ReclamationC();
$liste_Reclamations=$reclamation1C->afficherReclamations();

//var_dump($listeEmployes->fetchAll());
?>
<div style="padding-top: 70px;">
<table class="hover-tab td-affiche" border="1" align="center">
<tr class="hover-tab">
<td>Reference</td>
<td>Username</td>
<td>Etat</td>
<td>Adresse</td>
<td>Message</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($liste_Reclamations as $row){
	?>
	<tr>
	<td><?PHP echo $row['Reference']; ?></td>
	<td><?PHP echo $row['Username']; ?></td>
	<td><?PHP echo $row['Etat']; ?></td>
	<td><?PHP echo $row['Adresse']; ?></td>
	<td><?PHP echo $row['Message']; ?></td>
	<td><form method="POST" action="supprimerReclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Reference']; ?>" name="reference">
	</form>
	</td>
	
	<td><a href="modifierReclamation.php".php?cin=<?PHP echo $row['Reference']; ?>
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
    <style>
        table {
border: medium solid #000000;
width: 50%;
            color:azure;
}
td, th {
border: thin solid #6495ed;
width: 50%;
}
    </style>
</table>
</div>

