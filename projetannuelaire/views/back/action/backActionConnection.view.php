<?php
$user = new User();
$username = $_POST['username'];
$password = $_POST['pwd'];
$user = $user->populate(array('username' => $username));
if (password_verify($password, $user->getPassword())) {
	if (!isset($_SESSION)) session_start();
	$_SESSION['username'] = $username;
	$_SESSION['user_id'] = $user->getId();
	echo "Vous êtes connecté !";
} else {
	echo "Erreur lors de la connexion";
}