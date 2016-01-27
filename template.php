<?php

/**
 * Implementation of preprocess_page().
 */
function boilerplate_theme_preprocess_page(&$vars, $hook) {

  if (!module_exists('conditional_styles')) {
    $vars['styles'] .= $vars['conditional_styles'] = variable_get('conditional_styles_' . $GLOBALS['theme'], '');
  }

  // Update jQuery
  if (arg(0) != 'admin') {
    $scripts = drupal_add_js();

    // Use Google for jQuery
    $vars['head'] .= '<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>';

    unset($scripts['core']['misc/jquery.js']);
    $vars['scripts'] = drupal_get_js('header', $scripts);
  }
}