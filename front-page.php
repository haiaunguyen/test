<?php get_header(); ?>

<div class="row">

    <div class="col-xs-12">
        <div class="col-xs-4">
            <br>Giới thiệu:<br>
            Tên gọi: Câu lạc bộ Khuyến Tài (Khuyen Tai Club)<br>
            Slogan: Sống Khát Khao, Sống Vươn Cao<br>
            Trụ sở chính: 66-68 Lê Thánh Tôn, phường Bến Nghé, quận 1, TP.Hồ Chí Minh<br>
            Đơn vị bảo trợ: Hội Khuyến Học TP.Hồ Chí Minh<br>
            Văn phòng hoạt động: Hội Cựu Giáo Chức TP.Hồ Chí Minh số 300 Điện Biên Phủ,phường 7, quận 3
        </div>
    <div id="test-carousel" class="carousel slide col-xs-6 col-sm-3" data-ride="carousel" style="width: 600px">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

        <?php

            $args_cat = array(
                'include' => '11,13'
            );

            $categories = get_categories( $args_cat );
            $count = 0;
            $bullets = '';
            foreach($categories as $category):

                $args = array(
                    'type' => 'post',
                    'posts_per_page' => 1,
                    'category__in' => $category->term_id,
                    //'category__not_in' => array(),
                );
                
                $lastPost = new WP_Query( $args );

                if( $lastPost->have_posts() ):

                    while( $lastPost->have_posts() ): $lastPost->the_post(); ?>

                        <div class="item <?php if($count == 0): echo 'active'; endif; ?>">
                            <?php the_post_thumbnail( 'medium' ); ?>
                            <div class="carousel-caption">
                                <?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink() ) ),'</a></h3>' ); ?>
<!--                                <small><?php the_category(' '); ?></small>-->
                            </div>
                        </div>

                        <?php $bullets .= '<li data-target="#test-carousel" data-slide-to="'.$count.'" class="'; ?>
                        
                        <?php if($count == 0): $bullets .='active'; endif; ?>

                        <?php $bullets .= '"></li>'; ?>

                        
                    <?php endwhile;
            
                endif;

                wp_reset_postdata();

            $count++;
            
            endforeach;          

        ?>       

            <!-- Indicators  -->
            <ol class="carousel-indicators">
                <?php echo $bullets; ?>
            </ol> 
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#test-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#test-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    </div>
    
</div>

<div class="row">

    <div class="col-xs-12 col-sm-8">

         <?php

        if( have_posts() ):

            while( have_posts() ): the_post(); ?>

                <?php get_template_part('content','frontpage'); ?>          

            <?php endwhile;
        
        endif;

        //PRINT OTHER 2 POST NOT THE FIRST ONE

        $args = array(
            'type' => 'post',
            'posts_per_page' => 2,
            'offset' => 1,
        );

        $lastPost = new WP_Query( $args );

        if( $lastPost->have_posts() ):

        while( $lastPost->have_posts() ): $lastPost->the_post(); ?>

            <?php get_template_part('content',get_post_format()); ?>          

        <?php endwhile;
    
        endif;

        wp_reset_postdata();

        ?> 

        <!-- <hr> -->

        <?php
        
        //PRINT ONLY ONE CATEGORY

        $lastPost = new WP_Query( 'type=post&posts_per_page=-1&category_name=hoc-bong' );

        if( $lastPost->have_posts() ):

        while( $lastPost->have_posts() ): $lastPost->the_post(); ?>

            <?php get_template_part('content',get_post_format()); ?>          

        <?php endwhile;
    
        endif;

        wp_reset_postdata();

        ?>
    
    </div>

    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
    
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
