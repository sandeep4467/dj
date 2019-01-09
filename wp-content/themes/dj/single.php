<?php get_header(); ?>
<?php include 'template/page_banner.php'; ?>
<div class="listblock-wrap main-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    
                     <div class="post-content">
                           <?php while (have_posts()) : the_post(); ?>
                            <div id="page-wrapper" class="fullwidth <?php echo strtolower(get_the_title()); ?>-wrapper">
                                
                                      <?php
                                    if (has_post_thumbnail()) {
                                        $backgroundImg = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    } else {
                                        $backgroundImg = get_template_directory_uri() . '/img/blog-default.jpg';
                                    }
                                    ?>
                                        <div class="blog-sing-img" style="background-image: url('<?php echo $backgroundImg; ?>')">
                                    </div>
                                        <h1 class="heading"><strong><?php the_title()?></strong></h1>
                                   <h2 class="heading hide">The Texas Law Dog</h2>
                                        <div class="single-cat"><?php the_category(' , ') ?></div> 
                                    <?php the_content(); ?>
                            </div><?//--End Post Wrapper--?>
                            <?php
                        endwhile;
                        wp_reset_query();
                        ?>
                     </div>
                    
            </div>
            <div class="col-lg-4">
                <aside class="sidebar">
                    <?php dynamic_sidebar('contact-form'); ?>
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </aside>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script>
    jQuery(document).ready(function () {
        jQuery("#responsive-menu-item-19").addClass("responsive-menu-current-item");
        jQuery("#menu-item-24").addClass("current-menu-item");
    });
</script>