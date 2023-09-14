<section class="slid-row sect component-text">

  <div class="row <?php the_sub_field('numer_slidera'); ?> <?php $reverse_checked_values = get_sub_field('reverse'); ?>
<?php if ($reverse_checked_values) : ?><?php foreach ($reverse_checked_values as $reverse_value) : ?><?php echo esc_html($reverse_value); ?><?php endforeach; ?><?php endif; ?>">




    <div class="text-block full-width" data-aos="zoom-in" data-aos-duration="800">
      <?php if (get_sub_field('block_header')) : ?>
        <h2 class="large-head mobile"><?php the_sub_field('block_header'); ?></h2>
      <?php endif; ?>
      <h2><?php the_sub_field('text_header'); ?></h2>
     
      <?php the_sub_field('opis'); ?>
    </div>




  </div>

















</section>