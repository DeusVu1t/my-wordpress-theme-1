<section class="slid-row sect">




  <?php if (get_sub_field('block_header')) : ?>

    <div id="<?php the_sub_field('id_tylko'); ?>" class="anch"></div>
    <h2 class="large-head desc" data-aos="zoom-in"  data-aos-duration="800"><?php the_sub_field('block_header'); ?></h2>
  <?php endif; ?>

  <div class="row <?php the_sub_field('numer_slidera'); ?> <?php $reverse_checked_values = get_sub_field('reverse'); ?>
<?php if ($reverse_checked_values) : ?><?php foreach ($reverse_checked_values as $reverse_value) : ?><?php echo esc_html($reverse_value); ?><?php endforeach; ?><?php endif; ?>">




    <div class="text-block" data-aos="zoom-in" data-aos-duration="800">
      <?php if (get_sub_field('block_header')) : ?>
        <h2 class="large-head mobile"><?php the_sub_field('block_header'); ?></h2>
      <?php endif; ?>
      <h2><?php the_sub_field('text_header'); ?></h2>
      <h5 class="subhead"><?php the_sub_field('text_subheader'); ?></h5>
      <?php the_sub_field('opis'); ?>
    </div>

    <div class="image-block first" data-aos="zoom-in" data-aos-duration="800">

      <div class="rows">
        <div class="twentytwenty-container">
          <?php $obrazek_1 = get_sub_field('obrazek_1'); ?>
          <?php if ($obrazek_1) : ?>
            <img src="<?php echo esc_url($obrazek_1['url']); ?>" alt="<?php echo esc_attr($obrazek_1['alt']); ?>" />
          <?php endif; ?>
          <?php $obrazek_2 = get_sub_field('obrazek_2'); ?>
          <?php if ($obrazek_2) : ?>
            <img src="<?php echo esc_url($obrazek_2['url']); ?>" alt="<?php echo esc_attr($obrazek_2['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>

    </div>


  </div>



















</section>