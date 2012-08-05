<?php 

function bracken_include($path) {
    ob_start();
    include drupal_get_path('module', 'bracken') . '/' . $path;
    $rslt = ob_get_contents();
    ob_end_clean();
    return $rslt;
}
