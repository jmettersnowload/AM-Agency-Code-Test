<?php
/**
* Template part for post list
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

 ?>


<?php

if($_GET['topics'] && !empty($_GET['topics'])) 
{
    $topic = $_GET['topics'];
}

if($_GET['audience'] && !empty($_GET['audience'])) 
{
    $topic = $_GET['audience'];
}

?>



	<div class="container">
        <h2 class="title">Resources</h2>
    <div class="row">
        <form action="/" method="get">
        <div class="col-sm">
            <label>Topics:</label>
            <select name="topics">
            <option>Select Topics</option>
                <option value="topics"></option>
                             
            </select>
        </div>
    
    <div class="col-sm">
            <label>Audiences:</label>
            <select name="audience">
                <option>Select Audience</option> 
                <option value="audience"></option>                     
            </select>
    </div>
            <button type="submit" name="">Filter</button>
        </form>
</div>
        <?php
            // arguments
            
                $args = array(
                    'post_type' => 'resource',
                    'posts_per_page' => 10,
                    'meta_query' => array(
                        array(
                            'key' => 'topics',
                            'type' => 'CHAR',
                            'value' => $topics
                        ),

                        array(
                            'key' => 'audience',
                            'type' => 'CHAR',
                            'value' => $audience
                            
                        )
                    )
                );
            
                


                $query = new WP_Query($args);
                while($query -> have_posts()) : $query -> the_post();
        ?>
            <div class="post clearfix">
                <h5><?php the_title(); ?></h5>
                <div class="taxonomy clearfix">
                    <div class="topics">
                        <strong>Topics:</strong>
                        <?php the_field('topics'); ?>
                    </div>
                
                    <div class="audience">
                        <strong>Audience:</strong> 
                        <?php the_field('audience'); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
