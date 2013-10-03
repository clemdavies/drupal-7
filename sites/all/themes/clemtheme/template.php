<?php

function clemtheme_preprocess_page(&$variables) {

  drupal_add_css( 'http://fonts.googleapis.com/css?family=Audiowide', array('type'=>'external','every_page'=>true) );
  drupal_add_css( 'http://fonts.googleapis.com/css?family=Josefin+Slab:600', array('type'=>'external','every_page'=>true) );
  drupal_add_css( 'http://fonts.googleapis.com/css?family=Raleway', array('type'=>'external','every_page'=>true) );
}

