<?php
/* Template Name:contactus */
get_header();
?>
<div id="page-banner">
    <div class="banner inner-banner contact-us-banner main-banner">

        <div class="container">
            
            <div class="row banner-row">
                <div class="col-lg-7  d-flex align-items-center left-banner-con">
                    <div class="banner-main"> 
                        <h1><?php the_title(); ?></h1>
                        <div class="banner-content">
                             <?php if(get_field('banner_content')){?>
                            <?php the_field('banner_content')?>
                            <?php } else { ?>
                           The Aulsbrook Law Firm will negotiate settlements on your behalf with the insurance company. Matt pursues the maximum compensation you deserve.
                        <?php }?>
                         </div>
                        <div class="office-info">
                            <h2 class="office-heading">
                                <?php the_field('office_heading')?>
                            </h2>
                            <h3 class="heading hide">The Texas Law Dog</h3>
                            <div class="office-detail">
                                <div class="off-left-wrap">
                                <div class="off-det-left">
                                    <?php the_field('office_address')?>
                                </div>
                                </div>
                                <div class="off-det-middle">
                                    <div class="off-det-left">
                                    <?php the_field('office_contact')?>
                                    </div>
                                </div>
                                <div class="off-det-right">
                                    <a href="<?php the_field()?>">
                                    <img src="<?php the_field('office_payment')?>" alt="payment">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="contact-banner">
                    <?php echo do_shortcode('[contact-form-7 id="126" title="contact banner form"]')?>
                    </div>
                </div>
                

            </div>
            
        </div>
        
    </div>

</div>
<div class="contact-sec-one">
    <?php the_field('map_iframe');?>
    </div>
<div class="home-section-three main-padding white-text">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="home-sect-left">
                <div class="heading white-heading">
                    <?php the_field('mathew_heading', 11)?>
                </div>
                    <div class="mathew-content common-list">
                    <?php the_field('mathew_content', 11)?>
                </div>
                    <div class="out-btn">
                        <a href="<?php the_field('mathew_button_link', 11)?>" class="main-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 home-sect-right">
                <div class="mathew-image d-flex align-items-end">
                    <img src="<?php the_field('mathew_image', 11)?>" alt="mathew">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-section-four main-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="accordion">
                    <?php if (have_rows('texas_lead_repeater', 11)): ?>
                        <?php
                       
                        while (have_rows('texas_lead_repeater', 11)) : the_row();
                           // vars
                            $counter++;
                            if ($counter == 1) {
                                $cls1 = 'show';
                                $active = "active";
                                
                            } else {
                                $cls1 = null;
                                 $active = null;
                            }
                            ?>
                            <div class="acoordian-card card-<?php echo $counter; ?> <?php echo  $active; ?>">
                                
                                <div class="acoordian-header">
                                    <div class="" role="button" data-toggle="collapse" data-target="#collapse-<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $counter; ?>">
                                      <?php the_sub_field('texas_heading',11)?>
                                    </div>
                                  
                                </div>

                                <div id="collapse-<?php echo $counter; ?>" class="collapse <?php echo $cls1;?>" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="acoordian-body">
                                       <?php the_sub_field('texas_content', 11)?>
                                       </div>
                                </div>
                                </div>
                            <?php
                          
                        endwhile;
                        ?>
                    <?php endif;
                    ?>

</div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="dedicated-lawyer">
                    <div class="heading">
                        <?php the_field('dedicated_lawyer_heading', 11)?>
                    </div>
                    <div class="dedicated-lawyer-con">
                          <?php the_field('dedicated_lawyer_content', 11)?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
