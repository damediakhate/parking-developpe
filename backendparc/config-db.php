<?php
session_start();
$db_name='parking';
$db_login='root';
$db_pass='';
$connexion = new PDO('mysql:host=localhost;dbname='.$db_name, $db_login, $db_pass);
//echo" bienvenue dans la base de donnée";
 ?>