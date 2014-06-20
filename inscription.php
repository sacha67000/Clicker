<?php echo "Votre pseudo est : ", $_POST['pseudo'], "<br />Votre mail est : ", $_POST['mail'], "<br />Votre mot de passe est : ", sha1($_POST['password']), "<br />";

$tmp = "[J'ai un gros zizi]";

include("fonctions.php");

if ($_POST['password'] == $_POST['password2'])
{
	$bdd = connectBDD();

	$request = $bdd->prepare('INSERT INTO user (pseudo, mail, password) VALUES (:pseudo, :mail, :password)');

	if (($request->execute(array(
		'pseudo' => htmlspecialchars($_POST['pseudo']),
		'password' => sha1($_POST['password']),
		'mail' => htmlspecialchars($_POST['mail'])
		))))
	{
		echo "Infos dans la BDD";
		echo "<script>
		alert('Inscription réussie, vous pouvez vous connectez');
	</script>";
}
else
	"Eh merde...";
}
else
	echo "Les mots de passe ne correspondent pas";
header('Location: index.php');
?>

