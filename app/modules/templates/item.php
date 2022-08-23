<?php var_dump($item, $site_title, \Settings\SITE_LABEL, \Settings\IMAGE_DIRECTORY); ?>

<?php require_once \Helpers\get_fragment_path('__header'); ?>

  <h2><?php echo $item['desc'] ?></h2>

  <р>
    <а href="/">Ha главную</а>
  </р>

  <section id="gallery-item">
    <img src="<?= \Settings\IMAGE_DIRECTORY . $item['src'] ?>">
  </section>

  <р>
    <а href="/">Ha главную</а>
  </р>

<?php require_once \Helpers\get_fragment_path('__footer') ?>