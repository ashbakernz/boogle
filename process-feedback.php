<?php
require 'includes/config.php';

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'utf-8');

// First we must do some validation to see if we got valid data
// define variables and set to empty values
$name = $email = $feedback = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $errors['name'] = "Name is required";
  } else {
    $name = testInput($_POST["name"]);
  }
  if (empty($_POST["email"])) {
    $errors['email'] = "Email is required";
  } else {
    $email = testInput($_POST["email"]);
  }
  if (empty($_POST["feedback"])) {
    $errors['feedback'] = "Feedback is required";
  } else {
    $feedback = testInput($_POST["feedback"]);
  }

  if (!empty($errors)) {
    require 'feedback.php';
    die();
  }

  // Here is where you would send an email or save to the database etc

  $worked = insertIntoFeedbackTable($dbh, $name, $email, $feedback);
  require 'thanks.php';
  die();
}

header("Location: feedback.php");
