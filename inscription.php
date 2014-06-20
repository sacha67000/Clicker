<?php echo "Votre pseudo est : ", $_POST['pseudo'], "<br />Votre mail est : ", $_POST['mail'], "<br />Votre mot de passe est : ", sha1($_POST['password']), "<br />";

if ($_POST['password'] == $_POST['password2'])
{
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=countryclicker', 'root', '');
	}
	catch(Exception $e)
	{
		echo "Bonjour";
		die('Erreur : '.$e->getMessage());
	}

}
else
	echo "Les mots de passe ne correspondent pas";
?>

