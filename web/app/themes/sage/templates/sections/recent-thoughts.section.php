<?php use Components\Controllers\See_More; ?>

<section class="section-recent-posts">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Recent Posts</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?= (new See_More())->setHref('/blog')->render('see-more.view.php'); ?>
      </div>
    </div>
  </div>
</section>