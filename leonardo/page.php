<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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


