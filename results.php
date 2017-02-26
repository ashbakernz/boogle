<html>
  <head>
    <title>Boogle</title>
   <!--  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link rel="stylesheet" type="text/css" href="./css/app.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
          <div class="navbar-header">
              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" href="index.php">
                 <img width="80px" class="logo-top" src="img/logo.png"/>
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                <li>
                    <div class="field top-bar-search" id="searchform">
                      <input type="text" id="searchterm" value="$searchQuery" />
                  </div>
                </li>
              </ul>
          </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h4>Search results for <strong>$searchQuery</strong></h4>

          <!-- Displayed results -->
          <ul class="list-group">
          <!-- Single Result -->
            <li class="list-group-item notification-bar-fail m-b-1">
                <div href="#" class="notification-bar-icon">
                  <div>
                    <i></i>
                  </div>
                </div>
                <div class="notification-bar-details">
                  <a href="#" class="notification-bar-title">
                  $searchResultTitle
                  </a>
                  <span class="text-muted">$searchResultUrl</span>
                </div>
            </li>
            <!-- End of single result -->

            <li class="list-group-item notification-bar-fail m-b-1">
                <div href="#" class="notification-bar-icon">
                  <div>
                    <i></i>
                  </div>
                </div>
                <div class="notification-bar-details">
                  <a href="#" class="notification-bar-title">
                  $searchResultTitle
                  </a>
                  <span class="text-muted">$searchResultUrl</span>
                </div>
            </li>
          </ul>


        </div>
      </div>
    </div>
  </body>
</html>

