<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="recapChambre.css">
	
</head>
<body background="fond.jpg">

	<center>
		<h1>Recapitulatif de votre location de chambre</h1>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$a=$_POST['Nom'];
$requete=("SELECT * FROM chambre WHERE nom='$a'");
$resultat=mysql_query($requete);
	
?>

<table border="1" width="99%">
	<tr>
		<td>Identifiant</td>
		<td>Nom</td>
		<td>Le nombre de personne</td>
		<td>Le nombre de chmabre</td>
		<td>Le choix du lit</td>
		<td>Date de debut</td>
		<td>Date de fin</td>
		<td>Montant</td>
		<td>Animaux compris</td>
	</tr>

	<?php while($enreg=mysql_fetch_array($resultat))
	{
		?>
		<tr>
			<td><?php echo $enreg["idChambre"];?></td>
			<td><?php echo $enreg["nom"];?></td>
			<td><?php echo $enreg["nombrePersonne"];?></td>
			<td><?php echo $enreg["nombreChambre"];?></td>
			<td><?php echo $enreg["placeLits"];?></td>
			<td><?php echo $enreg["dateDebut"];?></td>
			<td><?php echo $enreg["dateFin"];?></td>
			<td><?php echo $enreg["montant"];?></td>
			<td><?php echo $enreg["animaux"];?></td>
		</tr>
	<?php	
	} ?>
</table>
<?php
mysql_close();
?>
<br>
<button><a href="index.html">Retour au menu principal</a></button></center>
</body>
</html>