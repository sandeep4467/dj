<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if (is_home() || is_front_page()) { ?>
            <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>.</title>
        <?php } else { ?>
            <title><?php wp_title("", true); ?> | <?php bloginfo('name'); ?></title>
        <?php }
        ?>
        <link rel="shortcut icon" href="<?php echo bloginfo('url') ?>/favicon.ico" />

        <?php wp_enqueue_script('jquery'); ?>
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

       <?php wp_head(); ?>
          <?php
        if (get_field("banner_background")):
            $banner_background = get_field("banner_background");
        else:
            $banner_background = get_template_directory_uri() . '/img/default.jpg';
        endif;
        ?>
        <style> 
            .banner{
                background: url(<?php echo $banner_background; ?>);

            }
        </style> 
    </head>
    <body>
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-7 align-items-center d-flex">
                           <?php theme_logo(); ?>
                    </div>
                    <div class="col-md-9 col-sm-8 col-5 d-flex align-items-center">
                        <div class="header-right d-flex align-items-center">
                            <div class="main-navigation">
                                <nav class="navbar navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <?php
                                        wp_nav_menu(array(
                                            'container' => 'navbar-nav',
                                            'menu_class' => 'navbar-nav text-md-center w-100',
                                            'theme_location' => 'primary')
                                        );
                                        ?>
                                    </div>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <main id="main-wrapper" class="main-wrapper <?php
              if (!is_front_page()) {
                  echo 'inner-page';
              }
              ?>">