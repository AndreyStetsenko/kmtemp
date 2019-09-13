<?php get_header(); ?>
<div class="head_main">
  <?php

  $image = get_field('img-head');

  if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

  <?php endif; ?>
  <h1>Gena <br><b>VITER</b></h1>
</div>
<?php get_footer(); ?>
