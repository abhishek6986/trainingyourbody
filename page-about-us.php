<?php 
/* 
Template name: About us
*/
get_header(); ?>

	

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="container page_content">
        		<div class="col-md-16 banner">
                	<?php if(get_feature_image_url(get_the_ID())){?>
                    <img src="<?php echo get_feature_image_url(get_the_ID()); ?>" class="img-responsive" alt="">
					<?php }else{?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about_us_banner.jpg" class="img-responsive" alt="">
					<?php } ?>
                    
                    <div class="banner_title"><h2><span class="tlt_one">About</span> training <span class="tlt_two">Your Body</span></h2></div>
                    <div class="b_highliter"></div>
                </div>
                
               
			<?php the_content(); ?>
                 
        </div>

		<?php endwhile; ?>

		<?php else: ?>
        <?php endif; ?>
<?php get_footer(); ?>
