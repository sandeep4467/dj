<div class="container">
   <?php get_template_part('site', 'schema'); ?>
</div>


</main>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">  
            <div id="footer-col-left" class="col-md-4 footer-inner main-padding">
                <?php
                if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-first')) : endif;
                ?> 


            </div>
            <div id="footer-col-middle" class="col-md-4 footer-inner main-padding">


<?php dynamic_sidebar('footer_widget_second'); ?>
            </div>
            <div id="footer-col-right" class="col-md-4 footer-inner main-padding">
                <div  class="schema-div" itemscope itemtype="https://schema.org/LegalService">
                    <div class="schema-hide d-none">
                        <span itemprop="priceRange">N/A</span>
                        <p itemprop="name" ><?php bloginfo('name'); ?></p>
                        <img src="/wp-content/uploads/2018/12/mathew.png" itemprop="image" alt="attorney"/>

                    </div>  

<?php
$posts = get_field('q_choose_nap');
$post = $posts->ID;
if ($posts):
    $nap_phone_number = get_field('nap_phone_number', $post);
    $nap_attorney_business_name = get_field('nap_attorney_business_name', $post);
    $nap_street_address = get_field('nap_street_address', $post);
    $nap_suite_number = get_field('nap_suite_number', $post);
    $nap_city_county = get_field('nap_city_county', $post);
    $nap_state = get_field('nap_state', $post);
    $nap_zip_code = get_field('nap_zip_code', $post);
    $nap_text_number = get_field('nap_text_number', $post);
    $nap_email_address = get_field('nap_email_address', $post);
    $phone_number_post = preg_replace("/[^0-9]/", "", $nap_phone_number);
    ?>
                        <div class="h3">Contact Us</div>
                        <div class="footer-head hide"><strong><?php the_title(); ?></strong></div>
                        <span itemprop="name" class=""><p><?php
                    if ($nap_attorney_business_name != '') {
                        echo $nap_attorney_business_name;
                    }
    ?>
                            </p>
                        </span>
                        <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                            <ul>
                                <li>  <em class="fa fa-map-marker" aria-hidden="true"></em>
                                    <span itemprop="streetAddress">

    <?php
    if ($nap_street_address != '') {
        echo $nap_street_address;
    }
    ?><br>
                                        <?php if ($nap_suite_number != '') { ?>
                                            <span><?php echo $nap_suite_number; ?></span>
                                        <?php } ?>
                                    </span><br>

                                    <span itemprop="addressLocality"><?php
                                    if ($nap_city_county != '') {
                                        echo $nap_city_county;
                                    }
                                        ?>,</span>
                                    <span itemprop="addressRegion"><?php
                                        if ($nap_state != '') {
                                            echo $nap_state;
                                        }
                                        ?></span>
                                    <span itemprop="postalCode"><?php
                                        if ($nap_zip_code != '') {
                                            echo $nap_zip_code;
                                        }
                                        ?></span>
                                        <?php if (get_field('get_directions_link')): ?><br>
                                        <span class="get-direction"><a target="_blank" class="directions-link" href="<?php the_field('get_directions_link') ?>">Get Directions</a>
                                        </span>
    <?php endif; ?>
                                </li>
                                    <?php if ($nap_phone_number != '') : ?>
                                    <li> <em class="fa fa-phone" aria-hidden="true"></em>
                                        Phone: 
                                        <a class="footer-tel" href="tel:<?php echo $phone_number_post; ?>"><span itemprop="telephone"><?php
                                if ($nap_phone_number != '') {
                                    echo $nap_phone_number;
                                }
                                        ?></span>
                                        </a>

                                        </a>
                                        </span>
                                    </li>

    <?php endif; ?>
                            </ul>

                            <span class="footer-tel-main">

                            </span>


                        </div>
    <?php
    wp_reset_postdata();
    ?>

                        <?php
                    else:
                        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-third')) : endif;
                    endif;
                    ?> 

                </div>
                <div itemscope itemtype="https://schema.org/Organization" class="hide">
                    <ul>
                        <li>
                            <a itemprop="sameAs" href="#" target="_blank" rel="nofollow"><em class="fa fa-facebook" aria-hidden="true"></em><span>Facebook</span></a>                               
                        </li>
                        <li>                     
                            <a itemprop="sameAs" href="#" target="_blank" rel="nofollow"><em class="fa fa-twitter" aria-hidden="true"></em><span>Twitter</span></a>
                        </li>  
                        <li> <a itemprop="sameAs" href="#" target="_blank" rel="nofollow"><em class="fa fa-linkedin" aria-hidden="true"></em><span>Linkedin</span></a>
                        </li>
                        <li>
                            <a itemprop="sameAs" href="#" target="_blank" rel="nofollow"><em class="fa fa-google-plus" aria-hidden="true"></em><span>Google Plus</span></a>
                        </li>   
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright &copy; <?php bloginfo('name') ?> <?php echo date('Y') . '. '; ?>&nbsp;All Rights Reserved.
                    </p>
                    <div class="copyright-pages text-center">
<?php dynamic_sidebar('footer-copyright'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php if(!is_front_page()){ ?>
<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/texaslawdog.staging.wpengine.com\/","name":"The Texas Law Dog","potentialAction":{"@type":"SearchAction","target":"http:\/\/texaslawdog.staging.wpengine.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<?php } ?>
</body>
</html>