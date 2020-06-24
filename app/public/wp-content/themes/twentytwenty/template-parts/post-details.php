<?php
/**
* Template part test
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

 ?>

<?php
            // arguments
            
                $args = array(
                    'post_type' => 'resources',
                    'posts_per_page' => 10
                
                );
            
                
                $query = new WP_Query($args);
                while($query -> have_posts()) : $query -> the_post();
        ?>

        <div>
        <h2><?php the_title(); ?><h2>
        <h4><?php the_date(); ?></h4>
        <p><?php the_content(); ?></p>
        <?php the_post_thumbnail(); ?>


        </div>

        <?php endwhile; wp_reset_query(); ?>