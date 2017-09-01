<?php get_header(); ?>

<div class="row">

    <div class="col-xs-12 col-sm-8 text-justify">

         <?php

        if( have_posts() ):

            while( have_posts() ): the_post(); ?>

                <?php get_template_part('content','page'); ?>          

            <?php endwhile;
        
        endif;
        ?>
    </div>
    
    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
    
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>