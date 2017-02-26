<?php

$searchQuery = $_GET['q'];

$data = array(
              array(
                    'text' =>'I like Apples',
                    'url' =>'https://apple.com'
                    ),
              array(
                    'text' =>'I like Apples and Bread',
                    'url' =>'https://bakersdelight.co.nz'
                    ),
              array(
                    'text' =>'I like Apples, Bread, and Cheese',
                    'url' =>'https://wallaceandgrommit.com'
                    ),
              array(
                    'text' =>'I like Green Eggs and Ham',
                    'url' =>'https://drseuss.com'
                    )
              );

$terms = [];

foreach ($data as $key => $value) {
  if (strpos(strtolower($value['text']), strtolower($searchQuery)) !== false) {
    $terms[] = $value;
  }
}

include 'partials/header.php'; ?>

<?php include 'partials/navigation.php'; ?>

<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h4>Search results for <strong><?=$searchQuery?></strong></h4>

      <!-- Displayed results -->
      <ul class="list-group">
        <?php
        foreach ($terms as $key => $term):
          ?>
        <!-- Single Result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div href="#" class="notification-bar-icon">
            <div>
              <i></i>
            </div>
          </div>

          <div class="notification-bar-details">
            <a href="<?=$term['url']?>" class="notification-bar-title">
              <?=$term['text']?>
            </a>
            <span class="text-muted"><?=$term['url']?></span>
          </div>
        </li>
        <!-- End of single result -->
        <?php
        endforeach;
        ?>
      </ul>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
