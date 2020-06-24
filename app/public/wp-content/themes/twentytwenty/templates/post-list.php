<?php
/**
 * Template Name: Post List Template
*Template Post Type: post, page, product , Resources
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

 ?>


<main id="content">
    <?php
    $query = new WP_Query(array(
        'post_type' => 'resources',
        'posts_per_page' => 10
    ));

    ?>
    
    <?php

	if ( $query->have_posts() ) {

		while ( $query->have_posts() ) {
			the_post();

			get_template_part( 'template-parts/post-list' );
        }
        
      
    }

	?>

      

</main><!-- #site-content -->


<?php get_footer(); ?>

