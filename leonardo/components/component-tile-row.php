<section class="tile-row sect">

<div id="onas" class="anch"></div>
    <div class="row">

        <?php
        // Check rows exists.
        if (have_rows('single_tile')) :
            while (have_rows('single_tile')) : the_row();
        ?>

                <div class="single-tile" data-aos="zoom-in"  data-aos-duration="800">
                    <div class="head">
                        <div class="logo"><?php $obrazek = get_sub_field('obrazek'); ?>
                            <?php if ($obrazek) : ?>
                                <img src="<?php echo esc_url($obrazek['url']); ?>" alt="<?php echo esc_attr($obrazek['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                        <h2><?php the_sub_field('nazwa'); ?></h2>
                    </div>
                    <?php $link = get_sub_field('link'); ?>
                    <?php if ($link) : ?>
                        <div class="intro"><?php the_sub_field('tekst_po_najechaniu'); ?></div>
                    <?php endif; ?>
                </div>



        <?php
            // End loop.
            endwhile;

        // No value.
        else :
        // Do something...
        endif;
        ?>
    </div>

</section>