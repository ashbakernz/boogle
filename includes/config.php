<?php
require 'includes/functions.php';

$user = 'root';
$pass = '';

try {
  $dbh = new PDO('mysql:host=localhost;dbname=boogle', $user, $pass);

  $result = getWebsiteTable($dbh);

  $dbh = null;
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
