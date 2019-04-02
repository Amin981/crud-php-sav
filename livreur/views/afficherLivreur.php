<!DOCTYPE html>
<html>
<head>
	<title>Liste des livreurs</title>
	<link rel="stylesheet" href="qfc-dark.css">
</head>

<body>

</body>
</html>
<?PHP
include "../core/livreurC.php";
$livreur1C=new LivreurC();
$liste_Livreurs=$livreur1C->afficherLivreurs();

//var_dump($listeEmployes->fetchAll());
?>
<div style="padding-top: 70px;">
<table class="hover-tab td-affiche" border="1" align="center">
<tr class="hover-tab">
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>Destination</td>
<td>Disponibilité</td>
<td>Date Livraison</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($liste_Livreurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['Cin']; ?></td>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Prenom']; ?></td>
	<td><?PHP echo $row['Destination']; ?></td>
	<td><?PHP echo $row['Dispo']; ?></td>
	<td><?PHP echo $row['Date_livraison']; ?></td>
	<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Cin']; ?>" name="cin">
	</form>
	</td>
	
	<td><a href="modifierLivreur.php?cin=<?PHP echo $row['Cin']; ?>">
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

