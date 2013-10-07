<?php

function clemtheme_preprocess_page(&$variables) {

  drupal_add_css( 'http://fonts.googleapis.com/css?family=Audiowide', array('type'=>'external','every_page'=>true) );
  drupal_add_css( 'http://fonts.googleapis.com/css?family=Josefin+Slab:600', array('type'=>'external','every_page'=>true) );
  drupal_add_css( 'http://fonts.googleapis.com/css?family=Raleway', array('type'=>'external','every_page'=>true) );
}

function clemtheme_js_alter(&$javascript) {
   //We define the path of our new jquery core file 
   //assuming we are using the minified version 1.9.1
  $jquery_path = drupal_get_path('theme','clemtheme') . '/js/jquery-1.9.1.min.js';
  //We duplicate the important information from the Drupal one 
  $javascript[$jquery_path] = $javascript['misc/jquery.js'];
  //..and we update the information that we care about 
  $javascript[$jquery_path]['version'] = '1.9.1'; $javascript[$jquery_path]['data'] = $jquery_path;
  //Then we remove the Drupal core version 
  unset($javascript['misc/jquery.js']);
}
