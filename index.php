<?php include 'partials/header.php'; ?>

  <h1>
    <a href="index.php">
      <img class="logo" src="img/logo.png"/>
    </a>
  </h1>

  <form method="GET" action="results.php">
    <div class="field" id="searchform">
      <input type="text" name="q" autofocus required />

      <button type="submit" id="search">Search</button>
    </div>
  </form>

<?php include 'partials/footer.php'; ?>
