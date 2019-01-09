<?php
get_header();
?> 
<div id="page-banner">
    <div class="banner inner-banner main-banner">

        <div class="container">
            <div class="row banner-row">
                <div class="col-md-12  d-flex align-items-center left-banner-con">
                    <div class="banner-main text-center">       
                       
                         <div class="tagline-two">
                            <?php if(get_field(tagline_one)){?>
                            <?php the_field('tagline_two')?>
                            <?php } else { ?>
                           404! Page Not Found
                            <?php }?>
                        </div>
                         <div class="banner-content">
                             <?php if(get_field('banner_content')){?>
                            <?php the_field('banner_content')?>
                            <?php } else { ?>
                           The Aulsbrook Law Firm will negotiate settlements on your behalf with the insurance company. Matt pursues the maximum compensation you deserve.
                        <?php }?>
                         </div>
                      
                    </div>
                </div>
                

            </div>
            
        </div>
        <div class="banner-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 banner-bot-left">
                        <?php if(get_field('banner_fight')){?>
                        <?php the_field('banner_fight')?>
                         <?php } else { ?>
                         I come to fight, I don't bark I bite
                        <?php }?>
                    </div>
                    <div class="col-sm-6  banner-bot-right pull-right">
                                <?php if(get_field('banner_injury')){?>
                        <?php the_field('banner_injury')?>
                        <?php } else { ?>
                         Personal Injury lawyers in Texas
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
     <div class="error-page middle-heading main-padding">
<div class="container">
    <div class="row">
        
         <div class="col-lg-8 col-md-7">
            <div class="get-contact-form">
                <h1 class="hide heading"><strong>404! Page Not Found!</strong></h1>
                <p>
                    The page you are looking for can't be found. Try using the menus to the right, or contact us by filling the form below. We will get in touch with you shortly.</p>
                 <?php echo do_shortcode('[contact-form-7 id="120" title="404 page"]'); ?>
            </div>
        </div>
        <div class="col-lg-4 col-md-5">
               <aside class="sidebar border-line">
                        <div class="widget">
                            <div class="widget-title">Practice Areas</div>
                            <?php
                            wp_nav_menu(array(
                           
                                'theme_location' => 'practice-areas')
                            );
                            ?>
                        </div>
                    </aside>
            </div>
         </div>
    </div>
</div>
<?php
get_footer();
?>