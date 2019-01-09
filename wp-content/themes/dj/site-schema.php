<div class = "clearfix"></div>

<?php
$desc = get_field('schema_review_content', get_the_id());
$star = get_field('star_rating', get_the_id());
$Reviewtitle = get_field('schema_review_title', get_the_id());
$reviewerName = get_field('reviewed_by', get_the_id());
if ($desc && $star && $reviewerName && $Reviewtitle) {
    ?>
    <div class="review-schema-wrapper middle-heading fullwidth left-heading">
        <div class="clientreviews">
            <div class="marg-15">
                <div class="heading"><strong>Client Reviews</strong>  <span class="rating">
                        <span class="star active"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </span>
                </div>
                <div class="page_review" itemprop="review" itemscope itemtype="http://schema.org/Review">
                    <div class="page_review_by" itemprop="author" itemscope itemtype="http://schema.org/Person">
                        <p><strong>By: </strong><span itemprop="name"><?php echo $reviewerName; ?></span></p>
                    </div>
                    <div class="page_review_by">
                        <p class="testimonialTitle"><strong>Title:</strong> <span itemprop="itemReviewed" itemtype="http://schema.org/Thing">
                                <?php echo $Reviewtitle; ?>
                            </span></p>
                    </div>
                    <div class="page_review_review">
                        <p class="testimonialTitle"><strong>Client Description:</strong><span itemprop="description">
                                <?php
                                echo $desc;
                                ?>
                            </span></p>
                    </div>
                    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                        <p> <strong>Rating:</strong> 
                        <?php $star = get_field('star_rating', get_the_id()); ?>
                        <span style="color:#c18e59;">
                            <?php
                            if ($star == 1) {
                                echo"★";
                            } elseif ($star == 2) {
                                echo"★★";
                            } elseif ($star == 3) {
                                echo"★★★";
                            } elseif ($star == 4) {
                                echo"★★★★";
                            } elseif ($star == 5) {
                                echo"★★★★★";
                            } else {
                                
                            }
                            ?>
                        </span>
                        <meta itemprop="worstRating" content="3">
                        <span itemprop="ratingValue"><?php echo $star; ?></span> / <span itemprop="bestRating">5</span> stars
                </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
$video_title = get_field('schema_video_title', get_the_id());
$video_thumbnail = get_field('page_video_thumbnail', get_the_id());
$video_desc = get_field('schema_video_description', get_the_id());
$video_uploaded = get_field('video_uploaded_date', get_the_id());
if ($video_title && $video_thumbnail && $video_desc && $video_uploaded) {
    ?>
    <div itemscope itemtype="http://schema.org/VideoObject" class="left-heading fullwidth clientreviews middle-heading video-schema">
        <div class="heading"><strong>
               <span itemprop="name"><?php echo $video_title; ?></span>
            </strong>
           </div>
           <div class="row"> 
          <div class="col-sm-4"> <iframe width="400" height="220" src="https://www.youtube.com/embed/<?php echo get_field('youtube_video_id'); ?>" allowfullscreen></iframe>
            <meta itemprop="thumbnailURL" content="<?php echo $video_thumbnail; ?>" />
            <meta itemprop="embedURL" content="https://youtu.be/<?php echo get_field('youtube_video_id'); ?>" />
          </div>
               <div class="col-sm-8">
            <p><strong>Video Title: </strong><?php echo $video_title; ?></p>
            <p itemprop="uploadDate" content="<?php echo $video_uploaded; ?>"><strong>Uploaded Date:</strong> <?php echo $video_uploaded; ?></p>
            <div>
                <p><strong>Video Description:</strong> <span itemprop="description"><?php echo $video_desc; ?></span></p></div>
           </div>
           </div>
    </div>
 <?php }
?>