<?php

require 'includes/config.php';

if(!empty($_POST))
{
	$email    = $_POST['email'];
	$motdepass = hash('sha256',SALT.$_POST['motdepass']); // Hash + Salt


	// SQL query
	$prepare = $pdo->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
	$prepare->bindValue(':email',$email);
	$query = $prepare->execute();
	$user  = $prepare->fetch();

	if($user)
	{
		if($user->motdepass == $motdepasse)
		{

			$_SESSION['username'] = array(
				'id'       => $user ->id,
				'email'    => $user ->email
			);

			echo "Connexion à mon compte réussie."; // Remplacer ce echo par la redirection vers la home page en étant connecté
		}

		else
		{
			echo "Mot de passe incorrect"; // Rediriger vers la pop-in "Login" en affichant un message d'erreur
		}
	}

	else
	{
		echo 'Vos identifiants sont incorrects.';
	}
}


?>
