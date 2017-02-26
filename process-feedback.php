<?php

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
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["email"])) {
    $errors['email'] = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["feedback"])) {
    $errors['feedback'] = "Feedback is required";
  } else {
    $feedback = test_input($_POST["feedback"]);
  }

  if (!empty($errors)) {
    require 'feedback.php';
    die();
  }

  // Here is where you would send an email or save to the database etc
  require 'thanks.php';
  die();
}

header("Location: feedback.php");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
