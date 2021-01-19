<?php

$DB_DSN = "mysql:host=localhost;dbname=nom_de_ma_bdd;charset=utf8";
$DB_USER = "nom_utilisateur";
$_DB_PASSWORD = "MDP-de-ma_bdd";

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
