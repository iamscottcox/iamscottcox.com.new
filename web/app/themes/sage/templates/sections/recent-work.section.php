<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 03/10/2016
 * Time: 22:11
 */

use Components\Controllers\See_More;

?>

<section class="section-recent-work">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Recent Work</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <h4>Work Piece #1</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <h4>Work Piece #2</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <h4>Work Piece #3</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?= (new See_More())->setHref('/portfolio')->render('see-more.view.php'); ?>
      </div>
    </div>
  </div>
</section>
