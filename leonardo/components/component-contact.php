
<section class="contact-section sect" >
<div id="kontakt" class="anch"></div>
    <div class="block-header desc"data-aos="zoom-in"  data-aos-duration="800">
        <h3>NAPISZ DO NAS</h3>
    </div>
    <div class="row">
        <div class="left-block" data-aos="zoom-in"  data-aos-duration="800">
            <h2 class="large-head">KONTAKT</h2>


            <h5><?php the_sub_field('header'); ?></h5>
            <p class="address"><?php the_sub_field('adres'); ?></p>

            <div class="row-info">

                <?php if (have_rows('telefon')) : ?>
                    <?php while (have_rows('telefon')) : the_row(); ?>

                        <a href="tel:<?php the_sub_field('numer_do_linku'); ?>">
                            <?php $obrazek = get_sub_field('obrazek'); ?>
                            <?php if ($obrazek) : ?>
                                <img src="<?php echo esc_url($obrazek['url']); ?>" alt="<?php echo esc_attr($obrazek['alt']); ?>" />
                            <?php endif; ?>
                            <?php the_sub_field('numer_telefonu'); ?>
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('email')) : ?>
                    <?php while (have_rows('email')) : the_row(); ?>

                        <a href="mailto:<?php the_sub_field('e-mail_adres'); ?>">
                            <?php $obrazek = get_sub_field('obrazek'); ?>
                            <?php if ($obrazek) : ?>
                                <img src="<?php echo esc_url($obrazek['url']); ?>" alt="<?php echo esc_attr($obrazek['alt']); ?>" />
                            <?php endif; ?>
                            <?php the_sub_field('e-mail_adres'); ?>
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>


                <?php if (have_rows('godziny_otwarcia')) : ?>
                    <?php while (have_rows('godziny_otwarcia')) : the_row(); ?>

                        <a href="">
                            <?php $obrazek = get_sub_field('obrazek'); ?>
                            <?php if ($obrazek) : ?>
                                <img src="<?php echo esc_url($obrazek['url']); ?>" alt="<?php echo esc_attr($obrazek['alt']); ?>" />
                            <?php endif; ?>
                            <?php the_sub_field('tekst'); ?>
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <div class="link">
                <a href="<?php the_sub_field('link_do_mapy'); ?>" target="_blank" class="btn"><span class="link-arrow"></span>ZNAJDŹ NAS NA GOOGLE MAPS</a>
            </div>


        </div>


        <div class="right-block" data-aos="zoom-in"  data-aos-duration="800">
            <div class="block-header mobile">
                <h3>NAPISZ DO NAS</h3>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="114" title="Formularz 1"]'); ?>
        </div>

    </div>




</section>