<?php
/**
 * Theme Home file
 * Template Name: Homepage
 * @package      WordPress
 * @subpackage   BSD
 */
get_header();
?>
<div id="page-banner">
    <div class="banner home-banner main-banner">

        <div class="container">
           
            <div class="row banner-row">
                <div class="col-lg-12  d-flex align-items-center left-banner-con">
                    <div class="banner-main text-center">       
                        <div class="tagline-one">
                            <?php if(get_field(tagline_one)){?>
                            <?php the_field('tagline_one')?>
                            <?php } else { ?>
                            Welcome to the
                            <?php }?>
                        </div>
                         <div class="tagline-two">
                            <?php if(get_field(tagline_one)){?>
                            <?php the_field('tagline_two')?>
                            <?php } else { ?>
                          STUDIO! 9
                            <?php }?>
                        </div>
                         <?php /*<div class="banner-content">
                             <?php if(get_field('banner_content')){?>
                            <?php the_field('banner_content')?>
                            <?php } else { ?>
                             <p> The Aulsbrook Law Firm will negotiate settlements on your behalf with the insurance company. Matt pursues the maximum compensation you deserve.
                             </p>
                                 <?php }?>
                         </div>*/?>
                        <div class="banner-btn">
                            <a href="/contact-us">Free Consultation</a>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
<div class="what-offer main-padding text-center">
<div class="container">
  <div class="heading center-heading">
    <strong>
    <?php the_field('what_we_offer_title')?>
  </strong></div>

  <div class="row">
    <?php if (have_rows('what_we_offer')): ?>
                        <?php
                       
                        while (have_rows('what_we_offer')) : the_row();
                           
                            ?>
    <div class="col-md-4 service-col">
       <a href=" <?php the_sub_field("service_link")?>">
         
        <div class="service-inner" style= "background-image: url('<?php the_sub_field("service_image")?>')">
          <div class="service-title ">
           <?php the_sub_field("service_title")?>
          </div>
        
        </div>
        </a>
    </div>
<?php endwhile; ?>
  <?php endif;  ?>
  </div>
</div>
</div>
<div class="music-director">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 d-flex align-items-end pl-0">
          <div class="dj-img main-padding pb-0">
              <img src="<?php the_field('music_director')?>" alt="dj">
          </div>
      </div>
      <div class="col-md-9 d-flex align-items-center">
          <div class="main-padding director-con white-text">
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
  <div class="our-gallery text-center main-padding">
    <div class="container">
      <div class="heading white-heading">
        Our Success Stories
      </div>
      <div class="testimonial-slide owl-carousel owl-theme">
            <?php
                        $args = array(
                            'post_type' => 'testimonial',
                            'order_by' => 'ID',
                            'order' => 'ASC',
                            'posts_per_page' => 3,
                        );

                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                ?>

               <div class="hand-test-slide">
                                    <div class="hand-con">
                                        <?php the_content();?>
                                    </div>
                                    <div class="hand-title">
                                        <?php the_title();?>
                                    </div>
                                   <div class="user-des">
                                      <?php the_field('user_designation')?>
                                   </div>
                                </div>

                                <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                        ?> 
    </div>
  </div>
</div>
  <div class="home-section-seventh main-padding" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="free-cons-top text-center">
                    <div class="heading center-heading">
                        <strong> Contact Us For Free Consultation </strong>
                    </div>
                        
                    <div class="cons-form">
                        <?php echo do_shortcode('[contact-form-7 id="68" title="Home Contact"]')?>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>
