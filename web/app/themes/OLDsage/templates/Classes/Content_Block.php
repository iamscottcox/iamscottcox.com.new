<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 11/10/2016
 * Time: 18:29
 */

namespace Templates\Classes;

class Content_Block {

  public function setTitle($title) {
    $this->title = $title;
    return $this;
  }

  public function setContent($content) {
    $this->content = $content;
    return $this;
  }

  public function setHref($href) {
    $this->href = $href;
    return $this;
  }

}
