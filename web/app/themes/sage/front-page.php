<?php require('templates/components/View.php'); ?>

<section class="container-fluid feature-header">
  <div class="row flex-items-center feature-header-row">
    <div class="col-xs flex-xs-middle feature-header-headings">
      <h1>Scott Cox</h1>
      <h2>Web Developer & Designer</h2>
    </div>
    <?php $chevron_down = new \View(); $chevron_down->href = '#content'; ?>
    <?= $chevron_down->render(get_template_directory() . '/templates/components/views/chevron-down.php'); ?>
  </div>
</section>
<section class="full-height-section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">

      </div>
    </div>
  </div>
</section>
