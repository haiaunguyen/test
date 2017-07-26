<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
</head>

    <?php
    
        if( is_front_page() ):
            $test_classes = array('test-class', 'my-class');
        else:
            $test_classes = array('no-test-class');
        endif;

    ?>

    <body <?php body_class( $test_classes ); ?>>

        <div class="container">
            
            <div class="row">

                <div class="col-xs-12">

                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container" style="height: 100px, background-color: ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">                          
                                <span class="sr-only" >Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo site_url() ?>">
                                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> 
                            </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location'=>'primary',
                                        'container'=>false,
                                        'menu_class'=>'nav navbar-nav navbar-right',
									    'walker' => new Walker_Nav_Primary()
                                        )
                                    ); 
                                ?>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
            

                <div class="col-xs-12">
                    <div class="search-form-container">
                        <div class="container">
                            <?php get_search_form(  ); ?>
                        </div>
                    </div>
                </div>

            </div>     

