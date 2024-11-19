<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
<div class="page-404__banner">
  <div class="container">

    <div class="row d-flex align-items-center">
      <h1 data-aos="fade-right" class="page-404__title col-12"><?= Config::get_phrase('error_message'); ?></h1>
      <h2 data-aos="fade-right" class="page-404__text col-12"><?= Config::get_phrase('error_description'); ?></h2>
    </div>

    <div data-aos="fade-left" class="d-flex justify-content-end">
      <a class="page-404__link" href="/"><?= Config::get_phrase('back_to_home'); ?></a>
    </div>

    <p data-aos="fade-left" class="page-404__info">
      <?= Config::get_phrase('call_us'); ?>
      <a href="tel:+38269738599" class="page-404__telephone">(+382)69-738-599</a>.
    </p>

  </div>
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
