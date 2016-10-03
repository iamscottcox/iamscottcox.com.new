<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 03/10/2016
 * Time: 22:42
 */

namespace Components\Controllers;

class See_More extends View {

  protected $href;

  /**
   * @param mixed $href
   */

  public function setHref($href) {
    $this->href = $href;
    return $this;
  }
}