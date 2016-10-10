<?php

/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 01/10/2016
 * Time: 17:24
 */

namespace Components\Controllers;

class View {
  /**
   * Render view file
   */
  public function render($file) {
    $str = get_template_directory() . '/templates/components/Views/' . $file;
    if (is_file($str)) {
      ob_start();
      require($str);
      return ob_get_clean();
    }
    return 'File not found: ' . $str;
  }
}