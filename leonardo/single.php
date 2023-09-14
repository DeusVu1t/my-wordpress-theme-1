<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package leonardo
 */

get_header();
?>


		<?php
	
// ID of the current item in the WordPress Loop
$id = get_the_ID();

// check if the flexible content field has rows of data
if ( have_rows( 'content', $id ) ) :

    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'content', $id ) ) : the_row();

        get_template_part( 'components/' . get_row_layout() );

    endwhile;

elseif ( get_the_content() ) :

    // no layouts found

endif;

		?>

        

<?php

get_footer();
