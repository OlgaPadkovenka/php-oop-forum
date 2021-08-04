<?php
$firstname = filter_var(trim($_POST['firstname']));
$lastname = filter_var(trim($_POST['lastname']));
$email = filter_var(trim($_POST['email']));
$pwd = filter_var(trim($_POST['pwd']));

//hash du mot de passe
$pwd = md5($pwd . "hfjhteyz");

$mysql = new mysqli('localhost', 'root', 'root', 'forum');
$mysql->query("INSERT INTO `user` (`firstname`, `lastname`, `email`, `pwd`) VALUES('$firstname', '$lastname', '$email', '$pwd')");
$mysql->close();

header('Location: ./');
