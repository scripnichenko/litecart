<aside id="sidebar" class="box shadow rounded-corners">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>

<main id="content">
  <!--snippet:notices-->
  <!--snippet:breadcrumbs-->

  <div id="box-category" class="box">
    <div class="btn-group pull-right">
<?php
  $separator = false;
  foreach ($sort_alternatives as $key => $value) {
    if ($_GET['sort'] == $key) {
      echo '<span class="btn btn-default active">'. $value .'</span>';
    } else {
      echo '<a class="btn btn-default" href="'. document::href_ilink(null, array('sort' => $key), true) .'">'. $value .'</a>';
    }
  }
?>
    </div>

    <h1><?php echo $h1_title; ?></h1>

    <?php if ($_GET['page'] == 1 && $description) { ?>
    <p class="description"><?php echo $description; ?></p>
    <?php } ?>

    <?php if ($_GET['page'] == 1 && $subcategories) { ?>
    <div class="categories row half-gutter">
      <?php foreach ($subcategories as $subcategory) echo functions::draw_listing_category($subcategory); ?>
    </div>
    <?php } ?>

    <?php if ($products) { ?>
    <div class="products row half-gutter">
      <?php foreach ($products as $product) echo functions::draw_listing_product($product, $product['listing_type']); ?>
    </div>
    <?php } ?>

    <?php echo $pagination; ?>
  </div>
</main>