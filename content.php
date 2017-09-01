<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink() ) ),'</a></h3>' ); ?>
        <hr>
        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> <?php the_category(); ?></small>
    </header>
    <div class="row">
        <?php if( has_post_thumbnail() ): ?>

            <div class="col-xs-12 col-sm-4">
                <div class="thumbnail"><?php the_post_thumbnail( 'medium' ); ?></div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <p><?php the_excerpt(); ?></p>
            </div>

        <?php else: ?>

            <div class="col-xs-12">
                <?php the_excerpt(  ); ?>
            </div>

        <?php endif; ?>
    </div>

</article>