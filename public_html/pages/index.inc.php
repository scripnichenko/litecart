<?php

  //document::$snippets['title'] = array(); // reset
  document::$snippets['title'][] = language::translate('index.php:head_title', 'One fancy web shop');
  document::$snippets['keywords'] = language::translate('index.php:meta_keywords', '');
  document::$snippets['description'] = language::translate('index.php:meta_description', '');
  
  document::$snippets['head_tags']['opengraph'] = '<meta property="og:url" content="'. document::href_ilink('') .'" />' . PHP_EOL
                                                //. '<meta property="og:title" content="'. htmlspecialchars(language::translate('index.php:head_title')) .'" />' . PHP_EOL
                                                //. '<meta property="og:description" content="'. htmlspecialchars(language::translate('index.php:meta_description')) .'" />' . PHP_EOL
                                                . '<meta property="og:type" content="website" />' . PHP_EOL
                                                . '<meta property="og:image" content="'. document::href_link(WS_DIR_IMAGES . 'logotype.png') .'" />';
  
  include vqmod::modcheck(FS_DIR_HTTP_ROOT . WS_DIR_INCLUDES . 'column_left.inc.php');  
  
  $page = new view();
  
  ob_start();
  include vqmod::modcheck(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_slider.inc.php');
  $page->snippets['box_slider'] = ob_get_clean();
  
  ob_start();
  include vqmod::modcheck(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_manufacturer_logotypes.inc.php');
  $page->snippets['box_manufacturer_logotypes'] = ob_get_clean();
  
  ob_start();
  include vqmod::modcheck(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_most_popular_products.inc.php');
  $page->snippets['box_most_popular_products'] = ob_get_clean();
  
  ob_start();
  include vqmod::modcheck(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_campaign_products.inc.php');
  $page->snippets['box_campaign_products'] = ob_get_clean();
  
  ob_start();
  include vqmod::modcheck(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_latest_products.inc.php');
  $page->snippets['box_latest_products'] = ob_get_clean();
  
  echo $page->stitch('views/index');
?>