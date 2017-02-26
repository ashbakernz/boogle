<?php include 'partials/header.php'; ?>

<h1>
  <a href="index.php">
    <img class="logo" src="img/logo.png"/>
  </a>
</h1>

<h2 class="text-center">Thanks for the feedback <?=!empty($_POST['name'])?$_POST['name']:'';?></h2>
<h2 class="text-center text-muted">We will reply to <?=!empty($_POST['email'])?$_POST['email']:'';?> if we need to follow up.</h2>
<div class="text-center">
  <a href="index.php">Home</a>
</div>

<?php include 'partials/footer.php'; ?>
