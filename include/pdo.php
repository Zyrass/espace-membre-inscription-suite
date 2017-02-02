<?php
// Conception de constante pour la connexion à notre base de donnée.
define('HOST', 'mysql:host=localhost; dbname=tuto');
define('USER', 'root');
define('PASSWORD', '');

try {
    $bdd = new PDO (HOST, USER, PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error : " . $e->getMessage());
}
