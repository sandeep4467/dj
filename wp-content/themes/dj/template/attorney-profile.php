<?php

/* Template Name: Attorney Profile */
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
                           <?php the_title(); ?>
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

<?php/**** ATTORNEY SCHEMA   *****/?>
<div class="att-prof-one main-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="attorney-prof-img">
                   <img src="<?php the_field('attorney_image')?>" alt="<?php the_title(); ?>" >
                </div>
            </div>
            <div class="col-lg-9 col-md-8 d-flex align-items-center">
                <div class="att-prof-con common-list">
                    <h1 class="heading"><strong><?php the_title(); ?></strong>The Texas Law Dog</h1>
                    <?php while (have_posts()) : the_post(); ?>
                     <?php the_content(); ?>
                          <?php
                        endwhile;
                        wp_reset_query();
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="att-prof-two main-padding text-center bg-sec white-text">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
               
                <h2 class="heading white-heading center-heading">
                    <strong><?php the_field('attorney_heading')?></strong>
                </h2>
                <div class="att-sec-con common-list">
                   <?php the_field('attorney_bottom_content')?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-section-seventh main-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="free-cons-top text-center">
                    
                
                    <h3 class="heading center-heading">
                        <strong><?php the_field('consultation_heading', 11)?></strong>
                    </h3>
                        <div class="free-cons-content">
                            <?php the_field('consultation_content', 11)?>
                        </div>
                    <div class="cons-form">
                        <?php echo do_shortcode('[contact-form-7 id="75" title="Home Contact"]')?>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<div  itemscope="" itemtype="http://schema.org/Attorney">
            <div class="schema-hide d-none">
              <img itemprop="image" src="<?php the_field('attorney_image'); ?>" alt="<?php the_title();?>">
                 
                <span itemprop="priceRange">N/A</span>
                <span itemprop="name"><?php the_title(); ?></span>
                <?php dynamic_sidebar('footer-widget-third'); ?>
                   
            </div>
   </div>   


<?php
get_footer();
