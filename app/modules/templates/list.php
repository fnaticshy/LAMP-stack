<?php require_once \Helpers\get_fragment_path('__header'); ?>

<section id="gallery">
    <?php for ($i = 0; $i < $cnt; $i++) {
        $img = \Models\Image::get_image(0); ?>

    <а href="/<?= $i ?>/">
        <img src="<?= \Settings\IMAGE_DIRECTORY . $img['src'] ?>"
             title="<?= $img [ 'desc'] ?>">
    </а>

    <?php } ?>
</section>

<?php require_once \Helpers\get_fragment_path('__footer'); ?>