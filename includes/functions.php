<?php

// -----------------------------------------------------------------------------
//Connect to the database function.
// -----------------------------------------------------------------------------

function connectDatabase($host, $database, $user, $pass){
  try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $pass);
    return $dbh;
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
}
// -----------------------------------------------------------------------------
// Get Random Result from array using PHP
// -----------------------------------------------------------------------------

function getRandomResult($data){
 $randomArray = array_rand($data);
 return [$data[$randomArray]];
}

// -----------------------------------------------------------------------------
// Get Random Result From Database using PHP and the getWebsiteTable function.
// -----------------------------------------------------------------------------

function getRandomResultUsingPHP($dbh){

  // getWebTable function grabs all rows from the "websites" table.
  $data = getWebsiteTable($dbh);

  // "array_rand()" function selects a random array from the $data array.
  $randomArray = array_rand($data);

  // We then return the $data array with just the one array in it.
  return [$data[$randomArray]];

}
// -----------------------------------------------------------------------------
// Get a random row from the "websites" table.
// -----------------------------------------------------------------------------

function getRandomResultUsingSQL($dbh){

  $sth = $dbh->prepare("SELECT * FROM `websites` ORDER BY RAND() LIMIT 1");

  // Execute the statement.
  $sth->execute();

  // Get the results and save them so we can return it.
  $result = $sth->fetchAll();

  return $result;

}
// -----------------------------------------------------------------------------
// Get all rows from "websites" table.
// -----------------------------------------------------------------------------

function getWebsiteTable($dbh){
  $sth = $dbh->prepare("SELECT * FROM websites");

  // Execute the statement.
  $sth->execute();

  // Get the results and save them so we can return it.
  $result = $sth->fetchAll();

  return $result;
}

//------------------------------------------------------------------------------
// Search through the "website" table.
// -----------------------------------------------------------------------------
function searchWebsiteTable($dbh, $searchQuery){

  //Prepare the statement that will be executed.
  $sth = $dbh->prepare('SELECT * FROM `websites` WHERE `text` LIKE :search');

  // Bind the "$searchQuery" the SQL statement.
  $sth->bindValue(':search', '%' . $searchQuery . '%', PDO::PARAM_STR);

  // Execute the statement.
  $sth->execute();


  // Get the results and save them so we can return it.
  $result = $sth->fetchAll();

  return $result;
}
// -----------------------------------------------------------------------------
// Insert into "feedback" table
// -----------------------------------------------------------------------------
function insertIntoFeedbackTable($dbh, $name, $email, $feedback){

  //Prepare the statement that will be executed.
  $sth = $dbh->prepare('INSERT INTO `feedback` values `:name`, `:email`, `:feedback`');

  // Bind the "$name", "$email", "$feedback" the SQL statement.
  $sth->bindValue(':name', $name, PDO::PARAM_STR);
  $sth->bindValue(':email', $email, PDO::PARAM_STR);
  $sth->bindValue(':feedback', $feedback, PDO::PARAM_STR);

  // Execute the statement.
  $sth->execute();

  // Get the results and save them so we can return it.
  $result = $sth->fetchAll();

  return $result;
}

// -----------------------------------------------------------------------------
// Test the input and trim, strip slashes and check for htmlspecialchars
// -----------------------------------------------------------------------------
function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
