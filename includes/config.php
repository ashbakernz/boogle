<?php

$user = 'root';
$pass = '';

try {
  $dbh = new PDO('mysql:host=localhost;dbname=boogle', $user, $pass);

  $sth = $dbh->prepare("SELECT * FROM websites");
  $sth->execute();

  /* Fetch all of the remaining rows in the result set */
  $result = $sth->fetchAll();

  $dbh = null;
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
