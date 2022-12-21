<?php
  
include 'lib/includes.php';
include 'lib/optionspage.php';
include 'lib/svg.php';
include 'lib/cpt.php';
include 'lib/ctax.php';
include 'lib/wpadmin.php';
include 'lib/timber.php';

add_filter('use_block_editor_for_post', '__return_false', 10);