

<section class="work-us sect">

<div class="anch"  id="wspolpraca"></div>
    <div class="left-block" data-aos="zoom-in"  data-aos-duration="800">
    <h3 class="header-text mobile">współpraca</h3>
        <div class="small-head">
            <h4><?php the_sub_field('naglowek'); ?></h4>
        </div>
        <div class="text">
            <?php the_sub_field('opis'); ?>
        </div>
        <div class="link">
            <a href="#kontakt" class="btn"><span class="link-arrow"></span>SKONTAKTUJ SIĘ Z NAMI</a>
        </div>
    </div>

    <div class="right-block" data-aos="zoom-in"  data-aos-duration="800">
        <h3 class="header-text desc">współpraca</h3>
        <?php $image = get_sub_field('image'); ?>
        <?php if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
</section>