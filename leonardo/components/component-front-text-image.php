<section class="text-image-front">

    <div class="row">

        <div class="image-block" data-aos="zoom-in" data-aos-duration="800">
            <?php $obrazek = get_sub_field('obrazek'); ?>
            <?php if ($obrazek) : ?>
                <img src="<?php echo esc_url($obrazek['url']); ?>" alt="<?php echo esc_attr($obrazek['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div class="text-block" data-aos="zoom-in" data-aos-duration="800">

            <div class="block-header">
                <h3><?php the_sub_field('naglowek'); ?></h3>
            </div>

            <div class="intro"><?php the_sub_field('intro'); ?></div>


            <?php if (get_sub_field('link')) : ?>
            <div class="link">
               
                    <a class="btn" href="<?php the_sub_field('link'); ?>"><span class="link-arrow"></span>NASZE USŁUGI</a>
                
            </div>
            <?php endif; ?>
        </div>

    </div>

</section>