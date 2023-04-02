<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body background="fond.jpg">

	<center>
		<h1>Recapitulatif de votre commande</h1>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$a=$_POST['Login'];
$requete=("SELECT * FROM commande WHERE login='$a'");
$resultat=mysql_query($requete);
	
?>

<table border="1" width="99%">
	<tr>
		<td>Identifiant</td>
		<td>Votre nom</td>
		<td>Le burger</td>
		<td>Les frites</td>
		<td>Le pannini</td>
		<td>Le wrap</td>
		<td>La boisson</td>
		<td>La formule</td>
		<td>La date de la commande</td>
	</tr>

	<?php while($enreg=mysql_fetch_array($resultat))
	{
		?>
		<tr>
			<td><?php echo $enreg["idCommande"];?></td>
			<td><?php echo $enreg["nom"];?></td>
			<td><?php echo $enreg["burger"];?></td>
			<td><?php echo $enreg["frite"];?></td>
			<td><?php echo $enreg["pannini"];?></td>
			<td><?php echo $enreg["wrap"];?></td>
			<td><?php echo $enreg["boisson"];?></td>
			<td><?php echo $enreg["formule"];?></td>
			<td><?php echo $enreg["dateJour"];?></td>
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