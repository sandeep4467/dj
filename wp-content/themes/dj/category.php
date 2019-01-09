<?php get_header(); ?>
<?php include 'template/page_banner.php'; ?>
<div class="listblock-wrap main-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                 <div class="row">
                     <div class="col-md-12">
                     <h1 class="heading"><strong>Our Blogs</strong></h1>
                     <h2 class="heading hide">The Texas Law Dog</h2>
                     </div>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="col-sm-12 post-col-wrap">
                            <div id="post-wrap" class="fullwidth post-list <?php echo strtolower(get_the_title()); ?>-wrapper">

                                <div class="post">
                                  
                                    <div class="post-content">
                                        <div class="post-title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </div>
                                        <div class="cat"><?php the_category(' , ') ?></div>
                                        <div class="blog-content">
                                        <p> <?php echo custom_echo(get_the_excerpt(), 110); ?></p>
                                        <div class="post-btn">
                                        <a  href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                    ?>
                    <div class="col-md-12">
                    <?php wp_pagenavi(); ?>
                    </div>
                    <?php
                    wp_reset_query();
                    ?>
            </div>
        </div>
            <div class="col-md-4">
                <aside class="sidebar">
                    <?php dynamic_sidebar('contact-form'); ?>
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </aside>
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