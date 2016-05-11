<?php

// CDN Google Font
function linalis_preprocess_html(&$variables) {
    drupal_add_css('https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600', array('type' => 'external'));
}