<?php 
function connectBDD()
{	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=countryclick', 'root', '');
		echo "<strong>Connexion à la base de donnée réussie !</strong><br />";
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	return ($bdd);
}
?>