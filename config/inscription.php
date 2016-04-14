<?php

require 'includes/database.php';


if(!empty($_POST))
{
	$username   = $_POST['username'];
	$email    = $_POST['email'];
	$motdepass = hash('sha256',SALT.$_POST['motdepass']); // Hash + Salt

	// SQL query
	$prepare = $pdo->prepare('INSERT INTO users (username, email, motdepass) VALUES (:username,:email,:motdepass)');
	$prepare->bindValue(':username',$username);
	$prepare->bindValue(':email',$email);
	$prepare->bindValue(':motdepass',$motdepass);
	$exec = $prepare->execute();
}

?>
