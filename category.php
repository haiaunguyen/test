<?php get_header(); ?>

<div class="row">

    <div class="col-xs-12 col-sm-8">

        <div class="row text-justify no-margin">
            <?php
            foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; }

            if( have_posts() ): $i = 0;

                while( have_posts() ): the_post(); ?>

                        <div class="col-xs-12 news-item">
                           <?php get_template_part('content',get_post_format()); ?>    
                        </div>


                <?php $i++; endwhile; ?>

                <div class="col-xs-6 text-left">
                    <?php previous_posts_link( '<< Newer Posts' ); ?>
                </div>        
                <div class="col-xs-6 text-right">
                    <?php next_posts_link( 'Older Posts >>' ); ?>
                </div>

            <?php endif;

            ?>
        </div>
    
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
    
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
