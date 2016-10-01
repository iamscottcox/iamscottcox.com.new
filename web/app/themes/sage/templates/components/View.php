<?php

/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 01/10/2016
 * Time: 17:24
 */
class View {

  // view data
  protected $_data = [];

  /**
   * Set view data
   */
  public function __set( $key, $value )
  {
    $this->_data[ $key ] = $value;
  }

  /**
   * Get view data
   */
  public function __get( $key )
  {
    if( array_key_exists( $key, $this->_data ) )
    {
      return $this->_data[ $key ];
    }
    return null;
  }

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