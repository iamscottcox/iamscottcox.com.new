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
  public function render( $file )
  {
    if( is_file( $file ) )
    {
      ob_start();
      require($file);
      return ob_get_clean();
    }
    return 'File not found: '.$file;
  }

}