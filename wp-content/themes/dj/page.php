<?php get_header(); ?>
<?php include 'template/page_banner.php'; ?>
<div class="listblock-wrap main-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    
                     <div class="post-content">
                           <?php while (have_posts()) : the_post(); ?>
                            <div id="page-wrapper" class="default-page <?php echo strtolower(get_the_title()); ?>-wrapper">
                                <h1 class="heading"><strong><?php the_title()?></strong></h1>
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
                    <?php dynamic_sidebar('page-sidebar'); ?>
                </aside>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>
