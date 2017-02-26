<?php include 'partials/header.php'; ?>
<div class="container">
  <div class="row">
    <h1>
      <a href="index.php">
        <img class="logo" src="img/logo.png"/>
      </a>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12">
      <form method="GET" action="results.php">
        <div class="field" id="searchform">
          <input type="text" name="q" autofocus required />

          <button type="submit" id="search">Search</button>
        </div>
      </form>
    </div>
    <div class="col-md-2"></div>
    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 links">
          <a href="results.php?q=doodles">
            I'm feeling lucky
          </a>
      </div>
      <div class="col-md-3"></div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
