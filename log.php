<?php

$DB_DSN = "mysql:host=localhost;dbname=id15602688_espace_commentaire;charset=utf8";
$DB_USER = "id15602688_commentaire";
$_DB_PASSWORD = "aFj!RP!EMq%WlO7d";

try 
{
    $bdd = new PDO($DB_DSN, $DB_USER, $_DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES 'UTF8'");
}
catch (Exception $error)
{
    print "Error while connecting to the new database !: " . $error->getMessage() . "<br/>";
	die();
}

?>