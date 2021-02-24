<?php get_header(); ?>
        <div class="container"> 
             <?php 
             $content = get_post_field('post_content', $post_id);
             echo do_shortcode( $content );
             ?>
        </div>
<?php get_footer();?>