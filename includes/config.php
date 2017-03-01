<?php

require 'includes/functions.php';

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'boogle';

$dbh = connectDatabase($host, $database, $user, $pass);

// SHOW BELOW CODE BEFORE MAKING FUNCTIONS


// try {
//   $dbh = new PDO('mysql:host=localhost;dbname=boogle', $user, $pass);

//   // Get them to do this format first then change to a function.
//   $sth = $dbh->prepare("SELECT * FROM websites");
//   $sth->execute();

//   $result = $sth->fetchAll();
//   die(var_dump($result));


// } catch (PDOException $e) {
//   print "Error!: " . $e->getMessage() . "<br/>";
//   die();
// }
