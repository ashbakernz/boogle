<?php include 'partials/header.php'; ?>

<h1>
  <a href="index.php">
    <img class="logo" src="img/logo.png"/>
  </a>
</h1>

  <div class="container">
    <h2 class="text-center">Send some feedback:</h2>
    <div class="form-group row">
      <label for="name" class="col-2 col-form-label">Your name</label>
      <div class="col-10">
        <input class="form-control" id="name" autofocus type="text" placeholder="Jason Candle">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-2 col-form-label">Your Email</label>
      <div class="col-10">
        <input class="form-control" type="email" id="email" placeholder="jason@example.com">
      </div>
    </div>
    <div class="form-group row">
      <label for="feedback" class="col-2 col-form-label">Your feedback</label>
      <div class="col-10">
        <textarea class="form-control" id="feedback" rows="3" placeholder="I like the..."></textarea>
      </div>
    </div>

    <button type="submit" class="btn btn-primary pull-right">Submit</button>
  </div>

<?php include 'partials/footer.php'; ?>
