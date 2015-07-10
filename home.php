<?php get_header(); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<?php $args = array(
			'post_type' => 'slide',
			'posts_per_page' => 10
			);
			$i = 0;
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
		<div class="item <?php if($i == 0){ echo 'active';} ?>">
			<?php the_post_thumbnail(); ?>
			<div class="container banner_detail">
				<div class="col-md-9 banner_caption">
					<h3><?php echo get_post_meta(get_the_ID(),'title_top_text',true); ?></h3>
					<h2><?php echo get_post_meta(get_the_ID(),'title_bottom_text',true); ?></h2>
					<p><?php echo strip_tags(get_the_content()); ?> </p>
					<a href="<?php if(get_post_meta(get_the_ID(),'slide_link',true)){ echo get_post_meta(get_the_ID(),'slide_link',true); } ?>" class="read_more">More</a>
				</div>
			</div>
		</div>
		<?php
			$i++;
			endwhile;
			?>
		<?php wp_reset_postdata(); ?>
		<?php /*?>
		<div class="item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/banner_imag_1.jpg" alt="...">
			<div class="container banner_detail">
				<div class="col-md-9 banner_caption">
					<h3>Optimize</h3>
					<h2>Your Health</h2>
					<p>Nulla in diam quis orci porttitor euismod at eu quam. Donec sed nisl eget augue iaculis semper. Sed orci velit, vulputate at turpis vel, vulputate vestibulum diam. In nec euismod ipsum. Donec convallis consequat justo ut sagittis. </p>
					<a href="" class="read_more">More</a>
				</div>
			</div>
		</div>
		<?php */?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
<div class="container-fluid main_video">
	<div class="container">
		<div class="col-md-16 video_inner">
			<div class="col-md-8 pull-left  vido_left">
				<?php $args = array(
					'post_type' => 'video',
					'posts_per_page' => 1
					);
					$the_query = new WP_Query( $args );
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<h3>Videos</h3>
				<a href="<?php if(get_post_meta(get_the_ID(),'slide_link',true)){ echo get_post_meta(get_the_ID(),'slide_link',true); } ?>" class="read_more">Read More</a>
				<div style="clear:both; padding-top:10px;"></div>
				<?php								if(get_video_id_from_url(get_post_meta(get_the_ID(),'video_url',true)) && false === false)
					{ ?>
				<iframe width="100%" height="288" src="//www.youtube.com/embed/<?php echo get_video_id_from_url(get_post_meta(get_the_ID(),'video_url',true)); ?>" frameborder="0" allowfullscreen></iframe>
				<?php }else{ ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/video_imgs.jpg" class="embed_code img-responsive"   />
				<?php }
					endwhile;
					// Reset Post Data
					?>
				<?php wp_reset_postdata() ?>
			</div>
			<div class="col-md-8 pull-right  vido_right">
				<h3>Programs</h3>
				<div id="carousel-example-generic_2" class="carousel_2 slide" data-ride="carousel_2">
					<!-- Wrapper for slides -->
					<ul class="carousel-inner slide">
						<div class="item active">
							<?php 
								$i = 0;
								$args = array(
								  'post_type' => 'program',
								  'posts_per_page' => 10
								  );
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) : $the_query->the_post();
								?>
							<?php if($i > 0 && $i%2 == 0){?>
						</div>
						<div class="item">
							<?php } ?>
							<li class="col-md-8">
								<?php if(get_feature_image_url(get_the_ID())){?>
								<img src="<?php echo get_feature_image_url(get_the_ID()); ?>" class="img-responsive" alt="">
								<?php }else{?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/program_img1.jpg" class="img-responsive" alt="">
								<?php } ?>
								<h3><?php the_title(); ?></h3>
								<p><?php echo substr(strip_tags(get_the_content()),0,100); ?></p>
								<?php /*?><a href="<?php echo the_permalink(); ?>" class="read_more">Read More</a><?php */?>
							</li>
							<?php $i++; 
								endwhile;
								?>
						</div>
						<?php wp_reset_postdata() ?>
						<!--<div class="item active">
							<li class="col-md-8">
							    <img src="<?php echo get_template_directory_uri(); ?>/img/program_img1.jpg" class="img-responsive" alt="">
							    <h3>Weight Training</h3>
							    <p>Most commonly associated with increasing muscle mass and strength as well as toning and defining muscles. </p>
							    <a href="" class="read_more">Read More</a>
							</li>
							                                
							<li class="col-md-8">
							    <img src="<?php echo get_template_directory_uri(); ?>/img/program_img2.jpg" class="img-responsive" alt="">
							     <h3>Water Aerobics</h3>
							     <p>Most commonly associated with increasing muscle mass and strength as well as toning and defining muscles. </p>
							      <a href="" class="read_more">Read More</a>
							</li>
							</div>-->   
					</ul>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic_2" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic_2" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid trainer">
	
		<div class="container">
			<div class="col-md-8 pull-right firt_box">
				<?php $args = array(
					'page_id' => 5,
					);
					// The Query
					$the_query = new WP_Query( $args );
					
					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
				<h2><?php echo get_the_title(); ?></h2>
				<p><?php echo substr(strip_tags(get_the_content()),0,200); ?></p>
				<a href="<?php the_permalink(); ?>" class="tr_read_more">Read More</a>
				<?php 
					endwhile;
					// Reset Post Data
					?>
				<?php wp_reset_postdata() ?>
			</div>
			<div class="clearfix"></div>
		</div>
	
</div>
<div class="container-fluid testimonials">
	<div class="container">
		<div class="col-md-8 testimonial pull-left">
			<h3>Testimonials</h3>
			<?php 
				$args = array(
				  'post_type' => 'testimonial',
				  'posts_per_page' => 1
				  );
					// The Query
					$the_query = new WP_Query( $args );
					
					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
			<a class="read_more" href="<?php echo bloginfo('url'); ?>/testimonial">Read More</a>
			<div class="testimonial_box col-md-16">
				<?php /*?>
				<div class="col-md-6 pull-left">
					<?php if(get_feature_image_url(get_the_ID())){?>
					<img src="<?php echo get_feature_image_url(get_the_ID()); ?>" class="testimonial_by_img" alt="">
					<?php }else{?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial_by.jpg" class="testimonial_by_img" alt=""
					<?php } ?>
				</div>
				><?php */?>
				<div class="col-md-16 pull-right">
					<p><?php echo strip_tags(get_the_content()); ?></p>
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
			<?php 
				endwhile;
				// Reset Post Data
				?>
			<?php wp_reset_postdata() ?>      
		</div>
		<div class="col-md-8 pull-right testimonial_right">
<!-- 			<h3>After \ Before image</h3> -->
			<div id="carousel-example-generic_3" class="carousel_3 slide" data-ride="carousel_2">
				<!-- Wrapper for slides -->
				<div class="carousel-inner slide">
					<?php $args = array(
						'post_type' => 'before_after',
						'posts_per_page' => 10
						);
						$i = 0;
						// The Query
						$the_query = new WP_Query( $args );
						
						// The Loop
						while ( $the_query->have_posts() ) : $the_query->the_post();
						
						?>
					<div class="item <?php if($i == 0){echo 'active';} ?>">
						<?php if(get_feature_image_url(get_the_ID())){?>
						<img src="<?php echo get_feature_image_url(get_the_ID()); ?>" alt="">
						<?php }else{?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/before_and_after_img.png" alt="">
						<?php }?>
					</div>
					<?php 
						$i++;
						endwhile;
						// Reset Post Data
						?>
					<?php wp_reset_postdata() ?>
					<!--  <div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/before_and_after_img.png" alt="">
						</div>         -->                          
				</div>
				<!-- Controls
					<a class="left carousel-control" href="#carousel-example-generic_3" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic_3" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right"></span>
					</a> -->
			</div>
		</div>
	</div>
</div>
<div class="container-fluid call_us">
	<div class="container trainer_call_ul">
		<div class="col-md-4 pull-left trainer_call_ul_left">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tainer_running.png" alt="">
			<h4>Call Us</h4>
			<h3><?php echo get_option_tree( 'phone_number'); ?></h3>
			<a class="mail_to" href="mailto:<?php echo get_option_tree( 'email_address'); ?>"><?php echo get_option_tree( 'email_address'); ?></a>
			<div class="social_icon"> 
				<a href="<?php echo get_option_tree( 'facebook_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_1.png" alt=""></a>
				<a href="<?php echo get_option_tree( 'instagram_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_5.png" alt=""></a>
				<a href="<?php echo get_option_tree( 'youtube_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_6.png" alt=""></a>
				<a href="<?php echo get_option_tree( 'twitter_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_2.png" alt=""></a>
				<a href="<?php echo get_option_tree( 'google_plus_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_3.png" alt=""></a>
			</div>
		</div>
		<div class="col-md-12 trainer_call_ul_right">
			<h2><span>About</span> training Your Body</h2>
			<?php $args = array(
				'page_id' => 38,
				);
				// The Query
				$the_query = new WP_Query( $args );
				
				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post();
				echo '<div style="overflow: hidden; height: 190px;">';
				the_content();
				echo "</div>";
				endwhile;
				// Reset Post Data
				?>
			<a href="<?php the_permalink(); ?>" class="read_more">Read More</a>
			<?php wp_reset_postdata() ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>