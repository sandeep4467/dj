<?php

/* Template Name: Music Programing */
get_header();
?>
<?php include 'page_banner.php'; ?>

<div class="about-section-onebg-sec text-center">
    <div class="container-fluid">
        <div class="row">
          
             <div class="col-md-12">
                <div class=" main-padding ">
                 <div class="about-content">
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
        <div class="row about-row">
            <?php if (have_rows('attorney_list')): ?>
                        <?php
                       
                        while (have_rows('attorney_list')) : the_row();?>
            <div class="col-md-4 attorney-col">
                <div class="attorney-block">
                    <a href="<?php the_sub_field('attorney_link')?>">
                    <div class="attorney-image">
                        <img src="<?php the_sub_field('attorney_image')?>" alt="attorney">
                    </div>
                    <div class="att-low-block">
                    <div class="attorney-name">
                        <?php the_sub_field('attorney_name')?>
                    </div>
                        <div class="attorney-desig">
                        <?php the_sub_field('attorney_designation')?>
                    </div>
                    </div>
                    </a>
                </div>
            </div>
              <?php
                          
                        endwhile;
                        ?>
                    <?php endif;
                    ?>
        </div>
    </div>
</div>
<div class="album-bg main-padding bg-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="free-cons-top text-center">
                    <h3 class="heading center-heading white-heading">
                        <strong>Studio 9! Pro Album's</strong>
                    </h3>
                       
                    </div>
                </div>
            </div>
        </div>
         <div class="container">
        <div class="row"><div class="col-md-12 album-col">
    <div class="album-col-outer">
<?php the_field('music_album')?>
</div>
</div>
            </div>
            
        </div>
    </div>

<?php
get_footer();
