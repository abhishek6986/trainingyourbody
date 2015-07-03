

<div class="location container-fluid">

        		<div class="container">

                <div class="loction_map pull-left col-md-8">

                	<h3>Location</h3>

         			 

                     <iframe width="100%" height="235" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo urlencode(get_option_tree( 'address')); ?>&output=embed"></iframe>

                     <!--<img src="<?php echo get_template_directory_uri(); ?>/img/map_img.jpg" class="img-responsive" alt="">-->

                     

                </div>

                

                <div class="usefull_lnks pull-left col-md-4">

                		<h3>Useful Links</h3>	

                        <?php  wp_nav_menu(array('menu'=>'Main Menu','menu_class' => 'footer_menu col-md-8 pull-left')); ?>

                </div>

                

                <div class="col-md-4 news_letter">

               		<h3>Newsletter</h3> 



					<script type="text/javascript">
                    //<![CDATA[
                    if (typeof newsletter_check !== "function") {
                    window.newsletter_check = function (f) {
                        var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                        if (!re.test(f.elements["ne"].value)) {
                            alert("The email is not correct");
                            return false;
                        }
                        if (f.elements["nn"] && (f.elements["nn"].value == "" || f.elements["nn"].value == f.elements["nn"].defaultValue)) {
                            alert("The name is not correct");
                            return false;
                        }
                        for (var i=1; i<20; i++) {
                        if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
                            alert("");
                            return false;
                        }
                        }
                        if (f.elements["ny"] && !f.elements["ny"].checked) {
                            alert("You must accept the privacy statement");
                            return false;
                        }
                        return true;
                    }
                    }
                    //]]>
                    </script>                    
                    <form method="post" action="http://www.trainingyourbody.dev/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                    
                        <input class="newsletter-firstname" type="text" name="nn" placeholder="Your Name" size="30"required>
                        <input class="newsletter-email" type="email" name="ne" placeholder="Your Email" size="30" required>
                        <input class="newsletter-submit" type="submit" value="Subscribe"/>
                    </form>

				<div class="clear"></div>
				<h3>Follow Us</h3> 
                <div class="social_icon"> 
                    <a href="<?php echo get_option_tree( 'facebook_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_1.png" alt=""></a>
                    <a href="<?php echo get_option_tree( 'instagram_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_5.png" alt=""></a>
                    <a href="<?php echo get_option_tree( 'youtube_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_6.png" alt=""></a>
                    <a href="<?php echo get_option_tree( 'twitter_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_2.png" alt=""></a>
                    <a href="<?php echo get_option_tree( 'google_plus_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social_icon_3.png" alt=""></a>
                </div>

                </div> 

               </div> 

        </div>





			<!-- footer -->

			<footer class="container-fluid footer">

        	<div class="container">

            		<a href="" class="col-md-3 pull-left"><img class="footer_logo_img" src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt=""></a>

                    <p class="col-md-10 copy_right pull-right">&copy; <?php echo date('Y'); ?> <a href="http://trainingyourbody.com">Training your Body</a> |    Design: <a href="https://www.wodumedia.com" target="_blank">Wodu Media</a> Hosting: <a href="https://www.keywestwebdesign.com" target="_blank">Key West Web Design</a></p>

            </div>

        </footer>

			<!-- /footer -->



		</div>

		<!-- /wrapper -->



		<?php wp_footer(); ?>

	</body>

</html>

