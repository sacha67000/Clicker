<?php

include("fonctions.php");
include("header.php");

?>
<div id="unique">
	<?php
	if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
	{
		if ((!empty($_POST['pseudo'])) || (!empty($_POST['mail'])) || (!empty($_POST['password'])) || (!empty($_POST['password2'])))
		{
			if ($_POST['password'] == $_POST['password2'])
			{
				$bdd = connectBDD();

				$request = $bdd->prepare('INSERT INTO user (pseudo, mail, password) VALUES (:pseudo, :mail, :password)');

				if (($request->execute(array(
					'pseudo' => htmlspecialchars($_POST['pseudo']),
					'password' => sha1($_POST['password']),
					'mail' => htmlspecialchars($_POST['mail'])))))
					echo 'Inscription réussie, bienvenue <strong>' . $_POST['pseudo'] . '</strong> !<br />';
				else
					"Eh merde...";
			}
			else
				echo "Les mots de passe ne correspondent pas<br />";
		}
		else
			echo "Erreur dans les formulaires, merci de réésayer.<br />";
	}
	else
		echo "Mail incorrect<br />";
	echo 'Vous allez être redirigé dans 10 secondes. <a href="index.php" title="Accueil">Cliquez ici si la redirection ne se fait pas.</a>';
	header ("Refresh: 10;URL=index.php");
	?>
</div>