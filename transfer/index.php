<?php
include_once '../header.php'; ?>

  <div class="transfer-banner">
    <div class="transfer-banner__img"></div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="transfer-banner__title"><?= Config::get_phrase('transfer'); ?></h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <ul class="transfer-list  p-0">
            <li class="transfer-list__item"><?= Config::get_phrase('podgorica_airport'); ?></li>
            <li class="transfer-list__item"><?= Config::get_phrase('tivat_airport'); ?></li>
            <li class="transfer-list__item"><?= Config::get_phrase('dubrovnik_airport'); ?></li>
            <li class="transfer-list__item"><?= Config::get_phrase('pristina_airport'); ?></li>
            <li class="transfer-list__item"><?= Config::get_phrase('belgrade_airport'); ?></li>
            <li class="transfer-list__item"><?= Config::get_phrase('tirana_airport'); ?></li>
            <li class="transfer-list__item"><?= Config::get_phrase('sarajevo_airport'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="contacts">
    <div class="contacts__container container">
      <h2 class="visually-hidden"><?= Config::get_phrase('contact'); ?></h2>
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <a class="contacts__phone" href="tel:+38269738599">(+382)69738599</a>
          <ul class="contacts__socials">
            <?php include INC_PATH .'socials-links.php'; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="container pt-3 pt-lg-4">
    <div class="row">

      <div class="col-12">
        <p class="transfer__description"><?= Config::get_phrase('book_your_transfer'); ?></p>
      </div>

    </div>
  </div>
<?php
include_once '../footer.php';