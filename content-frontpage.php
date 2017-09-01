<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <a href="<?php echo esc_url(get_permalink() ) ?>" class="btn btn-info btn-lg" style="position: fixed; bottom: 100px; right: 0; z-index: 1">
            <span class="glyphicon glyphicon-home"></span>
        </a>
        <?php the_title( sprintf('<h1 class="entry-title">', esc_url(get_permalink() ) ),'</h1>' ); ?>
<!--        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> <?php the_category(); ?></small>-->
    </header>

    <div class="row">

        <?php if( has_post_thumbnail() ): ?>

            <div class="col-xs-12 col-sm-4">
                <div class="thumbnail"><?php the_post_thumbnail( 'medium' ); ?></div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <p><?php the_content(); ?></p>
            </div>

        <?php else: ?>

            <div class="col-xs-12">
                <?php the_content(  ); ?>
            </div>

        <?php endif; ?>
    </div>

</article>