<?php

function getRandomResult($data){
 $randomArray = array_rand($data);
 return [$data[$randomArray]];
}

//Connection function.

function connectDatabase($host, $database, $user, $pass){
  try {
  $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $pass);
  return $dbh;
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
}

// Get all rows from "websites" table.
function getWebsiteTable($dbh){
  $sth = $dbh->prepare("SELECT * FROM websites");
  $sth->execute();

  /* Fetch all of the remaining rows in the result set */
  $result = $sth->fetchAll();
  return $result;
}


// Search through database
function searchWebsiteTable($dbh, $searchQuery){

  $sth = $dbh->prepare('SELECT * FROM `websites` WHERE `text` LIKE :search');

  $sth->bindValue(':search', '%' . $searchQuery . '%', PDO::PARAM_STR);

  $sth->execute();

  $result = $sth->fetchAll();
  return $result;
}

// Insert into "feedback" table
function insertIntoFeedbackTable($dbh, $name, $email, $feedback){

  $sth = $dbh->prepare('INSERT INTO `feedback` values `:name`, `:email`, `:feedback`');

  $sth->bindValue(':name', $name, PDO::PARAM_STR);
  $sth->bindValue(':email', $email, PDO::PARAM_STR);
  $sth->bindValue(':feedback', $feedback, PDO::PARAM_STR);

  $sth->execute();

  $result = $sth->fetchAll();
  return $result;
}

function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
