<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$a=$_POST["login"];
$b=$_POST["mdp"];

$requete="SELECT login from connexion where login='$a'";
$resultat=mysql_query($requete);
$num=mysql_num_rows($resultat);

if($num>=1)
	{
		$requete2="SELECT login from connexion where mdp='$b' and login='$a' ";

		$resultat2=mysql_query($requete2) or die("Impossible d'executer la requête 2");

		$num2=mysql_num_rows($resultat2);

			if ($num2==1) 
				header("Location:index.html"); //page à afficher en cas de reussite
			else
				header("Location:coMdpFaux.html"); 
	}
else
	header("Location:coLoginFaux.html");
?>
</body>
</html>