<?php
include("header.php");
include("fonctions.php");

$bdd = connectBDD();

$request = 'SELECT `pseudo` FROM `user`';

if (($pseudo = mysql_query($request)) == false)
{
	$message  = 'Requête invalide : ' . mysql_error() . "<br />";
	$message .= 'Requête complète : ' . $request;
	die($message);
} 
else
{
	echo "Quelque chose en elle !";
}

/*header('Location: game_page.php')*/
?>
