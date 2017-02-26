<?php include 'partials/header.php'; ?>

<?php include 'partials/navigation.php'; ?>

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

<?php include 'partials/footer.php'; ?>
