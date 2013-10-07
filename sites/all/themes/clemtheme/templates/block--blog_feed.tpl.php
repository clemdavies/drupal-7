<?php
  //block--blog_feed.tpl.php

  print $content;

  global $pager_page_array;
  $pageNumber = array(
      '#type' => 'hidden',
      '#attributes' => array('current-page'=>$pager_page_array[0])
    );

  echo drupal_render($pageNumber);
?>