<section class="gallery-front">


    <div class="head-block">

        <h2 class="large-head">
            <?php the_sub_field('block_header'); ?>
        </h2>
        <div class="subhead">
            <h3><?php the_sub_field('subheader'); ?></h3>
        </div>
    </div>

    <div class="image-box">


        <?php $image = get_sub_field('image'); ?>
        <?php if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="gall-link">

            <div class="background">

            </div>
            <div class="link">
                <a href="http://kubart.leobeta.pl/" class="btn"><span class="link-arrow"></span>Przejdż do galerii</a>
            </div>
        </div>

    </div>


    </div>
    

</section>