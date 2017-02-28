<?php

function getRandomResult($data){
 $randomArray = array_rand($data);
 return [$data[$randomArray]];
}

function getWebsiteTable($dbh){
  $sth = $dbh->prepare("SELECT * FROM websites");
  $sth->execute();

  /* Fetch all of the remaining rows in the result set */
  $result = $sth->fetchAll();
  return $result;
}
